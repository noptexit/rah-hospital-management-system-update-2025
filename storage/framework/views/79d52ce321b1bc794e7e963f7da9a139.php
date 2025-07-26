<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.general')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
    <div class="card border-0">
        <div class="card-body">
            <?php echo e(Form::open(['route' => ['settings.update'], 'method' => 'post', 'files' => true, 'id' => 'createHospitalSetting'])); ?>

            <div class="alert alert-danger d-none hide" id="generalValidationErrorsBox"></div>
            <div class="row">
                <!-- App Name Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('app_name', __('messages.setting.app_name').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::text('app_name', $settings['app_name'], ['class' => 'form-control', 'required', 'placeholder' => __('messages.setting.app_name')])); ?>

                </div>
                <!-- Company Name Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('company_name', __('messages.setting.company_name').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::text('company_name', $settings['company_name'], ['class' => 'form-control', 'required', 'placeholder' => __('messages.setting.company_name')])); ?>

                </div>
            </div>
            <div class="row">
                <!-- Hospital Email Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('hospital_email', __('messages.setting.hospital_email').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::email('hospital_email', $settings['hospital_email'], ['class' => 'form-control', 'required', 'placeholder' => __('messages.setting.hospital_email')])); ?>

                </div>
                <!-- Hospital Phone Field -->
                <div class="form-group col-sm-6 mb-5 hospitalPhone">
                    <?php echo e(Form::label('hospital_phone', __('messages.setting.hospital_phone').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <br>
                    <?php echo e(Form::tel('hospital_phone', $settings['hospital_phone'], ['class' => 'form-control','id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','required'])); ?>

                    <?php echo Form::hidden('prefix_code',null,['class'=>'prefix_code']); ?>

                    <?php echo e(Form::hidden('country_iso', null, ['class' => 'country_iso'])); ?>

                    <span class="text-success valid-msg d-none fw-400 fs-small mt-2" id="valid-msg">✓ &nbsp; <?php echo e(__('messages.valid')); ?></span>
                    <span class="text-danger error-msg d-none fw-400 fs-small mt-2" id="error-msg"></span>
                </div>
                <!-- Hospital From Day Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('hospital_from_day', __('messages.setting.hospital_from_day').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::text('hospital_from_day', $settings['hospital_from_day'], ['class' => 'form-control', 'required', 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.setting.hospital_from_day')])); ?>

                </div>
                <!-- Hospital From Time Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('hospital_from_time', __('messages.setting.hospital_from_time').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::text('hospital_from_time', $settings['hospital_from_time'], ['class' => 'form-control', 'required', 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.setting.hospital_from_time')])); ?>

                </div>
                <!-- Address Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('hospital_address', __('messages.setting.address').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::text('hospital_address', $settings['hospital_address'], ['class' => 'form-control', 'required', 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.setting.address')])); ?>

                </div>
                <!-- Currency Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('current_currency', __('messages.setting.currency').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <select id="currencyType" data-show-content="true" class="form-select"
                            name="current_currency">
                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>" <?php echo e(getCurrentCurrency() == $key ? 'selected' : ''); ?>>
                                <?php echo e($currency['symbol']); ?>&nbsp;&nbsp;&nbsp; <?php echo e($currency['name']); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <!-- About us Field -->
                <div class="form-group col-sm-12 mb-5">
                    <?php echo e(Form::label('about_us', __('messages.about_us').':', ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <?php echo e(Form::textarea('about_us', $settings['about_us'], ['class' => 'form-control', 'required', 'rows' => 5, 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.about_us')])); ?>

                </div>
            </div>
            <div class="row">
                <!-- App Logo Field -->
                <div class="form-group col-sm-6 mb-5">
                    <div class="d-block">
                        <?php echo e(Form::label('app_logo', __('messages.setting.app_logo').(':'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <span data-bs-toggle="tooltip"
                              data-placement="top"
                              data-bs-original-title="<?php echo e(__('messages.setting.image_validation')); ?>">
                            <i class="fas fa-question-circle ml-1 mt-1 general-question-mark" ></i>
                        </span>
                    </div>
                    <div class="image-input image-input-outline">
                        <?php
                        $style = 'style';
                        $background = 'background-image:';
                        ?>
                        <div class="image-picker">
                            <div class="image previewImage" id="logoPreviewImage"
                                <?php echo e($style); ?>="<?php echo e($background); ?> url(<?php echo e(($settings['app_logo']) ?
                                                $settings['app_logo'] : asset('hms-saas-logo.png')); ?>)">
                            </div>
                            <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                                  data-placement="top"
                                  data-bs-original-title="<?php echo e(__('messages.setting.change_logo')); ?>">
                                <label>
                                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                    <input type="file" id="appLogos" name="app_logo" class="image-upload d-none"
                                           accept=".png, .jpg, .jpeg, .webp"/>
                                    <input type="hidden" name="avatar_remove"/>
                                </label>
                            </span>
                    </div>
                </div>
            </div>

            <!-- Favicon Field -->
            <div class="form-group col-sm-6 mb-5">
                <div class="d-block">
                    <?php echo e(Form::label('favicon', __('messages.setting.favicon').(':'), ['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <span data-bs-toggle="tooltip"
                          id="planTooltip"
                          data-placement="top"
                          data-bs-original-title="<?php echo e(__('messages.setting.favicon_validation')); ?>">
                        <i class="fas fa-question-circle ml-1 mt-1 general-question-mark"></i>
                    </span>
                </div>
                <div class="image-input image-input-outline">
                    <?php
                    $style = 'style';
                    $background = 'background-image:';
                    ?>
                    <div class="image-picker">
                        <div class="image previewImage" id="previewImage"
                        <?php echo e($style); ?>="<?php echo e($background); ?> url(<?php echo e(($settings['favicon']) ?
                                        $settings['favicon'] : asset('web/img/hms-saas-favicon.ico')); ?>)">
                        </div>
                        <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                              data-placement="top"
                              data-bs-original-title="<?php echo e(__('messages.setting.change_favicon')); ?>">
                            <label>
                                <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                <input type="file" id="favicons" name="favicon" class="image-upload d-none"
                                       accept=".png, .jpg, .jpeg, .webp"/>
                                <input type="hidden" name="avatar_remove"/>
                            </label>
                        </span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-3 mb-5">
            <div class="col-md-12 mb-3">
                <h5><?php echo e(__('messages.setting.social_details')); ?></h5>
                </div>

                <!-- Facebook URL Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('facebook_url', __('messages.facebook_url').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('facebook_url', $settings['facebook_url'], ['class' => 'form-control','id'=>'generalFacebookUrl', 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.facebook_url')])); ?>

                </div>

                <!-- Twitter URL Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('twitter_url', __('messages.twitter_url').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('twitter_url', $settings['twitter_url'], ['class' => 'form-control','id'=>'generalTwitterUrl', 'onkeypress' => 'return avoidSpace(event);',' placeholder' => __('messages.twitter_url')])); ?>

                </div>

                <!-- Instagram URL Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('instagram_url', __('messages.instagram_url').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('instagram_url', $settings['instagram_url'], ['class' => 'form-control', 'id'=>'generalInstagramUrl', 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.instagram_url')])); ?>

                </div>

                <!-- LinkedIn URL Field -->
                <div class="form-group col-sm-6 mb-5">
                    <?php echo e(Form::label('linkedIn_url', __('messages.linkedIn_url').':', ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('linkedIn_url', $settings['linkedIn_url'], ['class' => 'form-control','id'=>'generalLinkedInUrl', 'onkeypress' => 'return avoidSpace(event);', 'placeholder' => __('messages.linkedIn_url')])); ?>

                </div>

            </div>
    <div class="form-group col-lg-12 col-md-12 d-flex justify-content-start mb-3">
        <div class="form-check form-switch fv-row mb-3">
            <input tabindex="11" name="enable_google_recaptcha" class="form-check-input w-35px h-20px is-active"
                   value="1"
                   <?php echo e((isset($settings['enable_google_recaptcha']) && $settings['enable_google_recaptcha']) ? 'checked' : ''); ?> type="checkbox"
                   id="allowmarketing">
            <label class="form-check-label" for="allowmarketing"></label>
        </div>
        <span class="form-label"><?php echo e(__('messages.setting.enable_google_reCAPTCHA')); ?></span>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <!-- Submit Field -->
        <div class="d-flex justify-content-end">
            <?php echo e(Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary'])); ?>

            <?php echo e(Form::reset(__('messages.common.cancel'), ['class' => 'btn btn-secondary ms-2'])); ?>

        </div>
    </div>
    <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('settings.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/settings/general.blade.php ENDPATH**/ ?>