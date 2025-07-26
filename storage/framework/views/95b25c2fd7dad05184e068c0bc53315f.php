<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.doctors')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="doctors-page">
        <!-- start hero section -->
        <section class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.doctors')); ?>

                            </h1>
                            <?php
                            $userName = request()->segment(2);
                            ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('front',$userName)); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.doctors')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/doctors.png')); ?>" alt="Infy Care" class="img-fluid" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start professional-doctors section -->
        <section class="professional-doctors-section position-relative p-t-120 p-b-120">
            <div class="container">
                <div class="col-lg-6 text-center mx-auto">
                    <h6 class="text-primary mb-3"><?php echo e(__('messages.web_home.professional_doctors')); ?></h6>
                    <h2 class="mb-5 pb-xl-3"><?php echo e(__('messages.web_home.we_are_experienced_healthcare_professionals')); ?></h2>
                </div>
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xxl-3 col-lg-4 col-md-6 text-center doctors-block my-lg-1">
                            <div class="px-lg-2 py-3">
                                <a href="<?php echo e(route('doctor.details',[$userName,$doctor->id])); ?>">
                                    <img src="<?php echo e($doctor->user->image_url); ?>" alt="Doctor" class="mx-auto card-image" loading="lazy">
                                    <div class="card text-center p-3">
                                        <h4><?php echo e(\Illuminate\Support\Str::limit($doctor->user->full_name, 23)); ?></h4>
                                        <p class="mb-2">
                                            (<?php echo e(\Illuminate\Support\Str::limit($doctor->user->qualification, 25)); ?>)
                                        </p>
                                        <h5 class="text-success mb-0 fs-6 fw-normal">
                                            <?php echo e(\Illuminate\Support\Str::limit($doctor->specialist, 15)); ?>

                                            <?php echo e(__('messages.doctor.specialist')); ?>

                                        </h5>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <nav aria-label="Page navigation example">
                    <?php echo e($doctors->links()); ?>

                </nav>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/web/home/doctors.blade.php ENDPATH**/ ?>