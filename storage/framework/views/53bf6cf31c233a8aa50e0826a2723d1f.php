<div class="col-xl-4 col-md-6 d-flex align-items-stretch">
    <div class="card pricing-card text-center flex-fill">
        <div class="card-body px-10 py-14">
            <h3 class="text-gray-900 fs-2"><?php echo e($subscriptionsPricingPlan->name); ?></h3>
            <div class="d-flex justify-content-center mt-5">
                <h4 class="text-center mb-6 mt-2">
                    <?php echo e(getAdminCurrencySymbol($subscriptionsPricingPlan->currency)); ?>

                    <span class="fa-3x fw-bolder"><?php echo e(number_format($subscriptionsPricingPlan->price, 2)); ?></span>
                    <span class="h6 text-gray-800 ml-2">
                        /<?php echo e(\App\Models\SubscriptionPlan::PLAN_TYPE[$subscriptionsPricingPlan->frequency]); ?>

                    </span>
                </h4>
            </div>
            <ul class="pl-0 list-style-none">
                <?php if(isAuth() && count($subscriptionsPricingPlan->subscription) > 0): ?>
                    <?php if($activeSubscription && $activeSubscription->trial_ends_at != null && $activeSubscription->subscription_plan_id == $subscriptionsPricingPlan->id): ?>
                        <li>
                            <h4><?php echo e(__('messages.subscription_plans.valid_until')); ?>

                                : <?php echo e($subscriptionsPricingPlan->trial_days); ?>

                            </h4>
                        </li>
                    <?php endif; ?>
                    <?php if($activeSubscription && isAuth() &&  $activeSubscription->subscriptionPlan->id == $subscriptionsPricingPlan->id): ?>
                        <li>
                            <h4>
                                <?php echo e(__('messages.subscription_plans.end_date')); ?>

                                :
                                <?php echo e(getParseDate($activeSubscription->ends_at)->format('d-m-Y')); ?>

                            </h4>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <?php if(count($subscriptionsPricingPlan->planFeatures) > 0): ?>
                <ul class="pricing-plan-features text-gray-600 fs-5 mb-9">
                    <?php $__currentLoopData = $subscriptionsPricingPlan->planFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planFeature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><i class="fa-solid fa-check me-3"></i><?php echo e($planFeature->feature->name); ?></li>
                        <?php if($planFeature->feature->name == 'SMS / Mail' && $planFeature->subscriptionPlan->sms_limit > 0): ?>
                            <li><i class="fa-solid fa-check me-3"></i><?php echo e($planFeature->subscriptionPlan->sms_limit); ?>

                                SMS
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

            <?php if($currentActiveSubscription && $subscriptionsPricingPlan->id == $currentActiveSubscription->subscription_plan_id && !$currentActiveSubscription->isExpired()): ?>
                <?php if($subscriptionsPricingPlan->price != 0): ?>
                    <button type="button"
                            class="btn btn-success rounded-pill"
                            data-id="<?php echo e($subscriptionsPricingPlan->id); ?>">
                        <?php echo e(__('messages.subscription_pricing_plans.currently_active')); ?></button>
                <?php else: ?>
                    <button type="button" class="btn btn-info rounded-pill">
                        <?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?>

                    </button>
                <?php endif; ?>
            <?php else: ?>
                <?php if($currentActiveSubscription && !$currentActiveSubscription->isExpired() && ($subscriptionsPricingPlan->price == 0 || $subscriptionsPricingPlan->price != 0)): ?>
                    <?php if($subscriptionsPricingPlan->hasZeroPlan->count() == 0): ?>
                        <a href="<?php echo e($subscriptionsPricingPlan->price != 0 ? route('choose.payment.type', $subscriptionsPricingPlan->id) : 'javascript:void(0)'); ?>"
                           class="btn btn-primary rounded-pill <?php echo e($subscriptionsPricingPlan->price == 0 ? 'freePayment' : ''); ?>"
                           data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                           data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>" data-turbo="false">
                            <?php echo e(__('messages.subscription_pricing_plans.switch_plan')); ?></a>
                    <?php else: ?>
                        <button type="button" class="btn btn-info rounded-pill">
                            <?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?>

                        </button>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($subscriptionsPricingPlan->hasZeroPlan->count() == 0): ?>
                        <a href="<?php echo e($subscriptionsPricingPlan->price != 0 ? route('choose.payment.type', $subscriptionsPricingPlan->id) : 'javascript:void(0)'); ?>"
                           class="btn btn-primary rounded-pill<?php echo e($subscriptionsPricingPlan->price == 0 ? 'freePayment' : ''); ?>"
                           data-id="<?php echo e($subscriptionsPricingPlan->id); ?>"
                           data-plan-price="<?php echo e($subscriptionsPricingPlan->price); ?>">
                            <?php echo e(__('messages.subscription_pricing_plans.choose_plan')); ?></a>
                    <?php else: ?>
                        <button type="button" class="btn btn-info rounded-pill">
                            <?php echo e(__('messages.subscription_pricing_plans.renew_free_plan')); ?>

                        </button>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/subscription_pricing_plans/pricing_plan_section.blade.php ENDPATH**/ ?>