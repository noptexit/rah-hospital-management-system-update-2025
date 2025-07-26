<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.prescriptions')); ?>

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
[$__name, $__params] = $__split('prescription-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1262719251-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <?php echo $__env->make('prescriptions.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('prescriptions.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::hidden('prescriptionUrl',url('prescriptions'),['id'=>'indexPrescriptionUrl'])); ?>

        <?php echo e(Form::hidden('doctorUrl',url('doctors'),['id'=>'indexPrescriptionDoctorUrl'])); ?>

        <?php echo e(Form::hidden('patientUrl',route('patients.index'),['id'=>'indexPrescriptionPatientUrl'])); ?>

        <?php echo e(Form::hidden('prescriptions.show.modal', url('prescriptions-show-modal'), ['id' => 'prescriptionShowModal'])); ?>

        <?php echo e(Form::hidden('prescriptionLang',__('messages.delete.prescription'), ['id' => 'prescriptionLang'])); ?>

    </div>

<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/prescriptions/index.blade.php ENDPATH**/ ?>