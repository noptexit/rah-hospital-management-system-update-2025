<div class="listing-skeleton">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <div class="search-box pulsate rounded-1"> </div>
                <div class="d-flex">
                    <!--[if BLOCK]><![endif]--><?php if(Request::is('holidays')): ?>
                        <?php echo $__env->make('livewire.date-skeleton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if(Request::is(
                            'incomes',
                            'expenses',
                            'users',
                            'accountants',
                            'nurses',
                            'receptionists',
                            'lab-technicians',
                            'pharmacists',
                            'accounts',
                            'employee-payrolls',
                            'invoices',
                            'payment-reports',
                            'beds',
                            'bed-assigns',
                            'doctors',
                            'prescriptions',
                            'enquiries',
                            'call-logs',
                            'visitors',
                            'charges',
                            'ipds',
                            'issued-items',
                            'live-meeting',
                            'categories',
                            'patients',
                            'patient-cases',
                            'case-handlers',
                            'patient-admissions',
                            'investigation-reports',
                            'insurances',
                            'services',
                            'ambulances',
                            'settings*',
                            'my-transactions',
                            'super-admin/hospitals',
                            'super-admin/subscription-plans',
                            'super-admin/transactions',
                            'super-admin/subscriptions-hospitals',
                            'super-admin/enquiries',
                            'employee/invoices',
                            'employee/patient-admissions',
                            'patient/my-prescriptions')): ?>
                        <?php echo $__env->make('livewire.filter-skeleton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if(Request::is(
                            'incomes',
                            'expenses',
                            'users',
                            'accountants',
                            'nurses',
                            'receptionists',
                            'lab-technicians',
                            'pharmacists',
                            'accounts',
                            'employee-payrolls',
                            'invoices',
                            'payments',
                            'payment-reports',
                            'advanced-payments',
                            'bills',
                            'bed-types',
                            'beds',
                            'bed-assigns',
                            'blood-banks',
                            'blood-donors',
                            'blood-donations',
                            'blood-issues',
                            'documents',
                            'document-types',
                            'doctors',
                            'doctor-departments',
                            'schedules',
                            'holidays',
                            'breaks',
                            'prescriptions',
                            'diagnosis-categories',
                            'patient-diagnosis-test',
                            'call-logs',
                            'visitors',
                            'receives',
                            'dispatches',
                            'front-cms-services',
                            'notice-boards',
                            'testimonials',
                            'charge-categories',
                            'charges',
                            'doctor-opd-charges',
                            'ipds',
                            'opds',
                            'item-categories',
                            'items',
                            'item-stocks',
                            'issued-items',
                            'live-meeting',
                            'categories',
                            'brands',
                            'medicines',
                            'medicine-purchase',
                            'medicine-bills',
                            'patients',
                            'patient-cases',
                            'case-handlers',
                            'patient-admissions',
                            'patient-smart-card-templates',
                            'generate-patient-smart-cards',
                            'pathology-categories',
                            'pathology-units',
                            'pathology-parameters',
                            'pathology-tests',
                            'birth-reports',
                            'death-reports',
                            'investigation-reports',
                            'operation-reports',
                            'insurances',
                            'packages',
                            'services',
                            'ambulances',
                            'ambulance-calls',
                            'sms',
                            'currency-settings',
                            'custom-fields',
                            'super-admin/admins',
                            'super-admin/hospital-type',
                            'super-admin/hospitals',
                            'super-admin/subscription-plans',
                            'super-admin/faqs',
                            'super-admin/admin-testimonial',
                            'super-admin/super-admin-currency-settings')): ?>
                        <?php echo $__env->make('livewire.add-skeleton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if(Request::is('employee/payroll')): ?>
                        <?php echo $__env->make('livewire.add-skeleton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if(Request::is('employee/prescriptions', 'patient/my-prescriptions')): ?>
                        <?php echo $__env->make('livewire.add-skeleton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
        <div class="card-content my-5">
            <div class="table pulsate rounded-1"> </div>
            <div class="row">
                <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 28; $i++): ?>
                    <div class="col-3 mb-5">
                        <div class="column-box pulsate rounded-1"> </div>
                    </div>
                <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/listing-skeleton.blade.php ENDPATH**/ ?>