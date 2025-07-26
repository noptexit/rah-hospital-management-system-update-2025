<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.hospitals_list.edit_hospital')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header_toolbar'); ?>
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0"><?php echo $__env->yieldContent('title'); ?></h1>
            <a href="<?php echo e(route('super.admin.hospitals.index')); ?>"
               class="btn btn-outline-primary"><?php echo e(__('messages.common.back')); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-12">
                    <?php echo e(Form::hidden('isEdit', true, ['class' => 'isEdit'])); ?>

                    <?php echo e(Form::hidden('isEdit', asset('assets/js/int-tel/js/utils.min.js'), ['class' => 'utilsScript'])); ?>

                    <?php echo e(Form::hidden('phoneNo', old('prefix_code').old('phone'), ['class' => 'phoneNo'])); ?>

                    <?php echo e(Form::model($hospital, ['route' => ['hospital.update', $hospital->id], 'files' => 'true', 'method' => 'patch', 'id' => 'editHospitalUserForm'])); ?>

                    <?php echo $__env->make('super_admin.users.edit_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/super_admin/users/edit.blade.php ENDPATH**/ ?>