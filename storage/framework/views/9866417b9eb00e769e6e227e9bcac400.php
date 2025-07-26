<div class="badge bg-light-info">
    <div class="mb-2"><?php echo e(\Carbon\Carbon::parse($row->created_at)->isoFormat('LT')); ?></div>
    <div><?php echo e(\Carbon\Carbon::parse($row->created_at)->translatedFormat('jS M, Y')); ?></div>
</div>
<?php /**PATH /var/www/html/resources/views/super_admin/users/columns/created_on.blade.php ENDPATH**/ ?>