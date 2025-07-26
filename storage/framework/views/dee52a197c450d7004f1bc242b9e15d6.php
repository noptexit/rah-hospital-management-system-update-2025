<?php $__env->startSection('title'); ?>
    <?php echo e(__('Forbidden')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-center flex-column-fluid p-10">
            <img src="<?php echo e(asset('web/img/error.png')); ?>" class="mw-100 mb-10 h-lg-450px">
            <h1 class="fw-bolder fs-4x text-gray-700 mb-8">
                <?php echo e(403); ?>

            </h1>
            <h1 class="fw-bold mb-10">
                <?php echo e(__($exception->getMessage() ?: 'Forbidden')); ?>

            </h1>
            <div class="text-center">
                <a class="btn btn-primary fw-bolder mt-3" href="<?php echo e(route('landing-home')); ?>">Back to Home Page</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/errors/403.blade.php ENDPATH**/ ?>