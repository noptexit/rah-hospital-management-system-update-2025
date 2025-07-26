<div class="footer py-4 d-flex flex-lg-column position-sticky bottom-0">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-muted">
            <span><?php echo e(__('messages.web_menu.all_rights_reserved')); ?></span>
            <span class="text-muted fw-bold me-1">&copy <?php echo e(date('Y')); ?></span>
            <a data-turbo="false" href="<?php echo e(url('/')); ?>" class="text-hover-primary"><?php echo e(getLoggedInUser()->hasRole('Super Admin') ? $superAdminSettingValue : getSettingValueByKey('app_name')); ?></a>
        </div>
        <div class="text-muted order-2 order-md-1">
            v<?php echo e(getCurrentVersion()); ?>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/layouts/footer.blade.php ENDPATH**/ ?>