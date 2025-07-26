<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <div>
                    <span class="text-dark"><?php echo e($errors->first()); ?></span>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body p-0">
            <?php echo e(Form::hidden('setting',true,['id'=>'editSetting'])); ?>

            <?php echo e(Form::hidden('utilsScript',asset('assets/js/int-tel/js/utils.min.js'),['class'=>'utilsScript'])); ?>

            <?php echo e(Form::hidden('isEdit',true,['class'=>'isEdit'])); ?>


            <?php echo e(Form::hidden('moduleUrl',route('module.index'),['id'=>'editGeneralModuleUrl'])); ?>

            <?php echo e(Form::hidden('imageValidation',__('messages.setting.image_validation'),['id'=>'editGeneralImageValidation'])); ?>

            <?php echo e(Form::hidden('searchExist',false,['id'=>'editGeneralSearchExist'])); ?>

            <?php echo $__env->yieldContent('section'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/settings/edit.blade.php ENDPATH**/ ?>