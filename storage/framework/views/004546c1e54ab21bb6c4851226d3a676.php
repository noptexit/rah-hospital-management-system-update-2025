<!--[if BLOCK]><![endif]--><?php if($row->department): ?>
    <div class="d-flex justify-content-center">
        <label class="form-check form-switch form-check-custom form-check-solid form-switch-sm justify-content-center">
            <input name="status" data-id="<?php echo e($row->id); ?>" class="form-check-input super-user-is-verified cursor-pointer" type="checkbox" value="1"
                    <?php echo e($row->email_verified_at == null ? '' : 'checked disabled'); ?>>
            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
        </label>
    </div>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /var/www/html/resources/views/super_admin/users/columns/email_verified.blade.php ENDPATH**/ ?>