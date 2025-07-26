<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.hospitals_type')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('hospitalTypeCreateUrl', route('super.admin.hospitals.type.store'), ['class' => 'hospitalTypeCreateUrl'])); ?>

            <?php echo e(Form::hidden('hospitalTypeEditUrl', url('hospital-type'),['id' => 'hospitalTypeEditUrl'])); ?>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('hospital-type-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3028679274-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo $__env->make('hospital_type.create-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('hospital_type.edit-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/hospital_type/index.blade.php ENDPATH**/ ?>