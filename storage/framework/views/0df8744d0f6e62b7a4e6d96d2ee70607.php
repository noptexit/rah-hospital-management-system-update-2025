<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.dashboard.dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $currencySymbol = getCurrencySymbol();
    ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin-dashboard', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3901348369-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
        <?php echo e(Form::hidden('incomeExpenseReportUrl', route('income-expense-report'), ['id' => 'dashboardIncomeExpenseReportUrl', 'class' => 'incomeExpenseReportUrl'])); ?>

        <?php echo e(Form::hidden('currentCurrencyName', $currencySymbol, ['id' => 'dashboardCurrentCurrencyName', 'class' => 'currentCurrencyName'])); ?>

        <?php echo e(Form::hidden('income_and_expense_reports', __('messages.dashboard.income_and_expense_reports'), ['id' => 'dashboardIncome_and_expense_reports', 'class' => 'income_and_expense_reports'])); ?>

        <?php echo e(Form::hidden('defaultAvatarImageUrl', asset('assets/img/avatar.png'), ['id' => 'dashboardDefaultAvatarImageUrl', 'class' => 'defaultAvatarImageUrl'])); ?>

        <?php echo e(Form::hidden('noticeBoardUrl', url('notice-boards'), ['id' => 'dashboardNoticeBoardUrl', 'class' => 'noticeBoardUrl'])); ?>

    </div>
<?php $__env->stopSection(); ?>










<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/dashboard/index.blade.php ENDPATH**/ ?>