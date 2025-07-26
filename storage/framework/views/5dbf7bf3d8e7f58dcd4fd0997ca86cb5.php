<!-- Start Footer Area -->
<?php
    $user = getUser();
    $hospitalSettingValue = getSettingValue();
?>
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="row justify-content-between">
                    <div class="col-lg-2 mb-lg-0 mb-4">
                        <img src="<?php echo e(asset(getLogoUrl())); ?>" alt="Infy HMS" class="img-fluid"/>
                    </div>
                    <div class="col-lg-10">
                        <p class="d-block text-white">
                            <?php echo $hospitalSettingValue['about_us']['value']; ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-3">
                <h3 class="mb-4 pb-1 text-primary"><?php echo e(__('messages.web_menu.useful_link')); ?></h3>
                <ul class="ps-0">
                    <li>
                        <a href="<?php echo e(route('front', $user->username)); ?>" class="<?php echo e(Route::currentRouteName() == 'front' ? 'footer-active' : ''); ?> text-decoration-none mb-3 d-block text-white">
                            <?php echo e(__('messages.web_home.home')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('our-services', $user->username)); ?>" class="<?php echo e(Route::currentRouteName() == 'our-services' ? 'footer-active' : ''); ?> text-decoration-none mb-3 d-block text-white">
                            <?php echo e(__('messages.web_home.services')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('our-doctors', $user->username)); ?>" class="<?php echo e(Route::currentRouteName() == 'our-doctors' ? 'footer-active' : ''); ?> text-decoration-none mb-3 d-block text-white">
                            <?php echo e(__('messages.web_home.doctors')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('aboutUs', $user->username)); ?>" class="<?php echo e(Route::currentRouteName() == 'aboutUs' ? 'footer-active' : ''); ?> text-decoration-none mb-3 d-block text-white">
                            <?php echo e(__('messages.web_menu.about')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('contact', $user->username)); ?>" class="<?php echo e(Route::currentRouteName() == 'contact' ? 'footer-active' : ''); ?> text-decoration-none mb-3 d-block text-white">
                            <?php echo e(__('messages.web_home.contact')); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <h3 class="mb-4 pb-1 text-primary"><?php echo e(__('messages.web_menu.contact_information')); ?></h3>
                <div class="footer-info">

                    <div class="d-flex align-items-center footer-info__block mb-3 pb-1">
                        <i class="fa-solid fa-phone text-white fs-5 me-3"></i>
                        <a href="tel:<?php echo e($hospitalSettingValue['hospital_phone']['value']); ?>" class="text-decoration-none text-white fs-6">
                            <?php echo e($hospitalSettingValue['hospital_phone']['value']); ?>

                        </a>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-3 pb-1">
                        <i class="fa-solid fa-clock fs-5 me-3 text-white"></i>
                        <p class="text-white fs-6 mb-0">
                            <?php echo e($hospitalSettingValue['hospital_from_time']['value']); ?>

                        </p>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-3 pb-1">
                        <i class="fa-solid fa-location-dot fs-5 me-3 text-white"></i>
                        <p class="text-white fs-6 mb-0">
                            <?php echo e($hospitalSettingValue['hospital_address']['value']); ?>

                        </p>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-3 pb-1">
                        <a href="<?php echo e(route('landing-home')); ?>" type="submit" data-turbo="false" class="btn btn-primary"><?php echo e(__('messages.new_change.back_to_main_site')); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-lg-5 mt-4 copy-right">
                <p class="pt-4 pb-4 mb-0 text-white">
                    <?php echo e(__('messages.web_menu.copyright')); ?> © <?php echo e(date('Y')); ?> <?php echo e(__('messages.web_menu.all_rights_reserved_by')); ?>

                    <a href="<?php echo e(config('app.url')); ?>" class="text-white"> <?php echo e(getAppName()); ?></a>
                </p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /var/www/html/resources/views/web/layouts/footer.blade.php ENDPATH**/ ?>