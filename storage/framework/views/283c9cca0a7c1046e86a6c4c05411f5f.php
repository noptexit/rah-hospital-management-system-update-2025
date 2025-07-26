<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.sidebar_setting')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-flex flex-column">
            <div class="d-flex align-items-center py-1">
            </div>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('sidebar-setting-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-876091913-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo $__env->make('settings.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('moduleUrl', route('module.index'), ['id' => 'moduleURL'])); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('settings.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/settings/sidebar-setting.blade.php ENDPATH**/ ?>