<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> <?php echo $__env->yieldContent('title'); ?> | <?php echo e(getSuperAdminSettingKeyValue('app_name')); ?></title>
    <meta name="description" content="Hospital management system">
    <meta name="keyword" content="hospital,doctor,patient,fever,MD,MS,MBBS">
    <link rel="icon" href="<?php echo e(asset(getSuperAdminSettingKeyValue('favicon'))); ?>" type="image/png">
    <link rel="canonical" href="<?php echo e(route('landing-home')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('favicon.ico')); ?>" type="image/png">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?php echo e(mix('assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(mix('/assets/css/custom-auth.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(mix('assets/css/third-party.css')); ?>" rel="stylesheet" type="text/css" />
    <?php echo $__env->yieldContent('css'); ?>
</head>
<?php
$style = 'style=';
?>

<body id=""
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <div class="d-flex flex-column flex-root">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo e(Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber'])); ?>

    <?php echo e(Form::hidden('invalidCountryNumber', __('messages.common.invalid_country_number'), ['class' => 'invalidCountryNumber'])); ?>

    <?php echo e(Form::hidden('tooShort', __('messages.common.too_short'), ['class' => 'tooShort'])); ?>

    <?php echo e(Form::hidden('tooLong', __('messages.common.too_long'), ['class' => 'tooLong'])); ?>

    <!-- Scripts -->
    <script src="<?php echo e(mix('assets/js/third-party.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.alert').fadeOut('slow');
            }, 3000);
        });
        $(document).on('click', '.language-select', function() {
            let languageName = $(this).data('id');
            $.ajax({
                type: 'get',
                url: 'set-language',
                data: {
                    languageName: languageName
                },
                success: function() {
                    location.reload();
                },
            });
        })

    </script>
</body>

</html>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/layouts/auth_app.blade.php ENDPATH**/ ?>