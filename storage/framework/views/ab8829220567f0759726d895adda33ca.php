<?php
    $activeSubscription = getCurrentActiveSubscriptionPlan();
    $currentActiveSubscription = currentActiveSubscription();
?>

<section class="plan-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-heading">
                    <h2 class="mb-0"><?php echo e(__('messages.landing.choose_your_pricing_plan')); ?></h2>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills mb-3 switches-container bg-white " id="pills-tab" role="tablist">
            <li class="nav-item w-50 text-center" role="presentation">
                <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#monthContent" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true"><?php echo e(__('messages.month')); ?></button>
            </li>
            <li class="nav-item w-50 text-center" role="presentation">
                <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#yearContent" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false"><?php echo e(__('messages.year')); ?></button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="monthContent" role="tabpanel"
                 aria-labelledby="month-tab">
                <div class="row justify-content-center">
                    <?php $__empty_1 = true; $__currentLoopData = $subscriptionPricingMonthPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionsPricingPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="pricing-plan-card card mx-lg-2 h-100">
                                <div class="card-body p-0 text-center">
                                    <h3 class="mb-3 mt-4 pt-2"><?php echo e($subscriptionsPricingPlan->name); ?></h3>
                                    <div class="d-flex justify-content-center pb-4 pricing-text">
                                        <h2 class="text-cyan mb-0">
                                            <?php echo e(getAdminCurrencySymbol($subscriptionsPricingPlan->currency)); ?></span><?php echo e(number_format($subscriptionsPricingPlan->price, 2)); ?></h2>
                                        <p class="pt-xl-3 pt-lg-2 pt-1 mb-0 ms-1">
                                            /<?php echo e(\App\Models\SubscriptionPlan::PLAN_TYPE[$subscriptionsPricingPlan->frequency]); ?></p>
                                    </div>
                                    <ul class="pricing-plan-features text-start px-2 pt-4 mt-2">
                                        <?php if(getLoggedInUser() != null && count($subscriptionsPricingPlan->subscription) > 0): ?>
                                            <?php if($activeSubscription !== null && $activeSubscription->trial_ends_at != null && $activeSubscription->subscription_plan_id == $subscriptionsPricingPlan->id): ?>
                                                <li class="active-check pb-3 text-start">
                                                    <?php echo e(__('messages.subscription_plans.valid_until')); ?>

                                                    : <?php echo e($subscriptionsPricingPlan->trial_days); ?>


                                                </li>
                                            <?php endif; ?>

                                            <?php if($activeSubscription && isAuth() &&  $activeSubscription->subscriptionPlan->id == $subscriptionsPricingPlan->id): ?>
                                                <li class="active-check pb-3 text-start">
                                                    <?php echo e(__('messages.subscription_plans.end_date')); ?>

                                                    :
                                                    <?php echo e(getParseDate($activeSubscription->ends_at)->format('d-m-Y')); ?>

                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if(count($subscriptionsPricingPlan->planFeatures) > 0): ?>
                                            <?php $__currentLoopData = $subscriptionsPricingPlan->planFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planFeature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="active-check pb-3 text-start">
                                                                <span class="check-box bg-secondary">
                                                                    <i class="fa-solid fa-check text-white "></i>
                                                                </span> <?php echo e($planFeature->feature->name); ?>

                                                </li>
                                                <?php if($planFeature->feature->name == "SMS / Mail" && ($planFeature->subscriptionPlan->sms_limit) > 0): ?>
                                                    <li class="active-check pb-3 text-start">
                                                                <span class="check-box bg-secondary">
                                                                    <i class="fa-solid fa-check text-white "></i>
                                                                </span>
                                                        <?php echo e($planFeature->subscriptionPlan->sms_limit); ?> SMS
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="mt-auto mb-4 pb-3">
                                        <?php if($currentActiveSubscription && isAuth() && $subscriptionsPricingPlan->id == $currentActiveSubscription->subscription_plan_id && !$currentActiveSubscription->isExpired()): ?>
                                            <?php if($subscriptionsPricingPlan->price != 0): ?>
                                                <button type="button"
                                                        class="btn btn-primary px-70 pricing-plan-button-active"
                                                        data-id="<?php echo e($subscriptionsPricingPlan->id); ?>">
                                                    <span><?php echo e(__('messages.subscription_pricing_plans.currently_active')); ?></span>
                                                </button>
                                            <?php else: ?>
                                                <button type="button"
                                                        class="btn btn-primary px-70 renew-free-plan">
                                                    <span><?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?></span>
                                                </button>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if($currentActiveSubscription && isAuth() && !$currentActiveSubscription->isExpired() && ($subscriptionsPricingPlan->price == 0 || $subscriptionsPricingPlan->price != 0)): ?>
                                                <?php if($subscriptionsPricingPlan->hasZeroPlan->count() == 0): ?>
                                                    <a href="<?php echo e($subscriptionsPricingPlan->price != 0 ? route('choose.payment.type', [$subscriptionsPricingPlan->id, 'landing', $screenFrom]) : 'javascript:void(0)'); ?>"
                                                       class="btn btn-primary px-70 <?php echo e($subscriptionsPricingPlan->price == 0 ? 'freePayment' : ''); ?>"
                                                       data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                                                       data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.switch_plan')); ?></span></a>
                                                <?php else: ?>
                                                    <button type="button"
                                                            class="btn btn-primary px-70 renew-free-plan">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?></span>
                                                    </button>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($subscriptionsPricingPlan->hasZeroPlan->count() == 0): ?>
                                                    <a href="<?php echo e($subscriptionsPricingPlan->price != 0 ? route('choose.payment.type', [$subscriptionsPricingPlan->id, 'landing',$screenFrom]) : 'javascript:void(0)'); ?>"
                                                       class="btn btn-primary px-70 <?php echo e($subscriptionsPricingPlan->price == 0 ? 'freePayment' : ''); ?>"
                                                       data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                                                       data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>"
                                                       data-turbo="false">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.choose_plan')); ?></span></a>
                                                <?php else: ?>
                                                    <button type="button"
                                                            class="btn btn-primary px-70 renew-free-plan">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?></span>
                                                    </button>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h4 class="mt-5 text-center">
                            <?php echo e(__('messages.subscription_month_plan_not_found')); ?>

                        </h4>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="yearContent" role="tabpanel"
                 aria-labelledby="month-tab">
                <div class="row justify-content-center">
                    <?php $__empty_1 = true; $__currentLoopData = $subscriptionPricingYearPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionsPricingPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="pricing-plan-card card mx-lg-2 h-100">
                                <div class="card-body p-0 text-center">
                                    <h3 class="mb-3 mt-4 pt-2"><?php echo e($subscriptionsPricingPlan->name); ?></h3>
                                    <div class="d-flex justify-content-center pb-4 pricing-text">
                                        <h2 class="text-cyan mb-0">
                                            <?php echo e(getAdminCurrencySymbol($subscriptionsPricingPlan->currency)); ?></span><?php echo e(number_format($subscriptionsPricingPlan->price, 2)); ?></h2>
                                        <p class="pt-xl-3 pt-lg-2 pt-1 mb-0 ms-1">
                                            /<?php echo e(\App\Models\SubscriptionPlan::PLAN_TYPE[$subscriptionsPricingPlan->frequency]); ?></p>
                                    </div>
                                    <ul class="pricing-plan-features text-start px-2 pt-4 mt-2">
                                        <?php if(getLoggedInUser() != null && count($subscriptionsPricingPlan->subscription) > 0): ?>
                                            <?php if($activeSubscription !== null && $activeSubscription->trial_ends_at != null && $activeSubscription->subscription_plan_id == $subscriptionsPricingPlan->id): ?>
                                                <li class="active-check pb-3 text-start">
                                                    <?php echo e(__('messages.subscription_plans.valid_until')); ?>

                                                    : <?php echo e($subscriptionsPricingPlan->trial_days); ?>

                                                </li>
                                            <?php endif; ?>

                                            <?php if($activeSubscription && isAuth() &&  $activeSubscription->subscriptionPlan->id == $subscriptionsPricingPlan->id): ?>
                                                <li class="active-check pb-3 text-start">
                                                    <?php echo e(__('messages.subscription_plans.end_date')); ?>

                                                    :
                                                    <?php echo e(getParseDate($activeSubscription->ends_at)->format('d-m-Y')); ?>

                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if(count($subscriptionsPricingPlan->planFeatures) > 0): ?>
                                            <?php $__currentLoopData = $subscriptionsPricingPlan->planFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planFeature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="active-check pb-3 text-start">
                                                                        <span class="check-box bg-secondary">
                                                                            <i class="fa-solid fa-check text-white "></i>
                                                                        </span> <?php echo e($planFeature->feature->name); ?>

                                                </li>
                                                <?php if($planFeature->feature->name == "SMS / Mail" && ($planFeature->subscriptionPlan->sms_limit) > 0): ?>
                                                    <li class="active-check pb-3 text-start">
                                                                <span class="check-box bg-secondary">
                                                                    <i class="fa-solid fa-check text-white "></i>
                                                                </span>
                                                        <?php echo e($planFeature->subscriptionPlan->sms_limit); ?> SMS
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="mt-auto mb-4 pb-3">
                                        <?php if($currentActiveSubscription && isAuth() && $subscriptionsPricingPlan->id == $currentActiveSubscription->subscription_plan_id && !$currentActiveSubscription->isExpired()): ?>
                                            <?php if($subscriptionsPricingPlan->price != 0): ?>
                                                <button type="button"
                                                        class="btn btn-primary px-70 pricing-plan-button-active"
                                                        data-id="<?php echo e($subscriptionsPricingPlan->id); ?>">
                                                    <span><?php echo e(__('messages.subscription_pricing_plans.currently_active')); ?></span>
                                                </button>
                                            <?php else: ?>
                                                <button type="button"
                                                        class="btn btn-primary px-70 renew-free-plan">
                                                    <span><?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?></span>
                                                </button>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if($currentActiveSubscription && isAuth() && !$currentActiveSubscription->isExpired() && ($subscriptionsPricingPlan->price == 0 || $subscriptionsPricingPlan->price != 0)): ?>
                                                <?php if($subscriptionsPricingPlan->hasZeroPlan->count() == 0): ?>
                                                    <a href="<?php echo e($subscriptionsPricingPlan->price != 0 ? route('choose.payment.type', [$subscriptionsPricingPlan->id, 'landing',$screenFrom]) : 'javascript:void(0)'); ?>"
                                                       class="btn btn-primary px-70 <?php echo e($subscriptionsPricingPlan->price == 0 ? 'freePayment' : ''); ?>"
                                                       data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                                                       data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.switch_plan')); ?></span></a>
                                                <?php else: ?>
                                                    <button type="button"
                                                            class="btn btn-primary px-70 renew-free-plan">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?></span>
                                                    </button>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($subscriptionsPricingPlan->hasZeroPlan->count() == 0): ?>
                                                    <a href="<?php echo e($subscriptionsPricingPlan->price != 0 ? route('choose.payment.type', [$subscriptionsPricingPlan->id, 'landing',$screenFrom]) : 'javascript:void(0)'); ?>"
                                                       class="btn btn-primary px-70 <?php echo e($subscriptionsPricingPlan->price == 0 ? 'freePayment' : ''); ?>"
                                                       data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                                                       data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>"
                                                       data-turbo="false">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.choose_plan')); ?></span></a>
                                                <?php else: ?>
                                                    <button type="button"
                                                            class="btn btn-primary px-70 renew-free-plan">
                                                        <span><?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?></span>
                                                    </button>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h4 class="mt-5 text-center">
                            <?php echo e(__('messages.subscription_year_plan_not_found')); ?>

                        </h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/resources/views/landing/home/pricing_plan_page.blade.php ENDPATH**/ ?>