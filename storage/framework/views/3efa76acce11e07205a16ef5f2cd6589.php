<div class="table-responsive">
    <table class="table table-striped mt-lg-4">
        <tbody>
        <?php $__currentLoopData = $weekDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day => $shortWeekDay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($isValid = $hospitalSchedules->where('day_of_week',$day)->count() != 0); ?>
            <tr>
                <td style="width: 1%;" class="py-1">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="chkShortWeekDay_<?php echo e($shortWeekDay); ?>"
                               value="<?php echo e($day); ?>" name="checked_week_days[]" <?php if($isValid): ?> checked="checked" <?php endif; ?>>
                    </div>
                </td>
                <td style="width: 1%;" class="py-1">
                    <label class="form-check-label" for="chkShortWeekDay_<?php echo e($shortWeekDay); ?>">
                        <span class="fs-5 fw-bold d-md-block d-none"><?php echo e(__('messages.hospital_schedule_weekday.'.$shortWeekDay)); ?></span>
                    </label>
                </td>
                <td style="width: 25%;" class="py-1">
                    <div class="session-times">
                        <?php if($hospitalSchedule = $hospitalSchedules->where('day_of_week',$day)->first()): ?>
                            <?php echo $__env->make('hospital_schedule.slot',['slot' => $slots,'day' => $day,'hospitalSchedule' => $hospitalSchedule], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <?php echo $__env->make('hospital_schedule.slot',['slot' => $slots,'day' => $day], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-end">
    <?php echo e(Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary', 'id' => 'btnHospitalScheduleSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/hospital_schedule/fields.blade.php ENDPATH**/ ?>