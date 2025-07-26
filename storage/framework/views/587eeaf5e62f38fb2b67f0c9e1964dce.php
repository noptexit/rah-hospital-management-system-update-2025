<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.subscription_plans.subscription_plans')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('subscription_pricing_plans.pricing_plan_button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="monthContent" role="tabpanel"
                             aria-labelledby="monthContentTab">
                            <div class="row justify-content-center">
                                <?php
                                    $activeSubscription = getCurrentActiveSubscriptionPlan();
                                    $currentActiveSubscription = currentActiveSubscription();
                                ?>
                                <?php $__empty_1 = true; $__currentLoopData = $subscriptionPricingMonthPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionsPricingPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo $__env->make('subscription_pricing_plans.pricing_plan_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center empty_featured_card">
                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="empty-featured-portfolio">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                    <h3 class="card-title mt-3">
                                                        <?php echo e(__('messages.subscription_month_plan_not_found')); ?>

                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yearContent" role="tabpanel"
                             aria-labelledby="yearContentTab">
                            <div class="row justify-content-center">
                                <?php $__empty_1 = true; $__currentLoopData = $subscriptionPricingYearPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionsPricingPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo $__env->make('subscription_pricing_plans.pricing_plan_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center empty_featured_card">
                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="empty-featured-portfolio">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                    <h3 class="card-title mt-3">
                                                        <?php echo e(__('messages.subscription_year_plan_not_found')); ?>

                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        
        
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/subscription_pricing_plans/index.blade.php ENDPATH**/ ?>