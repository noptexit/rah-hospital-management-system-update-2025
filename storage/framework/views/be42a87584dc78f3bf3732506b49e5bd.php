<header class="position-relative bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1 col-4">
                <a href="<?php echo e(route('landing-home')); ?>" class="header-logo logo">
                    <img src="<?php echo e(asset($settingValue['app_logo']['value'])); ?>" alt="Infy HMS" class="img-fluid"
                         id="logo-img"/>
                </a>
            </div>
            <div class="col-lg-11 col-8">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-end py-0">
                    <?php if(!empty(getLoggedInUser()) && getLoggedInUser()->hasRole('Admin')): ?>
                        <a class="btn btn-primary d-lg-none d-block me-3" data-turbo="false"
                           href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                    <?php elseif(!empty(getLoggedInUser()) && getLoggedInUser()->hasRole('Super Admin')): ?>
                        <a class="btn btn-primary d-lg-none d-block me-3" data-turbo="false"
                           href="<?php echo e(route('super.admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                    <?php else: ?>
                        <a class="btn btn-primary d-lg-none d-block me-3" data-turbo="false"
                           href="<?php echo e(route('login')); ?>"><?php echo e(__('messages.web_menu.login')); ?></a>
                    <?php endif; ?>
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav align-items-center py-2 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>"
                                   href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.landing.home')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('hospitals') ? 'active' : ''); ?>"
                                   href="<?php echo e(route('landing.hospitals')); ?>"><?php echo e(__('messages.hospitals')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('about-us') ? 'active' : ''); ?>"
                                   href="<?php echo e(route('landing.about.us')); ?>"><?php echo e(__('messages.landing.about')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('our-services') ? 'active' : ''); ?>"
                                   href="<?php echo e(route('landing.services')); ?>"><?php echo e(__('messages.services')); ?></a>
                            </li>
                            <?php if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin')): ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo e(Request::is('pricing') ? 'active' : ''); ?>"
                                       href="<?php echo e(route('landing.pricing')); ?>"><?php echo e(__('messages.landing.pricing')); ?></a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('contact-us') ? 'active' : ''); ?>"
                                   href="<?php echo e(route('landing.contact.us')); ?>"><?php echo e(__('messages.enquiry.contact')); ?></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-language"></i>
                                    <?php echo e(getHeaderLanguageName()); ?></a>
                                <ul class="nav submenu language-menu">
                                    <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = \App\Models\User::LANGUAGES_IMAGE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageKey=> $imageValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($imageKey == $key): ?>
                                                <li class="nav-item languageSelection" data-prefix-value="<?php echo e($key); ?>">
                                                    <a href="javascript:void(0)"
                                                       class="nav-link d-flex align-items-center">
                                                        <img class="me-2 country-flag" src="<?php echo e(asset($imageValue)); ?>">
                                                        <?php echo e($value); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        </ul>
                        <div class="text-lg-end d-flex align-items-center ms-lg-3">
                            <?php if(!empty(getLoggedInUser()) && getLoggedInUser()->hasRole('Admin')): ?>
                                <a class="btn btn-primary d-lg-block d-none" data-turbo="false"
                                   href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('messages.dashboard.dashboard')); ?></a>
                            <?php elseif(!empty(getLoggedInUser()) && getLoggedInUser()->hasRole('Super Admin')): ?>
                                <a class="btn btn-primary d-lg-block d-none" data-turbo="false"
                                   href="<?php echo e(route('super.admin.dashboard')); ?>"><?php echo e(__('messages.dashboard.dashboard')); ?></a>
                            <?php else: ?>
                                <a class="btn btn-primary d-lg-block d-none" data-turbo="false"
                                   href="<?php echo e(route('login')); ?>"><?php echo e(__('messages.web_menu.login')); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>






































































































<?php /**PATH /var/www/html/resources/views/landing/layouts/header.blade.php ENDPATH**/ ?>