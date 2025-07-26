<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.schedules')); ?>

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
[$__name, $__params] = $__split('schedule-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2895826407-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo e(Form::hidden('scheduleUrl',url('schedules'),['id'=>'indexScheduleUrl'])); ?>

            <?php echo e(Form::hidden('doctorUrl',url('doctors'),['id'=>'indexScheduleDoctorUrl'])); ?>

            <?php echo e(Form::hidden('scheduleLang',__('messages.delete.schedule'), ['id' => 'scheduleLang'])); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/schedules/index.blade.php ENDPATH**/ ?>