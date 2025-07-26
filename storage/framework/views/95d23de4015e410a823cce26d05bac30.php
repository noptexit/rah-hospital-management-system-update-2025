<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.common.new')); ?> <?php echo e(__('messages.admin')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('header_toolbar'); ?>
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0"><?php echo $__env->yieldContent('title'); ?></h1>
            <a href="<?php echo e(route('admins.index')); ?>"
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
                <div class="card-body">
                    <?php echo Form::open(['route' => 'admins.store', 'files' => true, 'id' => 'createAdminForm']); ?>


                    <?php echo $__env->make('admins.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>




        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/admins/create.blade.php ENDPATH**/ ?>