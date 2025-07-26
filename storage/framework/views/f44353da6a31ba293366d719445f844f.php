<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.hospitals')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php echo e(Form::hidden('userUrl', route('super.admin.hospitals.index'), ['id' => 'userIndexUrl'])); ?>

    <?php echo e(Form::hidden('showUrl', url('super-admin/hospital'), ['id' => 'userShowUrl'])); ?>

    <?php echo e(Form::hidden('hospitalUrl', route('hospital.index'), ['id' => 'hospitalIndexUrl'])); ?>

    <?php echo e(Form::hidden('isEdit', true, ['class' => 'isEdit'])); ?>

    <?php echo e(Form::hidden('impersonate', __('messages.impersonate'), ['id' => 'impersonate'])); ?>

    <?php echo e(Form::hidden('impersonate-route', url('super-admin/impersonate'), ['id' => 'impersonateRoute'])); ?>

    <?php echo e(Form::hidden('userLang',__('messages.delete.user'), ['id' => 'userLang'])); ?>

    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('super-admin-user-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2186982841-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <?php echo $__env->make('super_admin.users.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/super_admin/users/index.blade.php ENDPATH**/ ?>