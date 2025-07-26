<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.bed_assign.bed_assigns')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <div class="container-fluid">
            <div class="d-flex flex-column">
                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('bed-assign-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2172218257-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php echo $__env->make('bed_assigns.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e(Form::hidden('bedAssignUrl', url('bed-assigns'), ['id' => 'bedAssignUrl'])); ?>

                <?php echo e(Form::hidden('bedUrl', url('beds'), ['id' => 'bedUrl'])); ?>

                <?php echo e(Form::hidden('patientUrl', url('patients'), ['id' => 'patientUrl'])); ?>

                <?php echo e(Form::hidden('caseUrl', url('patient-cases'), ['id' => 'caseUrl'])); ?>

                <?php echo e(Form::hidden('bedAssignLang', __('messages.delete.bed_assign'), ['id' => 'bedAssignLang'])); ?>

            </div>
        </div>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/bed_assigns/index.blade.php ENDPATH**/ ?>