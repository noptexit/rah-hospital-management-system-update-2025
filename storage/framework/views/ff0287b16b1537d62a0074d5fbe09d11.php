<!--begin::Authentication - Sign-in -->
<?php
    $style = 'style=background-image:url(' . asset('assets/img/progress-hd.png') . ')';
    $settingValue = getSuperAdminSettingValue();
    App::setLocale(checkLanguageSession());

?>


<?php $__env->startSection('title'); ?>
    <?php echo e(__('auth.login.login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <ul class="nav nav-pills language-option" style="justify-content: flex-end; cursor: pointer">
        <li class="nav-item dropdown m-5">
            <a class="btn btn-primary w-150px mb-5 indicator m-3 dropdown-toggle" data-bs-toggle="dropdown"
                href="javascript:void(0)" role="button" aria-expanded="false"><?php echo e(getCurrentLanguageName()); ?></a>
            <ul class="dropdown-menu w-150px">
                <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo e(checkLanguageSession() == $key ? 'active' : ''); ?>"><a
                            class="dropdown-item  px-5 language-select <?php echo e(checkLanguageSession() == $key ? 'bg-primary text-white' : 'text-dark'); ?>"
                            data-id="<?php echo e($key); ?>"><?php echo e($value); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    </ul>

    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="<?php echo e(route('landing-home')); ?>" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="<?php echo e(asset($settingValue['app_logo']['value'])); ?>" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="bg-theme-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <h1 class="text-center mb-7"><?php echo e(__('auth.sign_in')); ?></h1>
            <form method="post" action="<?php echo e(url('/login')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="route_name"
                    value="<?php echo e(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName()); ?>">
                <div class="mb-sm-7 mb-4">
                    <label for="formInputEmail" class="form-label">
                        <?php echo e(__('auth.email')); ?> <span class="required"></span>
                    </label>
                    <input type="email" class="form-control" name="email"
                        value="<?php echo e(Cookie::get('email') !== null ? Cookie::get('email') : old('email')); ?>" required
                        placeholder="<?php echo e(__('auth.login.enter_email')); ?>" id="formInputEmail">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="formInputPassword" class="form-label"><?php echo e(__('auth.password')); ?>:
                            <span class="required"></span>
                        </label>
                        <a href="<?php echo e(url('/password/reset')); ?>" class="link-info fs-6 text-decoration-none">
                            <?php echo e(__('auth.login.forgot_password')); ?> ?
                        </a>
                        <input type="hidden"
                            value="<?php echo e(session('languageName') == null ? session('languageName') : checkLanguageSession()); ?>"
                            name="se_lang">
                    </div>
                    <input type="password" class="form-control" name="password" id="formInputPassword"
                        placeholder="<?php echo e(__('auth.login.enter_password')); ?>"
                        value="<?php echo e(Cookie::get('password') !== null ? Cookie::get('password') : null); ?>" required>
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck" name="remember" checked>
                    <label class="form-check-label" for="formCheck"><?php echo e(__('auth.remember_me')); ?></label>
                </div>
                <div class="d-grid" data-turbo="false">
                    <button type="submit" class="btn btn-primary"><?php echo e(__('auth.login.login')); ?></button>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <span class="text-gray-700 me-2"> <?php echo e(__('messages.new_change.not_have_account')); ?>?</span>
                    <a href="<?php echo e(route('register')); ?>" class="link-info fs-6 text-decoration-none">
                        <?php echo e(__('messages.web_home.sign_up')); ?>

                    </a>
                </div>
            </form>
        </div>
    </div>
    <!--end::Authentication - Sign-in -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>