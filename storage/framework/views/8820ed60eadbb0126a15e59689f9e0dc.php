<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.document_types')); ?>

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
[$__name, $__params] = $__split('document-type-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-694361445-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo $__env->make('document_types.add_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('document_types.edit_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.modal.templates.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('docTypeCreateUrl', route('document-types.store'), ['id' => 'indexDocTypeCreateUrl', 'class' => 'docTypeCreateUrl'])); ?>

            <?php echo e(Form::hidden('docTypeUrl', route('document-types.index'), ['id' => 'indexDocTypeUrl', 'class' => 'docTypeUrl'])); ?>

            <?php echo e(Form::hidden('documentTypeLang', __('messages.delete.document_type'), ['id' => 'documentTypeLang'])); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/document_types/index.blade.php ENDPATH**/ ?>