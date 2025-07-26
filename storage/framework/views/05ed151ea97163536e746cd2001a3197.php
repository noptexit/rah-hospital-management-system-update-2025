<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.web_home.home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    

    <link href="<?php echo e(asset('landing_front/css/jquery.toast.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="home-page ">
        <!-- start banner section -->
        <section class="banner-section bg-light py-100" id="home">
            <div class="container">
                <div class="row align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 text-lg-start text-center">
                        <div class="banner-content mt-lg-0 mt-sm-5 mt-4 pe-lg-4">
                            <h1 class="mb-md-3 mb-2"> <?php echo e($sectionOne['text_main']); ?> </h1>
                            <?php if(!getLoggedInUser()): ?>
                                <p class="mb-md-5 mb-4"> <?php echo e($sectionOne['text_secondary']); ?></p>
                            <?php endif; ?>
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                <?php if(!getLoggedInUser()): ?>
                                    <a href="<?php echo e(route('register')); ?>" data-turbo="false"
                                       class="btn btn-primary me-3"><?php echo e(__('messages.web_home.sign_up')); ?></a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('landing.contact.us')); ?>"
                                   class="btn btn-secondary ms-1"><?php echo e(__('messages.contact_us')); ?></a>
                            </div>
                            <span class="ps-xl-2 mb-3 mb-lg-0 d-lg-block mt-3 d-none"><?php echo e(__('messages.landing.call')); ?> :
                                    <a href="tel:<?php echo e($phone); ?>"
                                       class="text-decoration-none text-primary">
                                        <?php echo e($phone); ?>

                                    </a>
                                </span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(isset($sectionOne['img_url']) ? asset($sectionOne['img_url']) : asset('landing_front/images/hospital.png')); ?>"
                             alt="manage hospital"
                             class="img-fluid" loading="lazy"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->

        <!-- start protect-health section -->
        <section class="health-section pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-heading">
                            <h2 class="mb-3"><?php echo e($sectionTwo['text_main']); ?></h2>
                            <p class="mb-0"><?php echo e($sectionTwo['text_secondary']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="protect-health">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 my-xl-0 py-xl-0 my-2 py-1">
                            <div class="card">
                                <div class="row justify-content-md-between justify-content-center text-center text-sm-start">
                                    <div class=" col-md-4 col-sm-3 col-4">
                                        <img class="card-img home-section-two-img"
                                             src="<?php echo e(isset($sectionTwo['card_one_image']) ? asset($sectionTwo['card_one_image']) : asset('landing_front/images/schedule.png')); ?>"
                                             alt="schedule appointment" loading="lazy">
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <div class="card-body p-0">
                                            <h3 class="mt-sm-0 mt-3"><?php echo e($sectionTwo['card_one_text']); ?></h3>
                                            <p class="card-text"><?php echo e(html_entity_decode($sectionTwo['card_one_text_secondary'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 my-xl-0 py-xl-0 my-2 py-1">
                            <div class="card">
                                <div class="row justify-content-md-between justify-content-center text-center text-sm-start">
                                    <div class="col-md-4 col-sm-3 col-4">
                                        <img class="card-img"
                                             src="<?php echo e(isset($sectionTwo['card_two_image']) ? asset($sectionTwo['card_two_image']) : asset('landing_front/images/opd.png')); ?>"
                                             alt="OPD Management" loading="lazy">
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <div class="card-body p-0 ">
                                            <h3 class="mt-sm-0 mt-3"><?php echo e($sectionTwo['card_two_text']); ?></h3>
                                            <p class="card-text"><?php echo e(html_entity_decode($sectionTwo['card_two_text_secondary'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 my-xl-0 py-xl-0 my-2 py-1">
                            <div class="card">
                                <div class="row justify-content-md-between justify-content-center text-center text-sm-start">
                                    <div class="col-md-4 col-sm-3 col-4">
                                        <img class="card-img"
                                             src="<?php echo e(isset($sectionTwo['card_third_image']) ? asset($sectionTwo['card_third_image']) : asset('landing_front/images/ipd.png')); ?>"
                                             alt="IPD Management" loading="lazy">
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <div class="card-body p-0">
                                            <h3 class="mt-sm-0 mt-3"><?php echo e($sectionTwo['card_third_text']); ?></h3>
                                            <p class="card-text"><?php echo e(html_entity_decode($sectionTwo['card_third_text_secondary'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end protect-health section -->

        <!-- start hospital-sass-section -->
        <section class="hospital-sass-section overflow-hidden pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-12 margin-b-80px">
                        <div class="row align-items-center flex-column-reverse flex-lg-row">
                            <div class=" col-lg-6">
                                <div class="sass-left-content bg-light">
                                    <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                                        <img class="img-fluid" src="<?php echo e(isset($sectionThree['img_url']) ? asset($sectionThree['img_url']) : asset('landing_front/images/frame_9.png')); ?>"
                                             alt="" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-6 position-relative">
                                <div class="sass-right-content ms-lg-5 ps-lg-5">
                                    <div class="section-heading mb-0 ">
                                        <h2 class="mb-3"><?php echo e($sectionThree['text_main']); ?></h2>
                                        <p class="mb-4 pb-3"><?php echo e($sectionThree['text_secondary']); ?>

                                        </p>
                                    </div>
                                    <div class="sass-desc mb-4">
                                        <div class="row">
                                            <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                <p class="mb-0"><?php echo e($sectionThree['text_one']); ?></p>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                <p class="mb-0"><?php echo e($sectionThree['text_two']); ?></p>
                                            </div>
                                            <?php if(!empty($sectionThree['text_three'])): ?>
                                                <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                    <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                    <p class="mb-0"><?php echo e($sectionThree['text_three']); ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(isset($sectionThree['text_four'])): ?>
                                                <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                    <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                    <p class="mb-0"><?php echo e($sectionThree['text_four']); ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(isset($sectionThree['text_five'])): ?>
                                                <div class="col-sm-6 d-flex align-items-center mb-3 pb-1">
                                                    <i class="fa-solid fa-check d-flex align-items-center justify-content-center me-2 text-white bg-primary"></i>
                                                    <p class="mb-0"><?php echo e($sectionThree['text_five']); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="sass-btn d-flex col-lg-12">
                                        <a href="<?php echo e(route('landing.contact.us')); ?>"
                                           class="btn btn-primary me-3"><?php echo e(__('messages.contact_us')); ?></a>
                                        <?php if(!getLoggedInUser()): ?>
                                            <a href="<?php echo e(route('register')); ?>" data-turbo="false"
                                               class="btn btn-secondary ms-1"><?php echo e(__('messages.web_home.sign_up')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hospital-sass-section -->

        <!-- start grow-your-hospital section -->
    <?php echo $__env->make('landing.home.grow_hospital_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end grow-your-hospital section -->

        <!-- start-service-section -->
        <?php echo $__env->make('landing.home.count_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end-service-section -->

        <!--start our-hospitals sectiom -->






























































    
    
    
    
    
    <!--end our-hospitals section -->
    <?php if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin')): ?>

        <!-- start-plan-section -->
            <div class="mt-5">
                <?php echo $__env->make('landing.home.pricing_plan_page', ['screenFrom' => Route::currentRouteName()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

    <?php endif; ?>
    <!-- end-plan-section -->

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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        
        
        
        
        
        
    </script>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/landing/home/index.blade.php ENDPATH**/ ?>