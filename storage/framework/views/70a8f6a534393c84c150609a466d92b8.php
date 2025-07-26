<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.radiology_tests')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('radiology-test-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3437168138-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo e(Form::hidden('radiologyTestUrl', url('radiology-tests'), ['id' => 'radiologyTestURL'])); ?>

            <?php echo e(Form::hidden('radiologyTestLang',__('messages.delete.radiology_test'), ['id' => 'radiologyTestLang'])); ?>

            <?php echo $__env->make('partials.page.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('radiology_tests.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/radiology_tests/index.blade.php ENDPATH**/ ?>