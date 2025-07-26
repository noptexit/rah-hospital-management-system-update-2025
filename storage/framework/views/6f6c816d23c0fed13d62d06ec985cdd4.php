<?php
$style = 'style=background-image:url('.asset('assets/img/progress-hd.png').')';
$settingValue = getSuperAdminSettingValue();
App::setLocale(session('languageName'));
?>


<?php $__env->startSection('title'); ?>
    <?php echo e(__('auth.registration.registration')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('backend/css/fonts.css')); ?>" rel="stylesheet" type="text/css"/>
   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Authentication - Sign-up -->

    <ul class="nav nav-pills language-option" style="justify-content: flex-end; cursor: pointer">
        <li class="nav-item dropdown me-5">
            <a class="btn btn-primary w-150px mb-5 indicator m-3 dropdown-toggle"
               data-bs-toggle="dropdown" href="javascript:void(0)" role="button"
               aria-expanded="false"><?php echo e(getCurrentLanguageName()); ?></a>
            <ul class="dropdown-menu w-150px">
                <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo e((checkLanguageSession() == $key) ? 'active' : ''); ?>"><a
                                class="dropdown-item  px-5 language-select <?php echo e((checkLanguageSession() == $key) ? 'bg-primary text-white' : 'text-dark'); ?>"
                                data-id="<?php echo e($key); ?>"><?php echo e($value); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    </ul>

    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="<?php echo e(route('landing-home')); ?>" data-turbo="false" class="image mb-7 mb-sm-10">
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
            <h1 class="text-center mb-7"><?php echo e(__('auth.registration.hospital_registration')); ?></h1>
            <form method="post" action="<?php echo e(url('/register')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputName" class="form-label"><?php echo e(__('auth.hospital_name')); ?>

                            <span class="required"></span>
                        </label>
                        <input type="text" class="form-control" id="formInputName"
                               name="hospital_name" value="<?php echo e(old('hospital_name')); ?>"
                               placeholder="<?php echo e(__('auth.registration.enter_hospital_name')); ?>" pattern="^[a-zA-Z0-9 ]+$"
                               title="Hospital Name Not Allowed Special Character" required>
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label class="form-label" for="hospitalSlug"><?php echo e(__('auth.hospital_slug')); ?>

                            <span class="required"></span>
                        </label>
                        <input type="text" class="form-control" id="hospitalSlug"
                               name="username" value="<?php echo e(old('username')); ?>"
                               placeholder="<?php echo e(__('auth.registration.enter_username')); ?>" pattern="^\S[a-zA-Z0-9]+$"
                               title="Hospital Slug must be alphanumeric and having exact 12 characters in length"
                               required
                               min="12" maxlength="12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label class="form-label" for="formInputEmail"><?php echo e(__('auth.email')); ?>:
                            <span class="required"></span>
                        </label>
                        <input type="email" class="form-control" id="formInputEmail"
                               name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('auth.login.enter_email')); ?>" required>
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <?php echo e(Form::label('phone',__('messages.user.phone').(':'), ['class' => 'form-label'])); ?>

                        <br>
                        <?php echo e(Form::tel('phone', null, ['class' => 'form-control w-100 iti phoneNumber','id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'])); ?>

                        <?php echo e(Form::hidden('prefix_code',null,['id'=>'prefix_code', 'class' => 'prefix_code'])); ?>

                        <span class="text-success d-none fw-400 fs-small mt-2 valid-msg">✓ &nbsp; <?php echo e(__('messages.valid')); ?></span>
                        <span class="text-danger d-none fw-400 fs-small mt-2 error-msg"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputPassword" class="form-label">
                            <?php echo e(__('auth.password')); ?>:<span class="required"></span>
                        </label>
                        <input type="password" class="form-control" id="formInputPassword"
                               name="password" placeholder="<?php echo e(__('auth.registration.enter_password')); ?>" required
                               aria-describedby="password">
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputConfirmPassword" class="form-label">
                            <?php echo e(__('auth.confirm_password')); ?>:<span class="required"></span>
                        </label>
                        <input type="password" class="form-control" id="formInputConfirmPassword"
                               aria-describedby="confirmPassword" name="password_confirmation"
                               placeholder="<?php echo e(__('auth.registration.enter_confirm_password')); ?>" required>
                    </div>
                </div>
                <div class="col-xl-12 mt-2 d-flex justify-content-center">
                    <?php if(getSuperAdminSettingKeyValue('enable_google_recaptcha')): ?>
                            <div class="form-group mb-4">
                                <div class="g-recaptcha" data-sitekey="<?php echo e(getSuperAdminSettingKeyValue('google_captcha_key')); ?>">
                                </div>
                            </div>
                    <?php endif; ?>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"><?php echo e(__('auth.submit')); ?></button>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <span class="text-gray-700 me-2"><?php echo e(__('auth.already_user')); ?></span>
                    <a href="<?php echo e(route('login')); ?>" class="link-info fs-6 text-decoration-none">
                        <?php echo e(__('auth.sign_in')); ?>

                    </a>
                </div>
            </form>
        </div>
    </div>
    <!--end::Authentication - Sign-up-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        let utilsScript = "<?php echo e(asset('assets/js/int-tel/js/utils.min.js')); ?>";
        let isEdit = false;
        let onRegister = true;
        if ($('#g-recaptcha').length) {
            grecaptcha.render('g-recaptcha', {
                'sitekey': $('#adminRecaptcha').val(),
            })
        }

    </script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
   
   <script>
            $(document).ready(function() {

if (!$('.phoneNumber').length) {
    return false
}

let input = document.querySelector('.phoneNumber'),
    errorMsg = document.querySelector('.error-msg'),
    validMsg = document.querySelector('.valid-msg')

let errorMap = [
    $('.invalidNumber').val(),
    $('.invalidCountryNumber').val(),
    $('.tooShort').val(),
    $('.tooLong').val(),
    $('.invalidNumber').val(),
]

// initialise plugin
let intl = window.intlTelInput(input, {
    initialCountry: 'auto',
    separateDialCode: true,
    geoIpLookup: function(success, failure) {
        $.get('https://ipinfo.io', function() {}, 'jsonp').always(function(resp) {
            var countryCode = (resp && resp.country) ?
                resp.country :
                ''
            success(countryCode)
        })
    },
    utilsScript: $('.utilsScript').val(),
})

let reset = function() {
    input.classList.remove('error')
    errorMsg.innerHTML = ''
    errorMsg.classList.add('d-none')
    validMsg.classList.add('d-none')
}

input.addEventListener('blur', function() {
    reset()
    if (input.value.trim()) {
        if (intl.isValidNumber()) {
            validMsg.classList.remove('d-none')
        } else {
            input.classList.add('error')
            var errorCode = intl.getValidationError()
            errorMsg.innerHTML = errorMap[errorCode] || $('.invalidNumber').val()
            errorMsg.classList.remove('d-none')
        }
    }
})

// on keyup / change flag: reset
input.addEventListener('change', reset)
input.addEventListener('keyup', reset)
const phoneNo = $('.phoneNo').val()
if (typeof phoneNo != 'undefined' && phoneNo !== '') {
    setTimeout(function() {
        $('.phoneNumber').trigger('change')
    }, 500)
}

$(document).on('blur keyup change countrychange', function() {
    if (typeof phoneNo != 'undefined' && phoneNo !== '') {
        intl.setNumber('+' + phoneNo)
        phoneNo = ''
    }
    let getCode = intl.selectedCountryData['dialCode']
    $('.prefix_code').val(getCode)
})

if ($('.isEdit').val()) {
    let getCode = intl.selectedCountryData['dialCode']
    $('.prefix_code').val(getCode)
}

$('.phoneNumber').focus()
$('.phoneNumber').blur()
let getPhoneNumber = $('.phoneNumber').val()
let removeSpacePhoneNumber = getPhoneNumber.replace(/\s/g, '')
$('.phoneNumber').val(removeSpacePhoneNumber)
});
   </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/auth/register.blade.php ENDPATH**/ ?>