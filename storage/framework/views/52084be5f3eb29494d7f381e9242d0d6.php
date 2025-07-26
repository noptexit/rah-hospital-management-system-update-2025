<!--[if BLOCK]><![endif]--><?php if($row->email_verified_at == null): ?>
    <div class="d-flex justify-content-center">
        <a href="javascript:void(0)" data-id="<?php echo e($row->id); ?>" style="pointer-events: none;
                            cursor: default;"
           class="btn btn-sm btn-secondary user-hospital-impersonate"><?php echo e(__('messages.impersonate')); ?></a>
    </div>
<?php else: ?>
    <div class="d-flex justify-content-center">
        <a href="javascript:void(0)" data-id="<?php echo e($row->id); ?>"
           class="btn btn-sm btn-primary user-hospital-impersonate"><?php echo e(__('messages.impersonate')); ?></a>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /var/www/html/resources/views/super_admin/users/columns/impersonate.blade.php ENDPATH**/ ?>