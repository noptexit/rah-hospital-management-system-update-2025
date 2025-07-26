<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.services')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="services-page">
        <!-- start hero section -->
        <section class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.services')); ?>

                            </h1>
                            <?php
                            $userName = request()->segment(2);
                            ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('front',$userName)); ?>">
                                            <?php echo e(__('messages.web_home.home')); ?>

                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.services')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/services.png')); ?>" alt="Infy Care" class="img-fluid" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start service-section -->
        <section class="service-section p-t-120 p-b-120">
            <div class="container">
                <div class="col-lg-6 text-center mx-auto">
                    <h6 class="text-primary mb-3"><?php echo e(__('messages.web_home.our_services')); ?></h6>
                    <h2 class="mb-4 pb-xl-4">
                        <?php echo e(__('messages.web_home.we_offer_different_services_to_improve_your_health')); ?>

                    </h2>
                </div>
                <div class="our-service">
                    <div class="row justify-content-center">
                        <?php $__currentLoopData = $frontServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $frontService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 py-lg-2 card-hover d-flex align-items-stretch">
                                <div class="card p-c-4 my-lg-2 mx-lg-1 my-md-3 my-2 flex-fill">
                                    <img src="<?php echo e(isset($frontService->icon_url) ? $frontService->icon_url : asset('web_front/images/services/medicine.png')); ?>"
                                         class="card-img-top img-wh mx-auto " alt="Cardiology" loading="lazy">
                                    <div class="card-body p-0 text-center d-flex flex-column">
                                        <h4 class="card-title mt-4"><?php echo e(\Illuminate\Support\Str::limit($frontService->name, 16)); ?></h4>
                                        <p class="card-text">
                                            <?php echo e(\Illuminate\Support\Str::limit($frontService->short_description, 123)); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <?php echo e($frontServices->links()); ?>

                </nav>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/web/home/services.blade.php ENDPATH**/ ?>