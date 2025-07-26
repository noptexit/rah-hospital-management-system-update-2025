<section class="subscribe-section py-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 mb-lg-0  mb-3">
                <div class="subscribe-text">
                    <h2 class="mb-0 text-center"><?php echo e(__('messages.landing.subscribe_our_newsletter')); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 pt-5">
                    <div class="ajax-message"></div>
                    <div class="email-box subscribe-form">
                        <form id="mc-form" class="group d-md-flex align-items-center" method="POST">
                            <?php echo method_field('POST'); ?>
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e(route('subscribe.store')); ?>" id="SuperAdminSubscribeForm">
                            <input type="email" value="" name="email" class="email fs-6" id="email"
                                   placeholder="<?php echo e(__('messages.web_contact.enter_your_email')); ?>" required>
                            <button class="btn btn-primary d-none d-sm-block subscribeBtn" type="submit" id="subscribeBtn">
                                <span><?php echo e(__('messages.landing.subscribe')); ?></span>
                            </button>
                            <button class="btn btn-primary d-block d-sm-none subscribeBtn" type="submit" id="subscribeBtn">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/landing/home/subscribe_section.blade.php ENDPATH**/ ?>