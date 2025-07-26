<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.change_password.change_password')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['class'=>'form','id'=>'changePasswordForm'])); ?>

            <div class="modal-body">
                <div class="alert alert-danger d-none hide" id="editValidationErrorsBox"></div>
                <?php echo e(Form::hidden('user_id',null,['id'=>'pfUserId'])); ?>

                <?php echo e(Form::hidden('is_active',1)); ?>

                <?php echo csrf_field(); ?>
                <div class="mb-7">
                    <?php echo e(Form::label('current password', __('messages.change_password.current_password').':',['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <input class="form-control" id="pfCurrentPassword"
                           type="password"
                           name="password_current" required
                           placeholder="<?php echo e(__('messages.change_password.current_password')); ?>">
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('password_current')); ?>

                    </div>
                </div>
                <div class="mb-7">
                    <?php echo e(Form::label('current password', __('messages.change_password.new_password').':',['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <input class="form-control" id="pfNewPassword"
                           type="password"
                           name="password" required placeholder="<?php echo e(__('messages.change_password.new_password')); ?>">
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('password')); ?>

                    </div>
                </div>
                <div>
                    <?php echo e(Form::label('password_confirmation', __('messages.change_password.confirm_password').':',['class' => 'form-label'])); ?>

                    <span class="required"></span>
                    <input class="form-control" id="pfNewConfirmPassword"
                           type="password"
                           name="password_confirmation" required
                           placeholder="<?php echo e(__('messages.change_password.confirm_password')); ?>">
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('password')); ?>

                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0','id'=>'btnPrPasswordEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                        data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?>

                </button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/user_profile/change_password_modal.blade.php ENDPATH**/ ?>