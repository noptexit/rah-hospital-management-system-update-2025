<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.hospital_schedule')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php echo e(Form::hidden('checkRecords', route('checkRecord'), ['class' => 'checkRecords'])); ?>

                    <?php echo e(Form::hidden('hospitalScheduleRoute', route('hospital-schedules.store'), ['class' => 'hospitalScheduleRoute'])); ?>

                    <?php echo e(Form::open(['route' => 'hospital-schedules.store', 'id' => 'saveForm', 'method' => 'POST'])); ?>

                    <?php echo $__env->make('hospital_schedule.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/hospital_schedule/index.blade.php ENDPATH**/ ?>