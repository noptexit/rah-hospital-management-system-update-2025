<?php
    $notifications = getNotification(Auth::user()->roles->pluck('name')->first());
    $notificationCount = count($notifications);
?>
<?php
$style = 'style=';
$background = 'background-color:';
$margin = 'margin-left:';
?>

<header class='d-flex align-items-center justify-content-between flex-grow-1 header px-3 px-xl-0'>

    <button type="button" class="btn px-0 aside-menu-container__aside-menubar d-block d-xl-none sidebar-btn">
        <i class="fa-solid fa-bars fs-1"></i>
    </button>

    <nav class="navbar navbar-expand-xl <?php echo e(getLoggedInUser()->theme_mode ? 'bg-light' : 'bg-white'); ?> navbar-light top-navbar d-xl-flex d-block px-3 px-xl-0 py-4 py-xl-0"
        id="nav-header">
        <div class="container-fluid pe-0">
            <div class="navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php echo $__env->make('layouts.sub_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="nav align-items-center flex-nowrap">

        <li class="px-xxl-3 px-2">
            <?php if(getLoggedInUser()->hasRole('Admin')): ?>
                <div class="d-flex <?php echo e(getLoggedInUser()->language == 'ar' ? 'hospital-preview' : 'ms-auto'); ?> ">
                    <div class="d-flex align-items-stretch hospital-preview-logo">
                        <a href="<?php echo e(route('front', $username->username)); ?>" class="ps-2 pe-0" target="_blank">
                            <i class="fas fa-globe-americas text-primary fs-3"></i>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </li>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
        <?php
            $patientUniqueId = Auth::user()->patient->id;
            $isPatientIdCard = Auth::user()->patient->template_id;
        ?>
        <?php if(!is_null($isPatientIdCard)): ?>
            <li class="px-xxl-3 px-2">
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                    title="" data-bs-original-title="Patient smart card">
                    <button type="button" class="btn px-1 text-primary fs-3 show-patient-smart-card" data-id="<?php echo e($patientUniqueId); ?>"
                        data-bs-toggle="modal" data-bs-target="#showSmartCardModal">
                        <i class="fa-solid fa-id-card fs-1 text-decoration-none"></i>
                    </button>
                </div>
            </li>
        <?php endif; ?>
        <?php endif; ?>
        <li class="px-xxl-3 px-2">
            <a data-turbo="false" href="<?php echo e(route('theme.mode')); ?>"
                title="<?php echo e(getLoggedInUser()->theme_mode ? 'Switch to Light Mode' : 'Switch to Dark Mode'); ?>">
                <?php if(getLoggedInUser()->theme_mode): ?>
                    <i class="fa-solid fa-sun text-primary fs-3"></i>
                <?php else: ?>
                    <i class="fa-solid fa-moon text-primary fs-3"></i>
                <?php endif; ?>
            </a>
        </li>

        <li class="px-xxl-3 px-2">
            <div class="dropdown custom-dropdown d-flex align-items-center py-4">
                <button class="btn dropdown-toggle hide-arrow ps-2 pe-0 position-relative" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                    data-bs-auto-close="outside">
                    <i class="fa-solid fa-bell text-primary fs-2"></i>
                    <?php if(count($notifications) != 0): ?>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge badge-circle bg-danger <?php echo e($notificationCount > 9 ? 'end-0' : 'counter-0'); ?>"
                            id="counter"><?php echo e(count($notifications)); ?></span>
                    <?php endif; ?>
                </button>
                <div class="dropdown-menu py-0 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-start border-bottom py-4 px-7">
                        <h3 class="text-gray-900 mb-0"><?php echo e(__('messages.notification.notifications')); ?></h3>
                    </div>
                    <div class="px-7 mt-5 inner-scroll height-270">
                        <?php if($notificationCount > 0): ?>
                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="d-flex position-relative mb-5 notification"
                                    data-id="<?php echo e($notification->id); ?>" id="notification">
                                    <span class="me-5 text-primary fs-2 icon-label">
                                        <i class="<?php echo e(getNotificationIcon($notification->type)); ?>"></i>
                                    </span>
                                    <div>
                                        <a href="#" class="text-decoration-none">
                                            <h5 class="text-gray-900 fs-6 mb-2"><?php echo e($notification->title); ?></h5>
                                        </a>
                                        <h6 class="text-gray-600 fs-small fw-light mb-0">
                                            <?php echo e(\Carbon\Carbon::parse($notification->created_at)->diffForHumans(null, true)); ?>

                                        </h6>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <div>
                                <h5 class="text-gray-900 fs-6 mb-2 empty-state text-center">
                                    <?php echo e(__('messages.notification.you_don`t_have_any_new_notification')); ?></h5>
                            </div>
                        <?php endif; ?>
                        <div>
                            <h5 class="text-gray-900 text-center fs-6 mb-2 empty-state empty-notification d-none">
                                <?php echo e(__('messages.notification.you_don`t_have_any_new_notification')); ?></h5>
                        </div>
                    </div>
                    <?php if($notificationCount > 0): ?>
                        <div class="text-center border-top p-4 mark-read">
                            <h5><a href="#"
                                    class="text-primary mb-0 fs-5 read-all-notification text-decoration-none"
                                    id="readAllNotification"><?php echo e(__('messages.notification.mark_all_as_read')); ?></a>
                            </h5>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </li>

        <li class="px-xxl-3 px-2">
            <div class="dropdown dropdown-transparent d-flex align-items-center py-4">
                <div class="image image-circle image-mini">
                    <img src="<?php echo e(Auth::user()->image_url ?? ''); ?>" class="img-fluid" alt="profile image">
                </div>
                <button class="btn dropdown-toggle ps-2 pe-0 text-gray-600" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                    title="<?php echo e(Auth::user()->full_name); ?>">
                    
                    <?php echo substr(strip_tags(Auth::user()->full_name), 0, 20) . (strlen(Auth::user()->full_name) > 22 ? '...' : ''); ?>

                    <i class="fa-solid fa-angle-down"></i>
                </button>
                <div class="dropdown-menu py-7 pb-4 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-center border-bottom pb-5">
                        <div class="image image-circle image-tiny mb-5">
                            <img src="<?php echo e(Auth::user()->image_url ?? ''); ?>" class="img-fluid" alt="profile image">
                        </div>
                        <h3 class="text-gray-900"><?php echo e(Auth::user()->full_name ?? ''); ?></h3>
                        <h4 class="mb-0 fw-400 fs-6"><?php echo e(Auth::user()->email ?? ''); ?></h4>
                    </div>
                    <ul class="pt-4">
                        <li>
                            <a class="dropdown-item editProfile" data-id="<?php echo e(getLoggedInUserId()); ?>"
                                href="javascript:void(0)">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <?php echo e(__('messages.user.edit_profile')); ?>

                            </a>
                        </li>
                        <?php if(getLoggedInUser()->hasRole('Admin')): ?>
                            <li>
                                <a class="dropdown-item subscription_plan"
                                    href="<?php echo e(route('subscription.pricing.plans.index')); ?>">
                                    <span class="dropdown-icon me-4 text-gray-600">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </span>
                                    <?php echo e(__('messages.subscription_plans.subscription_plans')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(session('impersonated_by')): ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('impersonate.userLogout')); ?>"
                                    data-turbo="false">
                                    <span class="dropdown-icon me-4 text-gray-600">
                                        <i class="fa fa-external-link"></i>
                                    </span>
                                    <?php echo e(__('messages.user.back_to_admin')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(!session('impersonated_by')): ?>
                            <li>
                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#changePasswordModal" data-id="<?php echo e(getLoggedInUserId()); ?>">
                                    <span class="dropdown-icon me-4 text-gray-600">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                    <?php echo e(__('messages.user.change_password')); ?>

                                </button>
                            </li>
                        <?php endif; ?>
                        <li>
                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#changeLanguageModal" data-id="<?php echo e(getLoggedInUserId()); ?>">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-globe"></i>
                                </span>
                                <?php echo e(__('messages.profile.change_language')); ?>

                            </button>
                        </li>
                        <?php if(!session('impersonated_by')): ?>
                            <li>
                                <form id="logout-form" action="<?php echo e(route('logout.user')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                    <span class="dropdown-icon me-4 text-gray-600">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </span>
                                    <?php echo e(__('messages.user.logout')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button type="button" class="btn px-0 d-block d-xl-none header-btn pb-2">
                <i class="fa-solid fa-bars fs-1"></i>
            </button>
        </li>
    </ul>
</header>

<div class="bg-overlay" id="nav-overly"></div>
<?php /**PATH /var/www/html/resources/views/layouts/header.blade.php ENDPATH**/ ?>