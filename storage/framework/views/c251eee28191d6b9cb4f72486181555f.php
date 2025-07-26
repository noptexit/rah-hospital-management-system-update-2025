<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-5">
            <?php echo e(Form::label('first_name',__('messages.user.first_name').(':'), ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::text('first_name', null, ['class' => 'form-control','required', 'placeholder' => __('messages.user.first_name')])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-5">
            <?php echo e(Form::label('last_name',__('messages.user.last_name').(':'), ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::text('last_name', null, ['class' => 'form-control','required','placeholder' => __('messages.user.last_name')])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-5">
            <?php echo e(Form::label('email',__('messages.user.email').(':'), ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::email('email', null, ['class' => 'form-control','required', 'placeholder' => __('messages.user.email')])); ?>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-5">
            <?php echo e(Form::label('password',__('messages.user.password').(':'), ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::password('password', ['class' => 'form-control','required','min' => '6','max' => '10', 'placeholder' => __('messages.user.password')])); ?>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-5">
            <?php echo e(Form::label('password_confirmation',__('messages.user.password_confirmation').(':'), ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::password('password_confirmation', ['class' => 'form-control','required','min' => '6','max' => '10', 'placeholder' => __('messages.user.password_confirmation')])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-5">
            <?php echo e(Form::label('phone',__('messages.user.phone').(':'), ['class' => 'form-label'])); ?>

            <br>
            <?php echo e(Form::tel('phone', null, ['class' => 'form-control w-100 iti phoneNumber','id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'])); ?>

            <?php echo e(Form::hidden('prefix_code',null,['class' => 'prefix_code'])); ?>

            <?php echo e(Form::hidden('country_iso', null, ['class' => 'country_iso'])); ?>

            <span class="text-success d-none fw-400 fs-small mt-2 valid-msg" id="valid-msg">✓ &nbsp; <?php echo e(__('messages.valid')); ?></span>
            <span class="text-danger d-none fw-400 fs-small mt-2 error-msg" id="error-msg"></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group col-md-4 mb-5">
            <div class="row2" io-image-input="true">
                <?php echo e(Form::label('image',__('messages.common.profile').(':'), ['class' => 'form-label'])); ?>

                <div class="d-block">
                    <?php
                    $style = 'style=';
                    $background = 'background-image:';
                    ?>

                    <div class="image-picker">
                        <div class="image previewImage" id="previewImage"
                        <?php echo e($style); ?>"<?php echo e($background); ?> url(<?php echo e(asset('assets/img/avatar.png')); ?>">
                        <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                              data-placement="top"
                              data-bs-original-title="<?php echo e(__('messages.profile.change_Profile')); ?>">
                                    <label>
                                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                        <input type="file" id="doctorProfileImage" name="image"
                                               class="image-upload d-none profileImage"
                                               accept=".png, .jpg, .jpeg, .gif, .webp"/>
                            <input type="hidden" name="avatar_remove"/>
                                    </label>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <?php echo e(Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-2'])); ?>

        <a href="<?php echo e(route('admins.index')); ?>"
           class="btn btn-secondary"><?php echo e(__('messages.common.cancel')); ?></a>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/admins/fields.blade.php ENDPATH**/ ?>