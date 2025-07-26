<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.contact_us')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>


    
    

<?php $__env->stopSection(); ?>
<?php
    $enquiry = request()->query('enquiry');
    $hospitalSettingValue = getSettingValue();
?>
<?php $__env->startSection('content'); ?>
    <div class="contact-page">
        <!-- start hero section -->
        <section class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.contact')); ?>

                            </h1>
                            <?php
                            $userName = request()->segment(2);
                            ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('front',$userName)); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.contact')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/contact.png')); ?>" alt="Infy Care" class="img-fluid" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start service-section -->
        <section class="information-section p-t-120 p-b-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 information-block d-flex align-items-stretch">
                        <div class="card text-center mx-lg-2 flex-fill">
                            <div class="icon-information-box d-flex align-items-center justify-content-center mx-auto">
                                <i class="fa-solid fa-phone fs-3"></i>
                            </div>
                            <div class="card-body text-center d-flex flex-column">
                                <a href="tel:<?php echo e($hospitalSettingValue['hospital_phone']['value']); ?>" class="text-decoration-none fs-5 text-success my-2">
                                    <?php echo e($hospitalSettingValue['hospital_phone']['value']); ?>

                                </a>
                                <span class="text-secondary fw-light"><?php echo e(__('messages.web_contact.call_today')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 information-block d-flex align-items-stretch">
                        <div class="card text-center mx-lg-2 flex-fill">
                            <div class="icon-information-box d-flex align-items-center justify-content-center mx-auto">
                                <i class="fa-solid fa-envelope fs-3"></i>
                            </div>
                            <div class="card-body text-center d-flex flex-column">
                                <a href="mailto:<?php echo e($hospitalSettingValue['hospital_email']['value']); ?>"
                                   class="text-decoration-none fs-5 text-success my-2">
                                    <?php echo e($hospitalSettingValue['hospital_email']['value']); ?>

                                </a>
                                <span class="text-secondary fw-light"><?php echo e(__('messages.web_home.contact_hospital')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 information-block d-flex align-items-stretch">
                        <div class="card text-center mx-lg-2 flex-fill">
                            <div class="icon-information-box d-flex align-items-center justify-content-center mx-auto">
                                <i class="fa-solid fa-clock fs-3"></i>
                            </div>
                            <div class="card-body text-center d-flex flex-column">
                                <p class="fs-5 text-success fw-normal my-2">
                                    <?php echo e($hospitalSettingValue['hospital_from_time']['value']); ?>

                                </p>
                                <span class="text-secondary fw-light"><?php echo e(__('messages.web_contact.open_hours')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 information-block d-flex align-items-stretch">
                        <div class="card text-center mx-lg-2 flex-fill">
                            <div class="icon-information-box d-flex align-items-center justify-content-center mx-auto">
                                <i class="fa-solid fa-location-dot fs-3"></i>
                            </div>
                            <div class="card-body text-center d-flex flex-column">
                                <p class="fs-5 text-success fw-normal my-2">
                                    <?php echo e($hospitalSettingValue['hospital_address']['value']); ?>

                                </p>
                                <span class="text-secondary fw-light"><?php echo e(__('messages.web_contact.our_location')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="btn-group mt-4 mt-xl-5">
                        <?php if($hospitalSettingValue['facebook_url']['value'] != '' && !empty($hospitalSettingValue['facebook_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['facebook_url']['value']); ?>" class="btn btn-primary fs-4" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($hospitalSettingValue['twitter_url']['value'] != '' && !empty($hospitalSettingValue['twitter_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['twitter_url']['value']); ?>" class="btn btn-primary fs-4" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($hospitalSettingValue['instagram_url']['value'] != '' && !empty($hospitalSettingValue['instagram_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['instagram_url']['value']); ?>" class="btn btn-primary fs-4" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($hospitalSettingValue['linkedIn_url']['value'] != '' && !empty($hospitalSettingValue['linkedIn_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['linkedIn_url']['value']); ?>" class="btn btn-primary fs-4" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end service-section -->

        <!-- start contact-form section -->
        <section class="contact-form-section p-b-200">
            <div class="container">
                <div class="bg-contact-img">
                    <div class="row justify-content-end">
                        <div class="col-xl-6 col-lg-8">






















































































                            <form class="contact-form" method="POST" id="enquiryCreateForm">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="ajax-message"></div>
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <input type="hidden" name="hospital_username" value="<?php echo e(request()->segment(2)); ?>">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form__input-block">
                                            <input name="full_name" id="full_name" type="text" class="form-control"
                                                   data-error="Please enter your name"
                                                   placeholder="<?php echo e(__('messages.web_contact.enter_your_name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form__input-block">
                                            <input name="email" id="email" type="email" class="form-control"
                                                   placeholder="<?php echo e(__('messages.web_contact.enter_your_email')); ?>"
                                                   data-error="<?php echo e(__('messages.web_contact.enter_your_email')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form__input-block">
                                            <input type="tel"
                                                   class="form-control phoneNumber <?php echo e($errors->has('contact_no')?'is-invalid':''); ?>"
                                                   id="phoneNumber" name="contact_no" value="<?php echo e(old('contact_no')); ?>"
                                                   placeholder="<?php echo e(__('messages.web_contact.contact_no')); ?>" required
                                                   data-error="<?php echo e(__('messages.web_contact.please_enter_your_phone_number')); ?>"
                                                   onkeyup='if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")'>
                                            <div class="help-block with-errors"></div>
                                            <?php echo e(Form::hidden('prefix_code',null,['id'=>'prefix_code','class'=>'prefix_code'])); ?>

                                            <span class="text-green d-none fw-400 fs-small mt-2 valid-msg">✓ &nbsp; <?php echo e(__('messages.valid')); ?></span>
                                            <span class="text-danger d-none fw-400 fs-small mt-2 error-msg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form__input-block">
                                            <select name="type" class="contactUsGeneral" id="contactUsGeneral">
                                                <option value="1"><?php echo e(\App\Models\Enquiry::TYPE_GENERAL); ?></option>
                                                <option value="2"><?php echo e(\App\Models\Enquiry::TYPE_FEEDBACK); ?></option>
                                                <option value="3"><?php echo e(\App\Models\Enquiry::TYPE_RESIDENTIAL); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form__input-block">
                                            <textarea name="message" id="message" rows="4"
                                                      class="form-control form-textarea"
                                                      placeholder="<?php echo e(__('messages.web_contact.type_your_message')); ?>"
                                                      required
                                                      data-error="<?php echo e(__('messages.web_contact.write_your_message')); ?>"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo e(config('app.recaptcha.key')); ?>" id="adminRecaptcha">
                                    <?php if(getSettingForReCaptcha($userName)): ?>
                                        <div class="form-group col-xl-12 mt-2">
                                            <?php if(config('app.recaptcha.key')): ?>
                                                <div class="g-recaptcha" id="g-recaptcha" data-sitekey="<?php echo e(config('app.recaptcha.key')); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-lg-12 text-center mt-4">
                                        <button type="submit" id="btnContact"
                                                class="btn btn-primary"><?php echo e(__('messages.web_contact.send_message')); ?>

                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo e(Form::hidden('isEdit', false, ['class' => 'isEdit'])); ?>

            <?php echo e(Form::hidden('utilsScript', asset('assets/js/int-tel/js/utils.min.js'), ['class' => 'utilsScript'])); ?>

            <?php echo e(Form::hidden('enquiryURl', route('send.enquiry', getUser()->username), ['class' => 'enquiryURl'])); ?>

            <?php if(getSettingForReCaptcha($userName)): ?>
                <?php echo e(Form::hidden('isGoogleCaptchaEnabled', getSettingForReCaptcha($userName), ['class' => 'isGoogleCaptchaEnabled'])); ?>

            <?php endif; ?>
        </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/web/home/contact_us.blade.php ENDPATH**/ ?>