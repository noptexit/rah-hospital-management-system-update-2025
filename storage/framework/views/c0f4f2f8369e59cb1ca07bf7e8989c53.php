<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.custom_field.custom_field')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('add-custom-fields', route('custom-fields.store'), ['class' => 'addCustomFieldURL'])); ?>

            <?php echo e(Form::hidden('addCustomFieldUrl',url('custom-fields'),['id'=>'indexAddCustomFieldURL'])); ?>

            <?php echo e(Form::hidden('AddCustomFields', __('messages.custom_field.custom_field'), ['id' => 'customField'])); ?>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('custom-field-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2837950008-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <?php echo $__env->make('custom_fields.custom_field_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('custom_fields.edit_custom_field_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/custom_fields/index.blade.php ENDPATH**/ ?>