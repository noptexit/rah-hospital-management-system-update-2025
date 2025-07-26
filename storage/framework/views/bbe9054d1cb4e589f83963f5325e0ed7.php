<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.general')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <div class="card border-0">
        <div class="card-body">
            <?php echo e(Form::open(['route' => ['super.admin.settings.update'], 'method' => 'post', 'files' => true, 'id' => 'createSetting'])); ?>

            <div class="alert alert-danger d-none hide" id="validationErrorsBox"></div>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-5">
                        <?php echo e(Form::label('app_name', __('messages.setting.app_name') . ':', ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('app_name', $settings['app_name'], ['class' => 'form-control', 'maxLength' => 30, 'placeholder' => __('messages.setting.app_name')])); ?>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mb-5">
                        <?php echo e(Form::label('plan_expire_notification', __('messages.plan_expire_notifications') . ':', ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('plan_expire_notification', $settings['plan_expire_notification'], ['class' => 'form-control', 'maxLength' => 2, 'placeholder' => __('messages.plan_expire_notifications')])); ?>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mb-3">
                        <?php echo e(Form::label('default_country_code', __('messages.common.default_country_code') . ':', ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('default_country_code', null, ['class' => 'form-control', 'placeholder' => __('Default Country Code'), 'id' => 'defaultCountryData'])); ?>

                        <?php echo e(Form::hidden('default_country_code', $settings['default_country_code'], ['id' => 'defaultCountryCode'])); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <?php echo e(Form::label('super_admin_currency', __('messages.setting.currency'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <select id="currencyType" data-show-content="true" class="form-select form-select-solid"
                            name="super_admin_currency">
                            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($currency->currency_code); ?>"
                                    <?php echo e(strtoupper($settings['super_admin_currency']) == $currency->currency_code ? 'selected' : ''); ?>>
                                    <?php echo e($currency->currency_icon); ?>&nbsp;&nbsp;&nbsp; <?php echo e($currency->currency_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- App Enable Recaptcha field -->

                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo e(Form::label('google_captcha_key', __('messages.setting.enable_google_reCAPTCHA') . ':', ['class' => 'form-label'])); ?>

                            <div class="form-check form-switch fv-row mb-3">
                                <input tabindex="11" name="enable_google_recaptcha"
                                    class="form-check-input w-35px h-20px is-active" value="1"
                                    <?php echo e(isset($settings['enable_google_recaptcha']) && $settings['enable_google_recaptcha'] ? 'checked' : ''); ?>

                                    type="checkbox" id="captchaEnableAdmin">
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php echo e(Form::label('default_language', __('messages.profile.language') . ':', ['class' => 'form-label'])); ?>

                            <?php echo e(Form::select('default_language', \App\Models\User::LANGUAGES, isset($settings['default_language']) ? $settings['default_language'] : '', ['id' => 'defaultLanguage', 'class' => 'form-select', 'data-control' => 'select2', 'data-hide-search' => 'true', 'data-placeholder' => 'language'])); ?>

                        </div>
                    </div>
                </div>

                <div class="captcha-div d-none col-12">
                    <div class="row">
                        <div class="form-group col-sm-6 mb-5">
                            <?php echo e(Form::label('google_captcha_key', __('messages.new_change.captcha_key') . ':', ['class' => 'form-label'])); ?>

                            <?php echo e(Form::text('google_captcha_key', isset($settings['google_captcha_key']) ? $settings['google_captcha_key'] : null, ['class' => 'form-control', 'id' => 'captchaKey', 'placeholder' => __('Google Captcha key')])); ?>


                        </div>
                        <div class="form-group col-sm-6 mb-5">
                            <?php echo e(Form::label('google_captcha_secret', __('messages.new_change.captcha_secret') . ':', ['class' => 'form-label'])); ?>

                            <?php echo e(Form::text('google_captcha_secret', isset($settings['google_captcha_secret']) ? $settings['google_captcha_secret'] : null, ['class' => 'form-control', 'id' => 'captchaSecret', 'placeholder' => __('Google Captcha Secret')])); ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-5">
                        <?php echo e(Form::label('manual_instruction', __('messages.custom_field.manual_instruction') . ':', ['class' => 'form-label'])); ?>

                        <?php echo e(Form::textarea('manual_instruction', $settings['manual_instruction'], ['class' => 'form-control', 'tabindex' => '1', 'rows' => '5', 'maxLength' => 191, 'placeholder' => __('messages.custom_field.manual_instruction')])); ?>

                    </div>
                </div>
                <!-- App Logo Field -->
                <div class="form-group col-sm-2 mb-5">
                    <div class="row2">
                        <div class="d-block">
                            <?php echo e(Form::label('app_logo', __('messages.setting.app_logo') . ':', ['class' => 'form-label'])); ?>

                            <span data-bs-toggle="tooltip" data-placement="top"
                                data-bs-original-title="<?php echo e(__('messages.setting.image_validation')); ?>">
                                <i class="fas fa-question-circle ml-1 mt-1 general-question-mark"></i>
                            </span>
                        </div>
                        <div class="d-block">
                            <?php
                            $style = 'style=';
                            $background = 'background-image:';
                            ?>
                            <div class="image-picker">
                                <div class="image previewImage" id="previewImage"
                                    style="background-image: url('<?php echo e($settings['app_logo'] ? asset($settings['app_logo']) : asset('hms-saas-logo.png')); ?>')">
                                </div>
                                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                                    data-placement="top" data-bs-original-title=<?php echo e(__('messages.setting.change_logo')); ?>>
                                    <label>
                                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                        <?php echo e(Form::file('app_logo', ['id' => 'appLogos', 'class' => 'image-upload d-none', 'accept' => 'image/*'])); ?>

                                        <input type="hidden" name="avatar_remove">
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Favicon Field -->
                <div class="form-group col-sm-2 mb-5">
                    <div class="row2">
                        <div class="d-block">
                            <?php echo e(Form::label('favicon', __('messages.setting.favicon') . ':', ['class' => 'form-label'])); ?>

                            <span class="required"></span>
                            <span data-bs-toggle="tooltip" data-placement="top"
                                data-bs-original-title="<?php echo e(__('messages.setting.favicon_validation')); ?>">
                                <i class="fas fa-question-circle ml-1 mt-1 general-question-mark"></i>
                            </span>
                        </div>
                        <div class="d-block">
                            <?php
                            $style = 'style=';
                            $background = 'background-image:';
                            ?>
                            <div class="image-picker">
                                <div class="image previewImage" id="previewImage"
                                    style="background-image: url('<?php echo e(isset($settings['favicon']) ? asset($settings['favicon']) : asset('web/img/hms-saas-favicon.ico')); ?>')">
                                </div>
                                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                                    data-placement="top"
                                    data-bs-original-title=<?php echo e(__('messages.setting.change_favicon')); ?>>
                                    <label>
                                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                        <?php echo e(Form::file('favicon', ['id' => 'favicons', 'class' => 'image-upload d-none', 'accept' => 'image/*'])); ?>

                                        <input type="hidden" name="avatar_remove">
                                    </label>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="float-end">
                <?php echo e(Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-2'])); ?>

                <?php echo e(Form::reset(__('messages.common.cancel'), ['class' => 'btn btn-secondary'])); ?>

            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('super_admin_settings.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/super_admin_settings/general.blade.php ENDPATH**/ ?>