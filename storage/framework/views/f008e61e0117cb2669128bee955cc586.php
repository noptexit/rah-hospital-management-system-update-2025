<?php
    $username = App\Models\User::where('tenant_id', $row->tenant_id)->first();
?>
<!--[if BLOCK]><![endif]--><?php if(!empty($username) || !empty($row->username)): ?>
    <!--[if BLOCK]><![endif]--><?php if($row->status == 1): ?>
        <!--[if BLOCK]><![endif]--><?php if(isset($username) && !empty($username->username)): ?>
            <a href="<?php echo e(route('front',$username->username)); ?>" class="show-btn text-blue text-decoration-none"
               target="_blank"><?php echo e($username->username); ?><span class="ms-2"><i
                            class="fas fa-external-link-alt url-external-link"></i></span></a>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php else: ?>
        <!--[if BLOCK]><![endif]--><?php if(!empty($row->username)): ?>
            <?php echo e($row->username); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /var/www/html/resources/views/super_admin/users/columns/user_name.blade.php ENDPATH**/ ?>