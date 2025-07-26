<div class="d-flex align-items-center py-1">
    <!--[if BLOCK]><![endif]--><?php if(Auth::user()->hasRole('Lab Technician')): ?>
        <div class="dropdown">
            <a href="#" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton"
               data-bs-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><?php echo e(__('messages.common.actions')); ?>

            </a>
            <ul class="dropdown-menu action-dropdown" aria-labelledby="dropdownMenuButton">
                <li>
                    <a href="<?php echo e(route('radiology.test.create')); ?>" class="dropdown-item  px-5">
                        <?php echo e(__('messages.radiology_test.new_radiology_test')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('radiology.tests.excel')); ?>" class="dropdown-item  px-5" data-turbo="false">
                        <?php echo e(__('messages.common.export_to_excel')); ?>

                    </a>
                </li>
            </ul>
        </div>
    <?php else: ?>
        <a href="<?php echo e(route('radiology.test.create')); ?>" class="btn btn-primary">
            <?php echo e(__('messages.radiology_test.new_radiology_test')); ?>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/radiology_tests/add-button.blade.php ENDPATH**/ ?>