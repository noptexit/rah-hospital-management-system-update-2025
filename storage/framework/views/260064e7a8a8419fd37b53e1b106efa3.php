<?php $__env->startSection('title'); ?>
    <?php echo e(__('Server Error')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-center flex-column-fluid p-10">
            <img src="<?php echo e(asset('web/img/error.png')); ?>" class="mw-100 mb-10 h-lg-450px">
            <h1 class="fw-bolder fs-4x text-gray-700 mb-8">
                <?php echo e(500); ?>

            </h1>
            <h1 class="fw-bold mb-10">
                <?php echo e('Server Error'); ?>

            </h1>
            <div class="text-center">
                <a class="btn btn-primary fw-bolder mt-3" href="<?php echo e(route('landing-home')); ?>">Back to Home Page</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/errors/500.blade.php ENDPATH**/ ?>