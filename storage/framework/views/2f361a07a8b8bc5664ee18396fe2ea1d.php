<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.hospitals')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="home-page">
        <section class="hero-section pt-120 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center mb-lg-0 mb-md-5 mb-sm-4 mb-3">
                        <div class="hero-content">
                            <h1 class="mb-0">
                                <?php echo e(__('messages.hospitals')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 pb-lg-4">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-cyan fs-18" aria-current="page">
                                        <?php echo e(__('messages.hospitals')); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('landing_front/images/about-hero-img.png')); ?>" alt="HMS-Sass"
                            class="img-fluid" loading="lazy"/>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end text-center">
                    <img src="<?php echo e(asset('landing_front/images/about-hero-img.png')); ?>" alt="HMS-Sass"
                        class="img-fluid" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>

    <section class="our-hospitals-section py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-heading">
                        <h2><?php echo e(__('messages.our_hospitals')); ?></h2>
                    </div>
                </div>
            </div>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('hospitals-listing');

$__html = app('livewire')->mount($__name, $__params, 'lw-2545871700-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </section>
    <?php echo $__env->make('landing.home.subscribe_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function(){
            var selectize = $("#hospitalType").selectize();

            selectize[0].selectize.on("change", function (value) {
                $("#hospitalType").selectize();
                Livewire.dispatch("hospitalType", {type:value});
            });

            $(document).on("click",".reset-filter", function () {
                selectize[0].selectize.clear();
                selectize[0].selectize.setValue("0");
            });
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/landing/home/hospitals.blade.php ENDPATH**/ ?>