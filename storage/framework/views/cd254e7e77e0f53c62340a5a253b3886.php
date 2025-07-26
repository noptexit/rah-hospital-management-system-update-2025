<div id="editHospitalTypeModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><?php echo e(__('messages.common.edit')); ?> <?php echo e(__('messages.hospitals_type')); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'editHospitalTypeForm'])); ?>

            
            <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <?php echo e(Form::hidden('id', 'id', ['id' => 'editHospitalTypeId'])); ?>

                    <div class="form-group col-sm-12">
                        <?php echo e(Form::label('name', __('messages.hospitals_type') . (':'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('name', null, ['class' => 'form-control','required', 'name' => 'name', 'id' => 'editHospitalTypeName', 'placeholder' => __('messages.hospitals_type')])); ?>

                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary m-0','id' => 'editHospitalTypeSaveBtn','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"><?php echo e(__('messages.common.cancel')); ?></button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/hospital_type/edit-modal.blade.php ENDPATH**/ ?>