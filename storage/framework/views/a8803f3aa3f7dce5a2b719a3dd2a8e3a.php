<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="<?php echo e(getAppName()); ?>">

    <meta name="keywords" content="Hospital Management System"/>

    <meta name="description" content="Hospital Management System | HMS"/>
    <meta name="author" content="hms.infyom.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="turbo-cache-control" content="no-cache">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getAppName()); ?></title>
    <?php
        $hospitalSettingValue = getSettingValue();
    ?>
    <link rel="icon" href="<?php echo e(asset($hospitalSettingValue['favicon']['value'])); ?>" type="image/png">

    <!-- Links of CSS files -->
    
    
    
    
    
    
    
    





    
    
    
    

    
    
    

    
    




    

    
    


<!-- Links of JS files -->
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link rel="stylesheet" href="<?php echo e(mix('css/front-third-party.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/front-pages.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <?php echo $__env->yieldContent('page_css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
    <script src="<?php echo e(mix('js/front-third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/landing-theme/js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landing_front/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landing_front/js/flatpickr.js')); ?>"></script>
    <script src="https://npmcdn.com/flatpickr@4.5.2/dist/l10n"></script>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    <script src="<?php echo e(mix('js/hospital-front-pages.js')); ?>"></script>

    <?php if(isset($userName) && getSettingForReCaptcha($userName)  ): ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <?php endif; ?>

    <script>
        $(document).ready(function () {
            $('.alert').delay(5000).slideUp(300)
        })
        $(document).on('click', '.languageSelection', function () {
            let languageName = $(this).data('prefix-value')

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'POST',
                url: '/change-language',
                data: { languageName: languageName },
                success: function () {
                    location.reload()
                },
            })
        })
    </script>
    <script data-turbo-eval="false">
        let frontLanguage = "<?php echo e(checkLanguageSession()); ?>";
        Lang.setLocale(frontLanguage);
    </script>
    <?php echo $__env->yieldContent('page_scripts'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</head>
<body>

<?php echo $__env->make('web.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('web.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Start Go Top Area -->



<div class="go-top bg-success d-flex align-items-center justify-content-center">
    <i class="fas fa-chevron-up next-arrow"></i>
    <?php echo e(Form::hidden('userCurrentLanguage',checkLanguageSession(),['class'=>'userCurrentLanguage'])); ?>

</div>
<!-- End Go Top Area -->

</body>
</html>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/web/layouts/front.blade.php ENDPATH**/ ?>