<div>
    <?php
    $currencySymbol = getCurrencySymbol();
    ?>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row">
                <!--[if BLOCK]><![endif]--><?php if($modules['Invoices'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a class="text-decoration-none" href="<?php echo e(route('invoices.index')); ?>">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-file-invoice fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($currencySymbol); ?>

                                        <?php echo e(formatCurrency($invoiceAmount)); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">
                                        <?php echo e(__('messages.dashboard.total_invoices')); ?>

                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Bills']): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('bills.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-money-bill fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($currencySymbol); ?>

                                        <?php echo e(formatCurrency($billAmount)); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">
                                        <?php echo e(__('messages.dashboard.total_bills')); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Payments'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('payments.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-coins fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($currencySymbol); ?>

                                        <?php echo e(formatCurrency($paymentAmount)); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">
                                        <?php echo e(__('messages.dashboard.total_payments')); ?>

                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Advance Payments'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('advanced-payments.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-money-check fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($currencySymbol); ?>

                                        <?php echo e(formatCurrency($advancePaymentAmount)); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">
                                        <?php echo e(__('messages.dashboard.total_advance_payments')); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Doctors'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('doctors.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-doctor fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($doctors); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark"><?php echo e(__('messages.dashboard.doctors')); ?>

                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Patients'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('patients.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-injured fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($patients); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark"><?php echo e(__('messages.dashboard.patients')); ?>

                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Nurses'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('nurses.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-user-nurse fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($nurses); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark"><?php echo e(__('messages.nurses')); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($modules['Beds'] == true): ?>
                    
                    <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                        <a href="<?php echo e(route('beds.index')); ?>" class="text-decoration-none">
                            <div
                                class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                <div
                                    class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-bed fs-1 text-white"></i>
                                </div>
                                <div class="text-end">
                                    <h2 class="fs-1-xxl fw-bolder text-primary"><?php echo e($availableBeds); ?></h2>
                                    <h3 class="mb-0 fs-5 fw-bold text-dark">
                                        <?php echo e(__('messages.dashboard.available_beds')); ?>

                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <div class="col-xxl-7 col-12 mb-7 mb-xxl-0">
            <div class="card mb-7">
                <div class="card-header pb-0 px-10">
                    <h3 class="mb-0">
                        <?php echo e(__('messages.enquiries')); ?>

                    </h3>
                </div>
                <div class="card-body pt-7">
                    <!--[if BLOCK]><![endif]--><?php if(count($enquiries) > 0): ?>
                        <div class="table table-responsive">
                            <table class="table table-responsive ">
                                <thead>
                                    <tr>
                                        <th scope="col"><?php echo e(__('messages.enquiry.name')); ?></th>
                                        <th scope="col"><?php echo e(__('messages.enquiry.email')); ?></th>
                                        <th scope="col"><?php echo e(__('messages.common.created_on')); ?></th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-bold">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('enquiry.show', $enquiry->id)); ?>"
                                                    class="text-primary-800 text-decoration-none mb-1 fs-6"><?php echo e($enquiry->full_name); ?></a>
                                            </td>
                                            <td class="text-start">
                                                <span class="text-muted fw-bold d-block"><?php echo e($enquiry->email); ?></span>
                                            </td>
                                            <td class="text-center text-muted fw-bold d-flex">
                                                <span class="badge bg-light-info">
                                                    <?php echo e(\Carbon\Carbon::parse($enquiry->created_at)->translatedFormat('jS M, Y')); ?>

                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <h4 class="mb-0 text-center fs-2"><?php echo e(__('messages.dashboard.no_enquiries_yet')); ?></h4>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="card mb-7">
                <div class="card-body pt-7">
                    <h3 class="mb-0">
                        <?php echo e(__('messages.new_change.upcoming_appointments')); ?>

                    </h3>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('upcoming-appointment-table', ['lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2674493306-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-12 mb-7 mb-xxl-0">
            <div class="card">
                <div class="card-header pb-0 px-10">
                    <h3 class="mb-0">
                        <?php echo e(__('messages.dashboard.notice_boards')); ?>

                    </h3>
                </div>
                <div class="card-body pt-7">
                    <!--[if BLOCK]><![endif]--><?php if(count($noticeBoards) > 0): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo e(__('messages.dashboard.title')); ?></th>
                                    <th scope="col"><?php echo e(__('messages.common.created_on')); ?></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $noticeBoards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticeBoard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('notice-boards.show', $noticeBoard->id)); ?>"
                                                class="text-decoration-none notice-board-view-btn">
                                                <?php echo e(Str::limit($noticeBoard->title, 32, '...')); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-light-info">
                                                <?php echo e(\Carbon\Carbon::parse($noticeBoard->created_at)->translatedFormat('jS M, Y')); ?>

                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>
                    <?php else: ?>
                        <h4 class="mb-0 text-center fs-2"><?php echo e(__('messages.dashboard.no_notice_yet')); ?></h4>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/admin-dashboard.blade.php ENDPATH**/ ?>