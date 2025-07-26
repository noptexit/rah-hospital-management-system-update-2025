<?php $__currentLoopData = session('flash_notification', collect())->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($message['overlay']): ?>
        <?php echo $__env->make('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <div class="alert alert-<?php echo e($message['level']); ?> <?php echo e($message['important'] ? 'alert-important' : ''); ?> custom-message">
            <div class="d-flex text-white align-items-center">
                <i class="fa-solid fa-face-smile me-4"></i>
                <div>
                    <span class="text-white"><?php echo e($message['message']); ?></span>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        

        
        
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo e(session()->forget('flash_notification')); ?>

<?php /**PATH /var/www/html/resources/views/vendor/flash/message.blade.php ENDPATH**/ ?>