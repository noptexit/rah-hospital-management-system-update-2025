<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php
        $settingValue = getSuperAdminSettingValue();
        $hospitalSettingValue = getSettingValue();
        $superAdminSettingValue = getSuperAdminSettingKeyValue('app_name');
        $username = App\Models\User::where('tenant_id', getLoggedInUser()->tenant_id)->first();
        $getCurrencySymbol = getCurrencySymbol();
    ?>
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getLoggedInUser()->hasRole('Super Admin') ? $superAdminSettingValue : getSettingValueByKey('app_name')); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="turbo-cache-control" content="no-cache">
    <link rel="icon"
        href="<?php echo e(!getLoggedInUser()->hasRole('Super Admin') ? asset($hospitalSettingValue['favicon']['value']) : asset($settingValue['favicon']['value'])); ?>"
        type="image/png">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link href="<?php echo e(mix('assets/css/third-party.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(mix('assets/css/custom.css')); ?>" rel="stylesheet" type="text/css" />

    
    <?php if(getLoggedInUser()->theme_mode): ?>
        <link href="<?php echo e(mix('assets/css/style.dark.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(mix('assets/css/plugins.dark.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(mix('assets/css/phone-number-dark.css')); ?>" rel="stylesheet" type="text/css" />
    <?php else: ?>
        <link href="<?php echo e(mix('assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(mix('assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

       <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    
    
    
    
    <?php echo $__env->yieldContent('page_css'); ?>
    
    

    
    
    
    
    
    
    
    <?php echo $__env->yieldContent('css'); ?>

    
    
    
    
    <script>
        let sweetAlertIcon = "<?php echo e(asset('assets/images/remove.png')); ?>"
        let defaultCountryCodeValue = "<?php echo e($settingValue['default_country_code']['value']); ?>"
        let UserCurrentLang = "<?php echo e(getLoggedInUser()->language); ?>";
    </script>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
       <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    
    
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="//cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://npmcdn.com/flatpickr@4.5.2/dist/l10n"></script>
    <script src="<?php echo e(asset('assets/js/third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    <script src="<?php echo e(mix('js/pages.js')); ?>"></script>
    
    
    
    

    <?php echo $__env->yieldContent('page_scripts'); ?>
    <script>
        
        
        
            // const defaultImageUrl = '';
            (function($) {
                $.fn.button = function(action) {
                    console.log(action);
                    if (action === 'loading' && this.data('loading-text')) {
                        this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled',
                            true)
                    }
                    if (action === 'reset' && this.data('original-text')) {
                        this.html(this.data('original-text')).prop('disabled', false)
                    }
                }
                $('#overlay-screen-lock').hide()
            }(jQuery))
        // $(document).ready(function () {
        //     $('.alert').delay(5000).slideUp(300)
        // })

        $(document).ready(function() {
            $('#language').select2({
                width: '100%',
                dropdownParent: $('#changeLanguageModal'),
            });
        })

        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300)
        })

        $('.alert').delay(5000).slideUp(300, function() {
            $('.alert').attr('style', 'display:none')
        })
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    <script>
        let userCurrentLanguage = "<?php echo e(getLoggedInUser()->language); ?>";

        Lang.setLocale(userCurrentLanguage);
    </script>

</head>
<?php
$style = 'style=';
?>

<body>
    
    
    <?php echo $__env->make('user_profile.edit_profile_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user_profile.change_password_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="d-flex flex-column flex-root vh-100">
        <div class="d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper d-flex flex-column flex-row-fluid">
                <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class='content d-flex flex-column flex-column-fluid pt-7'>
                    <?php echo $__env->yieldContent('header_toolbar'); ?>
                    <div class='d-flex flex-wrap flex-column-fluid'>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <div class='container-fluid'>
                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php echo $__env->make('smart-patient-cards.show_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo e(form::hidden('pdfDocumentImageUrl', url('assets/img/pdf.png'), ['id' => 'pdfDocumentImageUrl'])); ?>

    <?php echo e(form::hidden('docxDocumentImageUrl', url('assets/img/pdf.png'), ['id' => 'docxDocumentImageUrl'])); ?>

    <?php echo e(Form::hidden('ajaxCallIsRunning', false, ['class' => 'ajaxCallIsRunning'])); ?>

    <?php echo e(Form::hidden('loggedInUserId', getLoggedInUserId(), ['class' => 'loggedInUserId'])); ?>

    <?php echo e(Form::hidden('profileUrl', url('profile'), ['class' => 'profileUrl'])); ?>

    <?php echo e(Form::hidden('profileUpdateUrl', url('profile-update'), ['class' => 'profileUpdateUrl'])); ?>

    <?php echo e(Form::hidden('changePasswordUrl', url('change-password'), ['class' => 'changePasswordUrl'])); ?>

    <?php echo e(Form::hidden('updateLanguageURL', url('update-language'), ['class' => 'updateLanguageURL'])); ?>

    <?php echo e(Form::hidden('userCurrentLanguage', getLoggedInUser()->language, ['class' => 'userCurrentLanguage'])); ?>

    <?php echo e(Form::hidden('superAdminCurrentCurrency', superAdminCurrency(), ['class' => 'superAdminCurrentCurrency'])); ?>

    <?php echo e(Form::hidden('currentCurrency', $getCurrencySymbol, ['class' => 'currentCurrency'])); ?>

    <?php echo e(Form::hidden('pdfDocumentImageUrl', url('assets/img/pdf.png'), ['class' => 'pdfDocumentImageUrl'])); ?>

    <?php echo e(Form::hidden('docxDocumentImageUrl', url('assets/img/doc.png'), ['class' => 'docxDocumentImageUrl'])); ?>

    <?php echo e(Form::hidden('audioDocumentImageUrl', url('assets/img/audio.png'), ['class' => 'audioDocumentImageUrl'])); ?>

    <?php echo e(Form::hidden('videoDocumentImageUrl', url('assets/img/video.png'), ['class' => 'videoDocumentImageUrl'])); ?>

    <?php echo e(Form::hidden('deleteVariable', __('messages.common.delete'), ['class' => 'deleteVariable'])); ?>

    <?php echo e(Form::hidden('yesVariable', __('messages.common.yes'), ['class' => 'yesVariable'])); ?>

    <?php echo e(Form::hidden('noVariable', __('messages.common.no'), ['class' => 'noVariable'])); ?>

    <?php echo e(Form::hidden('cancelVariable', __('messages.common.cancel'), ['class' => 'cancelVariable'])); ?>

    <?php echo e(Form::hidden('confirmVariable', __('messages.common.are_you_sure_want_to_delete_this'), ['class' => 'confirmVariable'])); ?>

    <?php echo e(Form::hidden('deletedVariable', __('messages.common.deleted'), ['class' => 'deletedVariable'])); ?>

    <?php echo e(Form::hidden('hasBeenDeletedVariable', __('messages.common.has_been_deleted'), ['class' => 'hasBeenDeletedVariable'])); ?>

    <?php echo e(Form::hidden('okVariable', __('messages.common.ok'), ['class' => 'okVariable'])); ?>



</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>