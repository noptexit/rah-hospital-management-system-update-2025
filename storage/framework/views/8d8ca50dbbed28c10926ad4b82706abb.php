<?php
    $checkDoctorId = App\Models\Doctor::where('user_id', getLoggedInUserId())->first();
    if(!empty($checkDoctorId)){
        $checkDoctorSchedule = App\Models\Schedule::where('doctor_id', $checkDoctorId->id)->get();
    }
?>
<div class="dropdown">
    <!--[if BLOCK]><![endif]--><?php if(Auth::user()->hasRole('Doctor')): ?>
        <a href="#" class="btn btn-primary" id="dropdownMenuButton" data-bs-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false"><?php echo e(__('messages.common.actions')); ?>

            <i class="fa fa-chevron-down"></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <!--[if BLOCK]><![endif]--><?php if(count($checkDoctorSchedule) != 1): ?>
                <li>
                    <a href="<?php echo e(route('schedules.create')); ?>"
                       class="dropdown-item  px-5"><?php echo e(__('messages.schedule.new')); ?></a>
                </li>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <li>
                <a href="<?php echo e(route('schedules.excel')); ?>"
                   class="dropdown-item  px-5" data-turbo="false"><?php echo e(__('messages.common.export_to_excel')); ?></a>
            </li>
        </ul>
    <?php else: ?>
        <a href="<?php echo e(route('schedules.create')); ?>"
           class="btn btn-primary"><?php echo e(__('messages.schedule.new')); ?></a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/schedules/add-button.blade.php ENDPATH**/ ?>