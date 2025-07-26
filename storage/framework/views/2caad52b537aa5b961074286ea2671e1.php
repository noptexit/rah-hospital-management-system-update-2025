<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.users')); ?>

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
[$__name, $__params] = $__split('user-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1653954623-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo e(Form::hidden('user_url',route('users.index'),['id'=>'indexUserUrl'])); ?>

            <?php echo e(Form::hidden('userLang',__('messages.delete.user'), ['id' => 'userLang'])); ?>

            <?php echo e(Form::hidden('isEdit',true,['class'=>'isEdit'])); ?>

        </div>
        <?php echo $__env->make('users.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('users.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/users/index.blade.php ENDPATH**/ ?>