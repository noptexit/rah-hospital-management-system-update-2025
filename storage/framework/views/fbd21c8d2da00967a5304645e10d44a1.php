































<div class="ms-0 ms-md-2" wire:ignore>
    <div class="dropdown d-flex align-items-center me-4 me-md-5">
        <button
                class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0"
                type="button"  data-bs-auto-close="outside"
                data-bs-toggle="dropdown" aria-expanded="false"
                id="userFilterButton">
            <i class='fas fa-filter'></i>
        </button>
        <div class="dropdown-menu py-0" aria-labelledby="userFilterButton">
            <div class="text-start border-bottom py-4 px-7">
                <h3 class="text-gray-900 mb-0"><?php echo e(__('messages.common.filter_options')); ?></h3>
            </div>
            <div class="p-5">
                <div class="mb-5">
                    <label for="userStatusArr" class="form-label"><?php echo e(__('messages.common.status').':'); ?></label>

                    <select class="form-select status-selector" id="userStatusArr" data-control="select2" name="status">
                        <option value="0"><?php echo e(__('messages.filter.all')); ?></option>
                        <option value="1"><?php echo e(__('messages.filter.active')); ?></option>
                        <option value="2"><?php echo e(__('messages.filter.deactive')); ?></option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="userRoleArr" class="form-label"><?php echo e(__('messages.employee_payroll.role').':'); ?></label>   <br>

                    <select class="form-select status-selector" id="userRoleArr" data-control="select2" name="department_id">
                        <option value="0"><?php echo e(__('messages.filter.all')); ?></option>
                        <option value="1"><?php echo e(__('messages.role.admin')); ?></option>
                        <option value="2"><?php echo e(__('messages.role.doctor')); ?></option>
                        <option value="3"><?php echo e(__('messages.role.patient')); ?></option>
                        <option value="4"><?php echo e(__('messages.role.nurse')); ?></option>
                        <option value="5"><?php echo e(__('messages.role.receptionist')); ?></option>
                        <option value="6"><?php echo e(__('messages.role.pharmacist')); ?></option>
                        <option value="7"><?php echo e(__('messages.role.accountant')); ?></option>
                        <option value="8"><?php echo e(__('messages.role.case_manager')); ?></option>
                        <option value="9"><?php echo e(__('messages.role.lab_technician')); ?></option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary" id="resetUserFilter">
                        <?php echo e(__('messages.common.reset')); ?>

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/users/filter-button.blade.php ENDPATH**/ ?>