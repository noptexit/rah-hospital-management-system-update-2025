<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.currency.currencies')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e(Form::hidden('currencyCreateUrl',route('currency-settings.store'),['id'=>'indexCurrencyCreateUrl'])); ?>

            <?php echo e(Form::hidden('currenciesUrl',url('currency-settings'),['id'=>'indexCurrenciesUrl'])); ?>

            <?php echo e(Form::hidden('medicineCategoryLang', __('messages.delete.medicine_category'), ['id' => 'medicineCategoryLang'])); ?>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('currency-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3858431905-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php echo $__env->make('currency_settings.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('currency_settings.edit-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/currency_settings/index.blade.php ENDPATH**/ ?>