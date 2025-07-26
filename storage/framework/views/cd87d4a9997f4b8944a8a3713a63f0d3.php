<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.dashboard.dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid">
        <span class="text-decoration-none super-admin-dashboard d-none"></span>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboard', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1844009468-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/super_admin/dashboard/index.blade.php ENDPATH**/ ?>