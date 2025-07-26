<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="//fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo e(asset('backend/css/vendor.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('backend/css/datatables.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('backend/css/fonts.css')); ?>" rel="stylesheet" type="text/css"/>
        <?php echo $__env->yieldContent('page_css'); ?>
        <link href="<?php echo e(asset('backend/css/3rd-party.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('backend/css/3rd-party-custom.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(mix('assets/css/custom.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(mix('assets/css/custom.css')); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div class="flex-center position-ref full-height">
        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/errors/minimal.blade.php ENDPATH**/ ?>