<div class="row mb-5">
    <div class="col-md-4">

        <div class="mb-5">
            <?php echo e(Form::label('hospital_name', __('messages.hospitals_list.hospital_name').':', ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::text('hospital_name', null, ['class' => 'form-control', 'required', 'tabindex' => '1', 'placeholder' => __('messages.user.enter_hospital_name'), 'pattern'  => '^[a-zA-Z0-9 ]+$',  'title' => 'Hospital Name Not Allowed Special Character'])); ?>

        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-5">
            <?php echo e(Form::label('username', __('messages.user.hospital_slug').':', ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::text('username', null, ['class' => 'form-control ', 'required', 'tabindex' => '1', 'placeholder' => __('messages.user.enter_hospital_slug'), 'pattern'  => '^\S[a-zA-Z0-9]+$',  'title' => 'Hospital Slug must be alphanumeric and having exact 12 characters in length', 'min' => 12, 'maxlength' => 12])); ?>

        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-5">
            <?php echo e(Form::label('hospital_type', __('messages.hospitals_type') . (':'), ['class' => 'form-label'])); ?>

            <?php echo e(Form::select('hospital_type_id', $hospitalType, null, ['class' => 'form-select', 'id' => 'hospitalTypeId', 'placeholder' => __('messages.hospitals_type'), 'data-control' => 'select2'])); ?>

        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-5">
            <?php echo e(Form::label('email',__('messages.user.email').':', ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::email('email', null, ['class' => 'form-control', 'required', 'tabindex' => '3', 'placeholder' => __('messages.user.enter_email')])); ?>

        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-5">
            <?php echo e(Form::label('email',__('messages.user.city').':', ['class' => 'form-label'])); ?>

            <?php echo e(Form::text('city', null, ['class' => 'form-control', 'tabindex' => '3', 'placeholder' => __('messages.user.city')])); ?>

        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-5  ">
            <?php echo e(Form::label('phone',__('messages.visitor.phone').':', ['class' => 'form-label'])); ?>

            <span class="required"></span>
            <?php echo e(Form::tel('phone', null, ['class' => 'form-control iti phoneNumber', 'id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'tabindex' => '5', 'required'])); ?>

            <?php echo e(Form::hidden('prefix_code',null,['class' => 'prefix_code'])); ?>

            <?php echo e(Form::hidden('country_iso', null, ['class' => 'country_iso'])); ?>

            <span class="text-success d-none fw-400 fs-small mt-2 valid-msg" id="valid-msg">✓ &nbsp; <?php echo e(__('messages.valid')); ?></span>
            <span class="text-danger d-none fw-400 fs-small mt-2 error-msg" id="error-msg"></span>
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label"><?php echo e(__('messages.user.password').':'); ?></label>
        <span class="required"></span>
        <div class="position-relative">
            <input type="password" class="form-control" name="password"
                   placeholder="<?php echo e(__('messages.web_appointment.enter_your_password')); ?>" min="6" max="10" tabindex="8"
                   required>
        </div>
    </div>
    <div class="col-md-4">
        <label class="form-label"><?php echo e(__('messages.user.password_confirmation').':'); ?>

        </label>
        <span class="required"></span>
        <div class="position-relative">
            <input type="password" name="password_confirmation" class="form-control"
                   placeholder="<?php echo e(__('messages.web_appointment.enter_confirm_password')); ?>" min="6" max="10"
                   tabindex="9" required>
        </div>
    </div>
</div>
<div class="d-flex float-end">
    <?php echo e(Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-2 userBtnSave','id' => 'hospitalBtnSave'])); ?>

    <a href="<?php echo e(route('super.admin.hospitals.index')); ?>"
       class="btn btn-secondary"><?php echo e(__('messages.common.cancel')); ?></a>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/super_admin/users/fields.blade.php ENDPATH**/ ?>