<div class="d-flex align-items-center">
    <div class="image image-circle image-mini me-3">
        <a href="#" data-id="<?php echo e($row->id); ?>" class="show-btn">
            <div>
                <img src="<?php echo e($row->image_url); ?>" alt=""
                     class="user-img rounded-circle image">
            </div>
        </a>
    </div>
    <div class="d-flex flex-column">
        <a href="<?php echo e(url('super-admin/hospital').'/'.$row->id); ?>}" class="text-decoration-none mb-1 show-btn"
           data-id="<?php echo e($row->id); ?>"><?php echo e($row->hospital_name); ?></a>
        <span><?php echo e($row->email); ?></span>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/super_admin/users/columns/name.blade.php ENDPATH**/ ?>