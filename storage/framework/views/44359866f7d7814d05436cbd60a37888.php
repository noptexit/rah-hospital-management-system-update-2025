<div>
    <div class="our-hospitals">
        <div class="row">
            
            <div class="col-xl-3 col-md-3 col-12 bg-light me-3 mt-3">
                <div class="p-3 mt-3">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-secondary fs-c-5"><?php echo e(__('messages.lunch_break.filters') . ':'); ?></h5>
                        <div class="pb-3">
                            <a class="btn btn-outline-primary reset-filter" data-turbo="false"  wire:click="clearFilter">
                                <?php echo e(__('messages.lunch_break.reset_filter')); ?>

                            </a>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="form-control border radius-10" type="text"
                            placeholder="<?php echo e(__('auth.hospital_name')); ?>" wire:model.live="search" id="example-search-input">
                    </div>
                    <h5 class="text-secondary fs-c-5 mt-4"><?php echo e(__('messages.hospitals_type') . ':'); ?></h5>
                    <div class="" wire:ignore>
                        <select class='text-gray bg-white selectized' id="hospitalType" wire:model="type">
                            <option value="0" class="text-gray"><?php echo e(__('messages.common.select_type')); ?></option>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data['hospital_types']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hospitalType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($hospitalType->id); ?>"><?php echo e($hospitalType->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </select>
                    </div>
                </div>
            </div>
            <!--[if BLOCK]><![endif]--><?php if($data['hospitals']->count() == 0): ?>
                <div class="col-8 p-5 rounded-20">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 text-center shadow rounded-20">
                            <h4 class="p-5">
                                <?php echo e(__('messages.common.no_matching_records_found')); ?>

                            </h4>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data['hospitals']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if($key == 0): ?>
                        
                            
                        
                    <?php else: ?>
                        <div class="col-xl-3 col-md-3 col-12 bg-white me-3">
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <div class="col-xl-8 col-md-8 col-12 shadow rounded-20 <?php echo e($key == 0 ? '' : 'mt-3'); ?>">
                        <div class="row  p-4">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12 pe-4 image image-medium pe-4">
                                <img class="rounded" src="<?php echo e(getAvatarUrl()."?name=$hospital->full_name&size=100&color=fff&background=".getRandomColor($hospital->id)); ?>" alt="image" loading="lazy"/>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-10 col-12">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-xl-8 col-12">
                                        <p>
                                            <h4><a href="#"
                                                class="text-secondary text-decoration-none fs-5"><?php echo e($hospital->hospital_name); ?></a>
                                            </h4>
                                        </p>
                                        <p>
                                            <span class="card-text fs-6 text-secondary">
                                                <i class="fa-solid fa-envelope me-1"></i>
                                                <a href="mailto:<?php echo e($hospital->email); ?>"
                                                    class="text-secondary text-decoration-none fs-5">
                                                    <?php echo e($hospital->email); ?>

                                                </a>
                                            </span>
                                        </p>
                                        <p>
                                            <span class="card-text fs-6 text-secondary">
                                                <i class="fa-solid fa-phone text-secondary me-3"></i>
                                                <a href="tel:<?php echo e($hospital->phone); ?>"
                                                    class="text-decoration-none text-secondary">
                                                    <?php echo e($hospital->phone); ?>

                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-xl-4 col-12 image image-hospital">
                                        <div class="row d-flex justify-content-center mt-2">
                                            <div class="col-12 mb-6 pb-3">
                                                <a class="btn btn-outline-primary w-100" data-turbo="false"
                                                    target="_blank"
                                                    href="<?php echo e(route('front', $hospital->username)); ?>"><i class="fa-solid fa-location-dot me-2"></i><?php echo e(__('messages.lunch_break.get_direction')); ?></a>
                                            </div>
                                            <div class="col-12 mb-6 mb-md-0 pb-3">
                                                <a class="btn btn-outline-primary w-100" data-turbo="false"
                                                    target="_blank"
                                                    href="<?php echo e(route('appointment', $hospital->username)); ?>"><i class="fas fa-calendar-check me-2"></i><?php echo e(__('messages.delete.appointment')); ?></a>
                                            </div>
                                            <div class="col-12">
                                                <a class="btn btn-outline-primary w-100" data-turbo="false"
                                                    target="_blank"
                                                    href="<?php echo e(route('contact', $hospital->username)); ?>"><i class="fas fa-hand-pointer me-2"></i><?php echo e(__('messages.landing.get_in_touch')); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
    <div class="pagination-section pt-5 d-flex justify-content-center">
        <?php echo e($data['hospitals']->links()); ?>

    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/livewire/hospitals-listing.blade.php ENDPATH**/ ?>