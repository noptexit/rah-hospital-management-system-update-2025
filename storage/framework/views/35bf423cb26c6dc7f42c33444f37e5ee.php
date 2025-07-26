<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.admins')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('adminUrl', url('super-admin/admins'), ['id' => 'adminUrl'])); ?>

            <?php echo e(Form::hidden('admin', __('messages.admin'), ['id' => 'Admin'])); ?>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4097236166-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/admins/index.blade.php ENDPATH**/ ?>