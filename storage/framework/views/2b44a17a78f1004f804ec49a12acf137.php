<footer class="footer bg-secondary">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 col-md-7 mb-md-0 mb-3">
                <div class="footer-logo">
                    <img src="<?php echo e($settingValue['app_logo']['value']); ?>" alt="HMS-Sass" class="img-fluid"
                         id="footer-logo-white-img"/>
                </div>
                <p class="d-block text-white mt-4">
                    <?php echo $settingValue['footer_text']['value']; ?>

                </p>
            </div>
            <div class="col-lg-2 col-md-3 mb-3">
                <h3 class="mb-3 text-white"><?php echo e(__('messages.landing.usefull_link')); ?></h3>
                <ul class="ps-0">
                    <li>
                        <a href="<?php echo e(route('landing-home')); ?>"
                           class="text-decoration-none mb-3 d-block text-white <?php echo e(Request::is('/') ? 'footer-link-active' : ''); ?>"><?php echo e(__('messages.landing.home')); ?></a>
                    </li>
                    <?php if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin')): ?>
                        <li>
                            <a href="<?php echo e(route('landing.pricing')); ?>"
                               class="text-decoration-none mb-3 d-block text-white <?php echo e(Request::is('pricing') ? 'footer-link-active' : ''); ?>"><?php echo e(__('messages.landing.pricing')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(route('landing.contact.us')); ?>"
                           class="text-decoration-none mb-3 d-block text-white <?php echo e(Request::is('contact-us') ? 'footer-link-active' : ''); ?>"><?php echo e(__('messages.enquiry.contact')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('landing.faq')); ?>"
                           class="text-decoration-none mb-3 d-block text-white <?php echo e(Request::is('faqs') ? 'footer-link-active' : ''); ?>"><?php echo e(__('messages.landing.faqs')); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('landing.about.us')); ?>"
                           class="text-decoration-none mb-3 d-block text-white <?php echo e(Request::is('about-us') ? 'footer-link-active' : ''); ?>"><?php echo e(__('messages.landing.about')); ?>

                    </li>
                    <li>
                        <a href="<?php echo e(route('landing.services')); ?>"
                           class="text-decoration-none mb-3 d-block text-white <?php echo e(Request::is('our-services') ? 'footer-link-active' : ''); ?>"><?php echo e(__('messages.services')); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-12">
                <h3 class="mb-3 text-white"><?php echo e(__('messages.landing.get_in_touch')); ?></h3>
                <div class="footer-info">
                    <div class="d-flex align-items-center footer-info__block mb-3">
                        <i class="fa-solid fa-location-dot me-3 text-primary"></i>
                        <p class="text-white mb-0">
                            <?php echo e($settingValue['address']['value']); ?>

                        </p>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-3">
                        <i class="fa-solid fa-at  me-3 text-primary"></i>
                        <a href="mailto:<?php echo e($settingValue['email']['value']); ?>" class="text-decoration-none text-white">
                            <?php echo e($settingValue['email']['value']); ?>

                        </a>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-3">
                        <i class="fa-solid fa-phone text-primary me-3"></i>
                        <a href="tel:<?php echo e($settingValue['phone']['value']); ?>" class="text-decoration-none text-white">
                            <?php echo e($settingValue['phone']['value']); ?>

                        </a>
                    </div>
                    <div class="social-icon d-flex mt-lg-4">
                        <?php if(!empty($settingValue['facebook_url']['value'])): ?>
                            <a href="<?php echo e($settingValue['facebook_url']['value']); ?>" target="_blank"><i
                                        class="fa-brands fa-facebook-f me-3 d-flex align-items-center justify-content-center text-white"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($settingValue['instagram_url']['value'])): ?>
                            <a href="<?php echo e($settingValue['instagram_url']['value']); ?>" target="_blank"><i
                                        class="fa-brands fa-instagram me-3 d-flex align-items-center justify-content-center text-white"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($settingValue['twitter_url']['value'])): ?>
                            <a href="<?php echo e($settingValue['twitter_url']['value']); ?>" target="_blank"><i
                                        class="fa-brands fa-twitter me-3 d-flex align-items-center justify-content-center text-white"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($settingValue['linkedin_url']['value'])): ?>
                            <a href="<?php echo e($settingValue['linkedin_url']['value']); ?>" target="_blank"><i
                                        class="fa-brands fa-linkedin-in me-3 d-flex align-items-center justify-content-center text-white"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-lg-5 mt-4  copy-right">
                <p class=" pt-4 pb-4 mb-0 text-white"><?php echo e(__('messages.web_menu.copyright')); ?> © <?php echo e(date('Y')); ?>

                    <b><?php echo e($settingValue['app_name']['value']); ?></b> | <?php echo e(__('messages.landing.all_rights_reserved')); ?></p>
            </div>

        </div>
    </div>
</footer>






















































































































<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/landing/layouts/footer.blade.php ENDPATH**/ ?>