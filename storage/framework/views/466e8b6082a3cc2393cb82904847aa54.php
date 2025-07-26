<?php
    /** @var \App\Models\HospitalSchedule $hospitalSchedule */
?>
<div class="align-items-center justify-content-between mt-md-0 mt-10">
    <div class="d-flex align-items-center mb-3 add-slot">
        <div class="d-inline-block">
            <?php echo e(Form::select('startTimes['.$day.']', $slots, isset($hospitalSchedule) ? $hospitalSchedule->start_time :  $slots[array_key_first($slots)] ,['class' => 'form-control form-select', 'data-control'=>'select2'])); ?>

        </div>
        <span class="px-3">To</span>
        <div class="d-inline-block">
            <?php echo e(Form::select('endTimes['.$day.']', $slots, isset($hospitalSchedule) ? $hospitalSchedule->end_time :  $slots[array_key_last($slots)],['class' => 'form-control form-select', 'data-control'=>'select2'])); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/hospital_schedule/slot.blade.php ENDPATH**/ ?>