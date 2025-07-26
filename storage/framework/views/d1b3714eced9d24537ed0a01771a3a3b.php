<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getSuperAdminSettingKeyValue('app_name')); ?> </title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="google" content="notranslate">
    <?php
        $settingValue = getSuperAdminSettingValue();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="turbo-cache-control" content="no-cache">
    <link rel="icon" href="<?php echo e(asset($settingValue['favicon']['value'])); ?>" type="image/png">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="<?php echo e(mix('css/landing-third-party.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing-pages.css')); ?>">
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php echo $__env->yieldContent('page_css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="//js.stripe.com/v3/"></script>
       <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

       <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script src="<?php echo e(mix('js/landing-third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    <script src="<?php echo e(mix('js/landing-front-pages.js')); ?>"></script>
    <script>
        // $(document).ready(function(){
        //     $('.payment-type').selectize();
        // });
        if ($('.mySwiper').length) {
            var swiper = new Swiper('.mySwiper', {
                spaceBetween: 40,
                centeredSlides: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                    },
                    576: {
                        slidesPerView: 1.5,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2.5,
                    },
                    1400: {
                        slidesPerView: 3.5,
                    },
                },
            })
        }

        setTimeout(function() {
            $('.custom-message').fadeOut()
        }, 2000)
    </script>
    <script data-turbo-eval="false">
        let frontLanguage = "<?php echo e(checkLanguageSession()); ?>";
        Lang.setLocale(frontLanguage);
    </script>
</head>

<body>

    
    
    
    
    
    
    
    
    
    <div class="page-wrapper">

        <?php echo $__env->make('landing.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('landing.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo e(Form::hidden('invalidNumber', __('messages.common.invalid_number'), ['class' => 'invalidNumber'])); ?>

    <?php echo e(Form::hidden('invalidCountryNumber', __('messages.common.invalid_country_code'), ['class' => 'invalidCountryNumber'])); ?>

    <?php echo e(Form::hidden('tooShort', __('messages.common.too_short'), ['class' => 'tooShort'])); ?>

    <?php echo e(Form::hidden('tooLong', __('messages.common.too_long'), ['class' => 'tooLong'])); ?>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php echo $__env->yieldContent('page_scripts'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>














































































<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/landing/layouts/app.blade.php ENDPATH**/ ?>