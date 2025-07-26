<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.services')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    



    <link href="<?php echo e(asset('landing_front/css/jquery.toast.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="services-page">

        <!-- start hero section -->
        <section class="hero-section pt-120 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center mb-lg-0 mb-md-5 mb-sm-4 mb-3">
                        <div class="hero-content">
                            <h1 class="mb-0">
                                <?php echo e(__('messages.services')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 pb-lg-4">
                                    <li class="breadcrumb-item"><a
                                                href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-cyan fs-18"
                                        aria-current="page"><?php echo e(__('messages.services')); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('landing_front/images/about-hero-img.png')); ?>" alt="HMS-Sass"
                             class="img-fluid" loading="lazy"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start grow-your-hospital section -->
    <?php echo $__env->make('landing.home.grow_hospital_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end grow-your-hospital section -->

        <!-- start-service-section -->
        <section class="service-section bg-secondary py-80 mb-5">
            <div class="container mb-5">
                <div class="slick-slider services" id="services">
                    <?php $__currentLoopData = $serviceSlider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide col-lg-3 overflow-hidden ps-2 pe-2">
                            <div class="client-logo">
                                <img class="img-fluid custom-service-slider" src="<?php echo e(asset($image->image_url)); ?>" alt="" loading="lazy">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!-- end-service-section -->

        <!-- start-plan-section -->
    <?php if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin')): ?>
        <!-- start-plan-section -->
        <?php echo $__env->make('landing.home.pricing_plan_page', ['screenFrom' => Route::currentRouteName()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>
    <!-- end-plan-section -->

        <!-- start testimonial section -->
        <section class="testimonial-section overflow-hidden bg-light pt-80">
            <div class="container">
                <div class="row testimonial-block justify-content-center">
                    <div class="col-xl-8 col-lg-10 testimonial-carousel" id="testimonial-carousel">
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="testimonial-card rounded-20 ">
                                <div class="row justify-content-between ">
                                    <div class="col-md-5 col-sm-5 profile-img text-center">
                                        <img src="<?php echo e(asset(!empty($testimonial->image_url) ? $testimonial->image_url : asset('landing_front/images/thomas-james.png'))); ?>"
                                             alt="profile" class="rounded-20 img-fluid" loading="lazy">
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <p class="mt-md-5 ps-3 d-md-block d-none">
                                            <?php echo $testimonial->description; ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="profile-box bg-cyan rounded-20 pt-md-3 pb-md-3 p-3 position-relative d-flex align-items-stretch flex-column">
                                    <div class="row justify-content-end align-items-stretch">

                                            <div class="col-md-7 col-sm-5 mt-md-0 mt-sm-4 mt-5">
                                                <h3 class="profile-name text-white mb-0 ps-sm-3"><?php echo e(Str::limit($testimonial->name, 20)); ?></h3>
                                                <p class="text-white mb-0 ps-sm-3"><?php echo e(Str::limit($testimonial->position, 20)); ?></p>
                                            </div>
                                            <p class="mt-xl-5 mt-4 text-white ps-sm-3  d-md-none d-block ">
                                                <?php echo ($testimonial->description); ?>

                                            </p>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonial section -->

        <!-- start subscribe-section -->
    <?php echo $__env->make('landing.home.subscribe_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end subscribe-section -->
        <?php echo e(Form::hidden('getLoggedInUserdata', getLoggedInUser(), ['class' => 'getLoggedInUser'])); ?>

        <?php echo e(Form::hidden('logInUrl', url('login'), ['class' => 'logInUrl'])); ?>

        <?php echo e(Form::hidden('fromPricing', true, ['class' => 'fromPricing'])); ?>

        <?php echo e(Form::hidden('makePaymentURL', route('purchase-subscription'), ['class' => 'makePaymentURL'])); ?>

        <?php echo e(Form::hidden('subscribeText', __('messages.subscription_pricing_plans.choose_plan'), ['class' => 'subscribeText'])); ?>



    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>

    <script>

        // if($('#testimonial-carousel').length) {
        //     $('#testimonial-carousel').slick({
        //         dots: true,
        //         autoplay: false,
        //         autoplayspeed: 1600,
        //         centerPadding: '0',
        //         slidesToShow: 1,
        //         slidesToScroll: 1,
        //     })
        // }
        //
        // if($('#services').length)
        // {
        //     $('#services').slick({
        //         dots: true,
        //         arrows: false,
        //         autoplay: true,
        //         autoplayspeed: 1600,
        //         centerPadding: '0',
        //         slidesToShow: 4,
        //         slidesToScroll: 1,
        //         responsive: [
        //             {
        //                 breakpoint: 991,
        //                 settings: {
        //                     slidesToShow: 3,
        //                 },
        //             },
        //             {
        //                 breakpoint: 767,
        //                 settings: {
        //                     slidesToShow: 2,
        //                 },
        //             },
        //             {
        //                 breakpoint: 480,
        //                 settings: {
        //                     slidesToShow: 1
        //                 },
        //             },
        //         ],
        //     })
        // }
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>


<script>
    
    
    
    
    

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/landing/home/services.blade.php ENDPATH**/ ?>