<style>
    .page-item.active .page-link {
        z-index: 3;
        color: #3dc1d3;
        background-color: var(--main-color);
        border-color: var(--main-color);
    }

    .page-item:not(:first-child) .page-link {
        margin-left: inherit;
    }
</style>
<?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination justify-content-center flex-wrap">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span class="page-link prev page-numbers p-0" aria-hidden="true"><i
                                class="ri-arrow-left-s-line"></i></span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link prev page-numbers p-0 previous" href="<?php echo e($paginator->previousPageUrl()); ?>"
                       rel="prev"
                       aria-label="<?php echo app('translator')->get('pagination.previous'); ?>"><i class="fa-solid fa-angle-left"></i></a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="page-item disabled" aria-disabled="true"><span
                                class="page-link page-numbers p-0"><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item active" aria-current="page"><span
                                    class="page-link page-numbers p-0"><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li class="page-item"><a class="page-link page-numbers p-0"
                                                     href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link next page-numbers p-0" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"
                       aria-label="<?php echo app('translator')->get('pagination.next'); ?>"><i class="fa-solid fa-angle-right"></i></a>
                </li>
            <?php else: ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span class="page-link prev page-numbers p-0" aria-hidden="true"><i
                                class="ri-arrow-right-s-line"></i></span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>