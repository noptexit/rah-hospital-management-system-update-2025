<div class="listing-skeleton">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <div class="search-box pulsate rounded-1"> </div>
                <div class="d-flex">
                    <?php if(Request::is('appointments')): ?>
                        <div class="filter-box pulsate rounded-1"> </div>
                        <div class="filter-box pulsate rounded-1"> </div>
                        <div class="date-box pulsate rounded-1"> </div>
                        <div class="add-button-box pulsate rounded-1"> </div>
                    <?php endif; ?>
                    <?php if(Request::is('live-consultation')): ?>
                        <div class="filter-box pulsate rounded-1"> </div>
                        <div class="add-button-box pulsate rounded-1"> </div>
                        <div class="date-box pulsate rounded-1"> </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="card-content my-5">
            <div class="table pulsate rounded-1"> </div>
            <div class="row">
                <?php for($i = 1; $i <= 28; $i++): ?>
                    <div class="col-3 mb-5">
                        <div class="column-box pulsate rounded-1"> </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/livewire/skeleton.blade.php ENDPATH**/ ?>