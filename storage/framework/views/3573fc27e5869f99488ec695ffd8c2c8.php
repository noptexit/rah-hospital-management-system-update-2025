<?php ($modules = App\Models\Module::cacheFor(now()->addDays())->toBase()->get()); ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('dashboard*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>"
            href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('messages.dashboard.dashboard')); ?></a>
    </li>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('users*', 'accountants*', 'lab-technicians*', 'nurses*', 'pharmacists*', 'receptionists*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('users*') ? 'active' : ''); ?>"
            href="<?php echo e(route('users.index')); ?>"><?php echo e(__('messages.users')); ?></a>
    </li>
<?php endif; ?>



<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('my-transactions*') ? 'd-none' : ''); ?>">
    <a class="nav-link p-0 <?php echo e(Request::is('my-transactions*') ? 'active' : ''); ?>"
        href="<?php echo e(route('subscriptions.plans.transactions.index')); ?>"><?php echo e(__('messages.subscription_plans.transactions')); ?></a>
</li>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('subscription-plans*') && !Request::is('choose-payment-type*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('subscription-plans*') || Request::is('choose-payment-type*') ? 'active' : ''); ?>"
            href="<?php echo e(route('subscription.pricing.plans.index')); ?>"><?php echo e(__('messages.subscription_plans.subscription_plans')); ?></a>
    </li>
<?php endif; ?>


<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Receptionist|Nurse')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'IPD Patients', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('ipds*', 'opds*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('ipds*') ? 'active' : ''); ?>"
                href="<?php echo e(route('ipd.patient.index')); ?>"><?php echo e(__('messages.ipd_patients')); ?></a>
        </li>
    <?php endif; ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'OPD Patients', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('ipds*', 'opds*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('opds*') ? 'active' : ''); ?>"
                href="<?php echo e(route('opd.patient.index')); ?>"><?php echo e(__('messages.opd_patients')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinated Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('vaccinated-patients*', 'vaccinations*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('vaccinated-patients*') ? 'active' : ''); ?>"
                href="<?php echo e(route('vaccinated-patients.index')); ?>"><?php echo e(__('messages.vaccinated_patients')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinations', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('vaccinated-patients*', 'vaccinations*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('vaccinations*') ? 'active' : ''); ?>"
                href="<?php echo e(route('vaccinations.index')); ?>"><?php echo e(__('messages.vaccinations')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Accounts', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('accounts*') ? 'active' : ''); ?>"
                href="<?php echo e(route('accounts.index')); ?>"><?php echo e(__('messages.accounts')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Employee Payrolls', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee-payrolls*') ? 'active' : ''); ?>"
                href="<?php echo e(route('employee-payrolls.index')); ?>"><?php echo e(__('messages.employee_payrolls')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Invoices', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('invoices*') ? 'active' : ''); ?>"
                href="<?php echo e(route('invoices.index')); ?>"><?php echo e(__('messages.invoices')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Payments', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('payments*') ? 'active' : ''); ?>"
                href="<?php echo e(route('payments.index')); ?>"><?php echo e(__('messages.payments')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Payment Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('payment-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('payment.reports')); ?>"><?php echo e(__('messages.payment.payment_reports')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Advance Payments', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('advanced-payments*') ? 'active' : ''); ?>"
                href="<?php echo e(route('advanced-payments.index')); ?>"><?php echo e(__('messages.advanced_payments')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bills', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bills*') ? 'active' : ''); ?>"
                href="<?php echo e(route('bills.index')); ?>"><?php echo e(__('messages.bills')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Advance Payments', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accounts*', 'employee-payrolls*', 'invoices*', 'payments*', 'payment-reports*', 'advanced-payments*', 'bills*', 'manual-billing-payments*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('manual-billing-payments*') ? 'active' : ''); ?>"
                href="<?php echo e(route('manual.billing.payment')); ?>"><?php echo e(__('messages.manual_billing_payments')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Nurse')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Types', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds*', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bed-types*') ? 'active' : ''); ?>"
                href="<?php echo e(route('bed-types.index')); ?>"><?php echo e(__('messages.bed_types')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Nurse')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Beds', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('beds*') || Request::is('bulk-beds') ? 'active' : ''); ?>"
                href="<?php echo e(route('beds.index')); ?>"><?php echo e(__('messages.beds')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Nurse|Doctor')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Assigns', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient-cases*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-cases*') ? 'active' : ''); ?>"
                href="<?php echo e(route('bed-assigns.index')); ?>">
                <?php echo e(__('messages.bed_assigns')); ?>

            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Nurse|Doctor')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Assigns', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bed-assigns*') ? 'active' : ''); ?>" href="<?php echo e(route('bed-assigns.index')); ?>">
                <?php echo e(__('messages.bed_assigns')); ?>

            </a>
        </li>
    <?php endif; ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bed Assigns', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('bed-types*', 'beds*', 'bed-assigns*', 'bulk-beds', 'bed-status') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('bed-status*') ? 'active' : ''); ?>" href="<?php echo e(route('bed-status')); ?>">
                <?php echo e(__('messages.bed_status.bed_status')); ?>

            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Banks', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-banks*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-banks.index')); ?>"><?php echo e(__('messages.blood_banks')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Donors', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-donors*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-donors.index')); ?>"><?php echo e(__('messages.blood_donors')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Donations', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-donations*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-donations.index')); ?>"><?php echo e(__('messages.blood_donations')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Blood Issues', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('blood-banks*', 'blood-donors*', 'blood-donations*', 'blood-issues*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('blood-issues*') ? 'active' : ''); ?>"
                href="<?php echo e(route('blood-issues.index')); ?>"><?php echo e(__('messages.blood_issues')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patients*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patients.index')); ?>"><?php echo e(__('messages.patients')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Cases', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-cases*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient-cases.index')); ?>"><?php echo e(__('messages.cases')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Case Handlers', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('case-handlers*') ? 'active' : ''); ?>"
                href="<?php echo e(route('case-handlers.index')); ?>"><?php echo e(__('messages.case_handlers')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Admissions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-admissions*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient-admissions.index')); ?>"><?php echo e(__('messages.patient_admissions')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Admissions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-admissions*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient-admissions.index')); ?>"><?php echo e(__('messages.patient_admissions')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-smart-card-templates*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient-smart-card-templates.index')); ?>"><?php echo e(__('messages.lunch_break.smart_patient_card_template')); ?></a>
        </li>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('generate-patient-smart-cards*') ? 'active' : ''); ?>"
                href="<?php echo e(route('smart-patient-cards.index')); ?>"><?php echo e(__('messages.lunch_break.generate_smart_patient_cards')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>


<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Case Manager|Pharmacist|Lab Technician')): ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/doctor*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/doctor*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/doctor')); ?>"><?php echo e(__('messages.doctors')); ?></a>
        </li>
    <?php endif; ?>
    <!--</div>-->
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Pharmacist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/prescriptions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/prescriptions*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/prescriptions')); ?>"><?php echo e(__('messages.prescriptions')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Documents', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('documents*', 'document-types*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('documents*') ? 'active' : ''); ?>"
                href="<?php echo e(route('documents.index')); ?>"><?php echo e(__('messages.documents')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Document Types', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('documents*', 'document-types*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('document-types*') ? 'active' : ''); ?>"
                href="<?php echo e(route('document-types.index')); ?>"><?php echo e(__('messages.document_types')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Insurances', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('insurances*') ? 'active' : ''); ?>"
                href="<?php echo e(route('insurances.index')); ?>"><?php echo e(__('messages.insurances')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Packages', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('packages*') ? 'active' : ''); ?>"
                href="<?php echo e(route('packages.index')); ?>"><?php echo e(__('messages.packages')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Services', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('services*') ? 'active' : ''); ?>"
                href="<?php echo e(route('services.index')); ?>"><?php echo e(__('messages.services')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Ambulances', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('ambulances*') ? 'active' : ''); ?>"
                href="<?php echo e(route('ambulances.index')); ?>"><?php echo e(__('messages.ambulances')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Case Manager')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Ambulances Calls', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('insurances*', 'packages*', 'services*', 'ambulances*', 'ambulance-calls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('ambulance-calls*') ? 'active' : ''); ?>"
                href="<?php echo e(route('ambulance-calls.index')); ?>"><?php echo e(__('messages.ambulance_calls')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('doctors*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('doctors.index')); ?>"><?php echo e(__('messages.doctors')); ?></a>
            </li>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctor Departments', $modules)): ?>
            <?php
            $style = 'style=';
            $background = 'white-space:';
            ?>

            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('doctor-departments*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('doctor-departments.index')); ?>"><span class="menu-title"
                        <?php echo e($style); ?>"<?php echo e($background); ?> nowrap"><?php echo e(__('messages.doctor_departments')); ?></span></a>
            </li>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Schedules', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('schedules*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('schedules.index')); ?>"><?php echo e(__('messages.schedules')); ?></a>
            </li>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor')): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('holidays*') ? 'active' : ''); ?>"
                href="<?php echo e(route('holidays.index')); ?>"><?php echo e(__('messages.holiday.doctor_holiday')); ?></a>
        </li>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('doctors*', 'doctor-departments*', 'schedules*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('breaks*') ? 'active' : ''); ?>"
                href="<?php echo e(route('breaks.index')); ?>"><?php echo e(__('messages.lunch_break.lunch_breaks')); ?></a>
        </li>
    <?php endif; ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
            <li
                class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('prescriptions*', 'prescription-medicine-show*') ? 'd-none' : ''); ?>">
                <a class="nav-link p-0 <?php echo e(Request::is('prescriptions*', 'prescription-medicine-show*') ? 'active' : ''); ?>"
                    href="<?php echo e(route('prescriptions.index')); ?>"><?php echo e(__('messages.prescriptions')); ?></a>
            </li>
        <?php endif; ?>
    <?php endif; ?>

<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Accountants', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('accountants*', 'users*', 'lab-technicians*', 'nurses*', 'pharmacists*', 'receptionists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('accountants*') ? 'active' : ''); ?>"
                href="<?php echo e(route('accountants.index')); ?>"><?php echo e(__('messages.accountants')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Nurses', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('nurses*', 'users*', 'accountants*', 'lab-technicians*', 'pharmacists*', 'receptionists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('nurses*') ? 'active' : ''); ?>"
                href="<?php echo e(route('nurses.index')); ?>"><?php echo e(__('messages.nurses')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Receptionists', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('receptionists*', 'users*', 'accountants*', 'lab-technicians*', 'nurses*', 'pharmacists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('receptionists*') ? 'active' : ''); ?>"
                href="<?php echo e(route('receptionists.index')); ?>"><?php echo e(__('messages.receptionists')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Lab Technicians', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('lab-technicians*', 'users*', 'accountants*', 'nurses*', 'pharmacists*', 'receptionists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('lab-technicians*') ? 'active' : ''); ?>"
                href="<?php echo e(route('lab-technicians.index')); ?>"><?php echo e(__('messages.lab_technicians')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pharmacists', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pharmacists*', 'users*', 'accountants*', 'lab-technicians*', 'nurses*', 'receptionists*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('pharmacists*') ? 'active' : ''); ?>"
                href="<?php echo e(route('pharmacists.index')); ?>"><?php echo e(__('messages.pharmacists')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/dashboard*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('patient/dashboard*') ? 'active' : ''); ?>"
            href="<?php echo e(route('patient.dashboard')); ?>"><?php echo e(__('messages.dashboard.dashboard')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-cases*', 'case-handlers*', 'patient-admissions*', 'patient-smart-card-templates*', 'generate-patient-smart-cards*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('patients*') ? 'active' : ''); ?>"
            href="#"><?php echo e(__('messages.patients')); ?></a>
    </li>
<?php endif; ?>
<?php if (\Illuminate\Support\Facades\Blade::check('module', 'Appointments', $modules)): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('appointments*', 'appointment-calendars', 'appointments-transaction*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('appointments*', 'appointment-calendars') && !Request::is('appointments-transaction*') ? 'active' : ''); ?>"
            href="<?php echo e(route('appointments.index')); ?>"><?php echo e(__('messages.appointments')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('appointments*', 'appointment-calendars', 'appointments-transaction*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('appointments-transaction*') ? 'active' : ''); ?>"
            href="<?php echo e(route('appointments-transaction.index')); ?>">
            <?php echo e(__('messages.common.appointment_transaction')); ?>

        </a>
    </li>
<?php endif; ?>


<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Birth Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('birth-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('birth-reports.index')); ?>"><?php echo e(__('messages.birth_reports')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Death Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('death-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('death-reports.index')); ?>"><?php echo e(__('messages.death_reports')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Investigation Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('investigation-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('investigation-reports.index')); ?>"><?php echo e(__('messages.investigation_reports')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Operation Reports', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('birth-reports*', 'death-reports*', 'investigation-reports*', 'operation-reports*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('operation-reports*') ? 'active' : ''); ?>"
                href="<?php echo e(route('operation-reports.index')); ?>"><?php echo e(__('messages.operation_reports')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicine Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is(
                'categories*',
                'brands*',
                'medicines*',
                'medicine-purchase*',
                'medicine-bills*',
                'used-medicine*',
                'used-medicine*',
            )
                ? 'd-none'
                : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('messages.medicine_categories')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicine Brands', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('brands*') ? 'active' : ''); ?>"
                href="<?php echo e(route('brands.index')); ?>"><?php echo e(__('messages.medicine_brands')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('medicines*') ? 'active' : ''); ?>"
                href="<?php echo e(route('medicines.index')); ?>"><?php echo e(__('messages.medicines')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('medicine-purchase*') ? 'active' : ''); ?>"
                href="<?php echo e(route('medicine-purchase.index')); ?>"><?php echo e(__('messages.purchase_medicine.purchase_medicine')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('used-medicine*') ? 'active' : ''); ?>"
                href="<?php echo e(route('used-medicine.index')); ?>"><?php echo e(__('messages.used_medicine.used_medicine')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Medicines', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('categories*', 'brands*', 'medicines*', 'medicine-purchase*', 'used-medicine*', 'medicine-bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('medicine-bills*') ? 'active' : ''); ?>"
                href="<?php echo e(route('medicine-bills.index')); ?>"><?php echo e(__('messages.medicine_bills.medicine_bills')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Radiology Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('radiology-categories*', 'radiology-tests*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('radiology-categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('radiology.category.index')); ?>"><?php echo e(__('messages.radiology_category.radiology_categories')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Radiology Tests', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('radiology-categories*', 'radiology-tests*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('radiology-tests*') ? 'active' : ''); ?>"
                href="<?php echo e(route('radiology.test.index')); ?>"><?php echo e(__('messages.radiology_tests')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('pathology-categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('pathology.category.index')); ?>"><?php echo e(__('messages.pathology_category.pathology_categories')); ?></a>
        </li>
    <?php endif; ?>
    
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('pathology-units*') ? 'active' : ''); ?>"
            href="<?php echo e(route('pathology.unit.index')); ?>"><?php echo e(__('messages.new_change.pathology_unit')); ?></a>
    </li>
    
    
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('pathology-parameters*') ? 'active' : ''); ?>"
            href="<?php echo e(route('pathology.parameter.index')); ?>"><?php echo e(__('messages.new_change.pathology_parameter')); ?></a>
    </li>
    
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist|Pharmacist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Pathology Tests', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('pathology-categories*', 'pathology-tests*', 'pathology-units*', 'pathology-parameters*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('pathology-tests*') ? 'active' : ''); ?>"
                href="<?php echo e(route('pathology.test.index')); ?>"><?php echo e(__('messages.pathology_tests')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Receptionist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Diagnosis Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('diagnosis-categories*', 'patient-diagnosis-test*', 'patient-diagnosis-report*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-diagnosis-report*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient.diagnosis.report')); ?>"><?php echo e(__('messages.ipd_diagnosis')); ?></a>
        </li>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('diagnosis-categories*', 'patient-diagnosis-test*', 'patient-diagnosis-report*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('diagnosis-categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('diagnosis.category.index')); ?>"><?php echo e(__('messages.diagnosis_category.diagnosis_categories')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Receptionist|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Diagnosis Tests', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('diagnosis-categories*', 'patient-diagnosis-test*', 'patient-diagnosis-report*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient-diagnosis-test*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient.diagnosis.test.index')); ?>"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Accountant|Case Manager|Receptionist|Pharmacist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'SMS', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sms*', 'mail*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('sms*') ? 'active' : ''); ?>"
                href="<?php echo e(route('sms.index')); ?>"><?php echo e(__('messages.sms.sms')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Case Manager|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Mail', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sms*', 'mail*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('mail*') ? 'active' : ''); ?>"
                href="<?php echo e(route('mail')); ?>"><?php echo e(__('messages.mail')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Income', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('incomes*', 'expenses*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('incomes*') ? 'active' : ''); ?>"
                href="<?php echo e(route('incomes.index')); ?>"><?php echo e(__('messages.incomes.incomes')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Accountant')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Expense', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('incomes*', 'expenses*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('expenses*') ? 'active' : ''); ?>"
                href="<?php echo e(route('expenses.index')); ?>"><?php echo e(__('messages.expenses')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Items Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('item-categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('item-categories.index')); ?>"><?php echo e(__('messages.items_categories')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Items', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('items*') ? 'active' : ''); ?>"
                href="<?php echo e(route('items.index')); ?>"><?php echo e(__('messages.items')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Item Stocks', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('item-stocks*') ? 'active' : ''); ?>"
                href="<?php echo e(route('item.stock.index')); ?>"><?php echo e(__('messages.items_stocks')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Issued Items', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('item-categories*', 'items*', 'item-stocks*', 'issued-items*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('issued-items*') ? 'active' : ''); ?>"
                href="<?php echo e(route('issued.item.index')); ?>"><?php echo e(__('messages.issued_items')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Charge Categories', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('charge-categories*') ? 'active' : ''); ?>"
                href="<?php echo e(route('charge-categories.index')); ?>"><?php echo e(__('messages.charge_categories')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Charges', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('charges*') ? 'active' : ''); ?>"
                href="<?php echo e(route('charges.index')); ?>"><?php echo e(__('messages.charges')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctor OPD Charges', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('charge-categories*', 'charges*', 'doctor-opd-charges*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('doctor-opd-charges*') ? 'active' : ''); ?>"
                href="<?php echo e(route('doctor-opd-charges.index')); ?>"><?php echo e(__('messages.doctor_opd_charges')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Call Logs', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('call-logs*') ? 'active' : ''); ?>"
                href="<?php echo e(route('call_logs.index')); ?>"><?php echo e(__('messages.call_logs')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Visitors', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('visitor*') ? 'active' : ''); ?>"
                href="<?php echo e(route('visitors.index')); ?>"><?php echo e(__('messages.visitors')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Postal Receive', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('receives*') ? 'active' : ''); ?>"
                href="<?php echo e(route('receives.index')); ?>"><?php echo e(__('messages.postal_receive')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Postal Dispatch', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('call-logs*', 'visitor*', 'receives*', 'dispatches*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('dispatches*') ? 'active' : ''); ?>"
                href="<?php echo e(route('dispatches.index')); ?>"><?php echo e(__('messages.postal_dispatch')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Consultations', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('live-consultation*', 'live-meeting*', 'connect-google-calendar*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('live-consultation*') ? 'active' : ''); ?>"
                href="<?php echo e(route('live.consultation.index')); ?>"><?php echo e(__('messages.live_consultations')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Doctor|Accountant|Case Manager|Receptionist|Pharmacist|Lab Technician|Nurse')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Live Meetings', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('live-consultation*', 'live-meeting*', 'connect-google-calendar*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('live-meeting*') ? 'active' : ''); ?>"
                href="<?php echo e(route('live.meeting.index')); ?>"><?php echo e(__('messages.live_meetings')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('live-consultation*', 'live-meeting*', 'connect-google-calendar*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('connect-google-calendar*') ? 'active' : ''); ?>"
            href="<?php echo e(route('connect-google-calendar.index')); ?>"><?php echo e(__('messages.google_meet.connect_google_meet')); ?></a>
    </li>
<?php endif; ?>

<?php ($sectionName = Request::get('section') === null && !Request::is('currency-settings*', 'hospital-schedules', 'payment-gateway*', 'custom-fields*') ? 'general' : Request::get('section')); ?>

<li
    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('currency-settings*', 'settings*', 'payment-gateway*', 'hospital-schedules', 'custom-fields*') ? '' : 'd-none'); ?>">
    <a class="nav-link p-0 <?php echo e(isset($sectionName) && $sectionName == 'general' ? 'active' : ''); ?>"
        href="<?php echo e(route('settings.edit', ['section' => 'general'])); ?>"><?php echo e(__('messages.general')); ?></a>
</li>

<li
    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('currency-settings*', 'settings*', 'payment-gateway*', 'hospital-schedules', 'custom-fields*') ? '' : 'd-none'); ?>">
    <a class="nav-link p-0 <?php echo e(Request::is('hospital-schedules*') ? 'active' : ''); ?>"
        href="<?php echo e(route('hospital-schedules.index')); ?>"><?php echo e(__('messages.hospital_schedules')); ?></a>
</li>

<li
    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('currency-settings*', 'settings*', 'payment-gateway*', 'hospital-schedules', 'custom-fields*') ? '' : 'd-none'); ?>">
    <a class="nav-link p-0 <?php echo e(isset($sectionName) && $sectionName == 'sidebar-setting' ? 'active' : ''); ?>"
        href="<?php echo e(route('settings.edit', ['section' => 'sidebar-setting'])); ?>"><?php echo e(__('messages.sidebar_setting')); ?></a>
</li>

<li
    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('currency-settings*', 'settings*', 'payment-gateway*', 'hospital-schedules', 'custom-fields*') ? '' : 'd-none'); ?>">
    <a class="nav-link p-0 <?php echo e(Request::is('payment-gateway*') ? 'active' : ''); ?>"
        href="<?php echo e(route('payment-gateway.index')); ?>"><?php echo e(__('messages.setting.payment_gateway')); ?></a>
</li>

<li
    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('currency-settings*', 'settings*', 'payment-gateway*', 'hospital-schedules', 'custom-fields*') ? '' : 'd-none'); ?>">
    <a class="nav-link p-0 <?php echo e(Request::is('currency-settings*') ? 'active' : ''); ?>"
        href="<?php echo e(route('currency-settings.index')); ?>"><?php echo e(__('messages.currency.currencies')); ?></a>
</li>

<li
    class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(Request::is('currency-settings*', 'settings*', 'payment-gateway*', 'hospital-schedules', 'custom-fields*') ? '' : 'd-none'); ?>">
    <a class="nav-link p-0 <?php echo e(Request::is('custom-fields*') ? 'active' : ''); ?>"
        href="<?php echo e(route('custom-fields.index')); ?>"><?php echo e(__('messages.custom_field.custom_field')); ?></a>
</li>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('front-settings*') ? 'active' : ''); ?>"
            href="<?php echo e(route('front.settings.index')); ?>"><?php echo e(__('messages.cms')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('front-cms-services*') ? 'active' : ''); ?>"
            href="<?php echo e(route('front.cms.services.index')); ?>"><?php echo e(__('messages.front_cms_services')); ?></a>
    </li>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Notice Boards', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('notice-boards*') ? 'active' : ''); ?>"
                href="<?php echo e(url('notice-boards')); ?>"><?php echo e(__('messages.notice_boards')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>
<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Testimonial', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('front-settings*', 'notice-boards*', 'testimonials*', 'front-cms-services*', 'terms-and-conditions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('testimonials*') ? 'active' : ''); ?>"
                href="<?php echo e(route('testimonials.index')); ?>"><?php echo e(__('messages.testimonials')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin|Receptionist')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Enquires', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('enquiries*', 'enquiry*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('enquiries*') || Request::is('enquiry*') ? 'active' : ''); ?>"
                href="<?php echo e(route('enquiries')); ?>"><?php echo e(__('messages.enquiries')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor')): ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Doctors', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/doctor*', 'doctors*', 'holidays*', 'breaks*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/doctor*', 'doctors*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/doctor')); ?>"><?php echo e(__('messages.doctors')); ?></a>
        </li>
    <?php endif; ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Schedules', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('schedules*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('schedules*') ? 'active' : ''); ?>"
                href="<?php echo e(route('schedules.edit', getDoctorSchedule())); ?>"><?php echo e(__('messages.schedules')); ?></a>
        </li>
    <?php endif; ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('prescriptions*', 'prescription-medicine-show*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('prescriptions*', 'prescription-medicine-show*') ? 'active' : ''); ?>"
                href="<?php echo e(route('prescriptions.index')); ?>"><?php echo e(__('messages.prescriptions')); ?></a>
        </li>
    <?php endif; ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patients*', 'patient-admissions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patients*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patients.index')); ?>"><?php echo e(__('messages.patients')); ?></a>
        </li>
    <?php endif; ?>

<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor|Accountant|Case Manager|Receptionist|Pharmacist|Lab Technician|Nurse|Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Notice Boards', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/notice-board*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/notice-board*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/notice-board')); ?>"><?php echo e(__('messages.notice_boards')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Accountant|Case Manager|Receptionist|Pharmacist|Nurse')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/payroll*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/payroll*') ? 'active' : ''); ?>"
                href="<?php echo e(route('payroll')); ?>"><?php echo e(__('messages.my_payrolls')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Doctor|Lab Technician')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'My Payrolls', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/payroll*', 'employee-payrolls*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/payroll*', 'employee-payrolls*') ? 'active' : ''); ?>"
                href="<?php echo e(route('payroll')); ?>"><?php echo e(__('messages.my_payrolls')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Cases', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-cases*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient/my-cases*') ? 'active' : ''); ?>"
                href="<?php echo e(url('patient/my-cases')); ?>"><?php echo e(__('messages.patients_cases')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Patient Admissions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/patient-admissions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/patient-admissions*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/patient-admissions')); ?>"><?php echo e(__('messages.patient_admissions')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Prescriptions', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-prescriptions*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient/my-prescriptions*') ? 'active' : ''); ?>"
                href="<?php echo e(route('prescriptions.list')); ?>"><?php echo e(__('messages.prescriptions')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Vaccinated Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-vaccinated*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient/my-vaccinated*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient.vaccinated')); ?>"><?php echo e(__('messages.vaccinated_patients')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'IPD Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-ipds*', 'opds*', 'patient/my-opds*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('patient/my-ipds*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient.ipd')); ?>"><?php echo e(__('messages.ipd_patients')); ?></a>
        </li>
    <?php endif; ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'OPD Patients', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('patient/my-ipds*', 'opds*', 'patient/my-opds*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('opds*', 'patient/my-opds*') ? 'active' : ''); ?>"
                href="<?php echo e(route('patient.opd')); ?>"><?php echo e(__('messages.opd_patients')); ?></a>
        </li>
    <?php endif; ?>

<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Diagnosis Tests', $modules)): ?>
        <li
            class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/patient-diagnosis-test*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/patient-diagnosis-test*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/patient-diagnosis-test')); ?>"><?php echo e(__('messages.patient_diagnosis_test.diagnosis_test')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Invoices', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/invoices*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/invoices*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/invoices')); ?>"><?php echo e(__('messages.invoices')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Patient')): ?>
    <?php if (\Illuminate\Support\Facades\Blade::check('module', 'Bills', $modules)): ?>
        <li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('employee/bills*') ? 'd-none' : ''); ?>">
            <a class="nav-link p-0 <?php echo e(Request::is('employee/bills*') ? 'active' : ''); ?>"
                href="<?php echo e(url('employee/bills')); ?>"><?php echo e(__('messages.bills')); ?></a>
        </li>
    <?php endif; ?>
<?php endif; ?>


<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Super Admin')): ?>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/dashboard*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/dashboard*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.dashboard')); ?>"><?php echo e(__('messages.dashboard.dashboard')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/hospital-type*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/hospital-type*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.hospitals.type.index')); ?>"><?php echo e(__('messages.hospitals_type')); ?></a>
    </li>

    
    
    

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/admins*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/admins*') ? 'active' : ''); ?>"
            href="<?php echo e(route('admins.index')); ?>"><?php echo e(__('messages.admins')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/hospitals*', 'super-admin/hospital/*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/hospitals*', 'super-admin/hospital/*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.hospitals.index')); ?>"><?php echo e(__('messages.hospitals')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/subscription-plans*', 'super-admin/transactions*', 'super-admin/subscriptions-hospitals*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/subscription-plans*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.subscription.plans.index')); ?>"><?php echo e(__('messages.subscription_plans.subscription_plans')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/subscription-plans*', 'super-admin/transactions*', 'super-admin/subscriptions-hospitals*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/transactions*') ? 'active' : ''); ?>"
            href="<?php echo e(route('subscriptions.transactions.index')); ?>"><?php echo e(__('messages.subscription_plans.transactions')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/subscription-plans*', 'super-admin/transactions*', 'super-admin/subscriptions-hospitals*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/subscriptions-hospitals*') ? 'active' : ''); ?>"
            href="<?php echo e(route('subscriptions.list.index')); ?>"><?php echo e(__('messages.subscription.subscriptions')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/section-one*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.section.one')); ?>"><?php echo e(__('messages.landing_cms.section_one')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/section-two*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.section.two')); ?>"><?php echo e(__('messages.landing_cms.section_two')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/section-three*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.section.three')); ?>"><?php echo e(__('messages.landing_cms.section_three')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/section-four*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.section.four')); ?>"><?php echo e(__('messages.landing_cms.section_four')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/section-five*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.section.five')); ?>"><?php echo e(__('messages.landing_cms.section_five')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/about-us*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.about.us')); ?>"><?php echo e(__('messages.landing_cms.about_us')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/service-slider*') ? 'active' : ''); ?>"
            href="<?php echo e(route('service-slider.index')); ?>"><?php echo e(__('messages.web_home.services')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/faqs*') ? 'active' : ''); ?>"
            href="<?php echo e(route('faqs.index')); ?>"><?php echo e(__('messages.faq')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/section-one*', 'super-admin/section-two*', 'super-admin/section-three*', 'super-admin/section-four*', 'super-admin/section-five*', 'super-admin/about-us*', 'super-admin/service-slider*', 'super-admin/faqs*', 'super-admin/admin-testimonial*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/admin-testimonial') ? 'active' : ''); ?>"
            href="<?php echo e(route('admin-testimonial.index')); ?>"><?php echo e(__('messages.testimonials')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/general-settings*', 'super-admin/footer-settings*', 'super-admin/super-admin-currency-settings*', 'super-admin/payment-gateway*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/general-settings*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.settings.edit')); ?>"><?php echo e(__('messages.settings')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/general-settings*', 'super-admin/footer-settings*', 'super-admin/super-admin-currency-settings*', 'super-admin/payment-gateway') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/footer-settings*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.footer.settings.edit')); ?>"><?php echo e(__('messages.footer_setting.footer_settings')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/general-settings*', 'super-admin/super-admin-currency-settings*', 'super-admin/footer-settings*', 'super-admin/payment-gateway*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/super-admin-currency-settings*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super-admin-currency-settings.index')); ?>"><?php echo e(__('messages.currency.currencies')); ?></a>
    </li>
    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/general-settings*', 'super-admin/super-admin-currency-settings*', 'super-admin/footer-settings*', 'super-admin/payment-gateway*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/payment-gateway') ? 'active' : ''); ?>"
            href="<?php echo e(route('super-admin-payment-gateway.edit')); ?>"><?php echo e(__('messages.setting.payment_gateway')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/subscriber*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/subscriber*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.subscribe.index')); ?>"><?php echo e(__('messages.subscribe.subscribers')); ?></a>
    </li>

    <li
        class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('super-admin/enquiries*') ? 'd-none' : ''); ?>">
        <a class="nav-link p-0 <?php echo e(Request::is('super-admin/enquiries*') ? 'active' : ''); ?>"
            href="<?php echo e(route('super.admin.enquiry.index')); ?>"><?php echo e(__('messages.enquiries')); ?></a>
    </li>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/layouts/sub_menu.blade.php ENDPATH**/ ?>