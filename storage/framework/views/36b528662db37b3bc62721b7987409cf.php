<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.appointments')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-flex flex-column">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appointment-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3292109418-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <?php echo $__env->make('appointments.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo e(Form::hidden('appointmentUrl', url('appointments'), ['class' => 'appointmentURL'])); ?>

        <?php echo e(Form::hidden('patientUrl', url('patients'), ['class' => 'patientAppointmentURL'])); ?>

        <?php echo e(Form::hidden('doctorUrl', url('doctors'), ['class' => 'doctorAppointmentURL'])); ?>

        <?php echo e(Form::hidden('doctorShowUrl', url('employee/doctor'), ['class' => 'doctorShowURL'])); ?>

        <?php echo e(Form::hidden('patientRole', Auth::user()->hasRole('Patient') ? true : false, ['class' => 'patientRole'])); ?>

        <?php echo e(Form::hidden('doctorRole', Auth::user()->hasRole('Doctor') ? false : true, ['class' => 'doctorRole'])); ?>

        <?php echo e(Form::hidden('loginDoctor', Auth::user()->hasRole('Doctor') ? true : false, ['class' => 'loginDoctor'])); ?>

        <?php echo e(Form::hidden('adminRole', Auth::user()->hasRole('Admin') ? true : false, ['class' => 'adminRole'])); ?>

        <?php echo e(Form::hidden('doctorDepartmentUrl', url('doctor-departments'), ['class' => 'doctorDepartmentURL'])); ?>

        <?php echo e(Form::hidden('todayAppointment', __('messages.appointment.today'), ['id' => 'todayAppointment'])); ?>

        <?php echo e(Form::hidden('yesterdayAppointment', __('messages.appointment.yesterday'), ['id' => 'yesterdayAppointment'])); ?>

        <?php echo e(Form::hidden('thisWeekAppointment', __('messages.appointment.this_week'), ['id' => 'thisWeekAppointment'])); ?>

        <?php echo e(Form::hidden('last7DayAppointment', __('messages.appointment.last_7_days'), ['id' => 'last7DayAppointment'])); ?>

        <?php echo e(Form::hidden('last30DayAppointment', __('messages.appointment.last_30_days'), ['id' => 'last30DayAppointment'])); ?>

        <?php echo e(Form::hidden('thisMonthAppointment', __('messages.appointment.this_month'), ['id' => 'thisMonthAppointment'])); ?>

        <?php echo e(Form::hidden('lastMonthAppointment', __('messages.appointment.last_month'), ['id' => 'lastMonthAppointment'])); ?>

        <?php echo e(Form::hidden('appointmentLang', __('messages.delete.appointment'), ['id' => 'appointmentLang'])); ?>

    </div>
<?php $__env->stopSection(); ?>

















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/appointments/index.blade.php ENDPATH**/ ?>