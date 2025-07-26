<div id="edit_currency_modal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2><?php echo e(__('messages.currency.edit_currency')); ?></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <?php echo e(Form::open(['id'=>'editCurrencyForm'])); ?>

            <div class="modal-body">
                <?php echo e(Form::hidden('category_id',null,['id'=>'editCurrencyId'])); ?>

                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        <?php echo e(Form::label('name',__('messages.currency.currency_name'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('currency_name', '', ['id'=>'editCurrencyName','class' => 'form-control','required', 'placeholder' => __('messages.currency.currency_name')])); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        <?php echo e(Form::label('name',__('messages.currency.currency_icon'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('currency_icon', '', ['id'=>'editCurrencyIcon','class' => 'form-control','required', 'placeholder' => __('messages.currency.currency_icon')])); ?>

                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        <?php echo e(Form::label('name',__('messages.currency.currency_code'), ['class' => 'form-label'])); ?>

                        <span class="required"></span>
                        <?php echo e(Form::text('currency_code', '', ['id'=>'editCurrencyCode','class' => 'form-control','required', 'placeholder' => __('messages.currency.currency_code')])); ?>

                    </div>
                </div>
                <div class="text-muted mb-3">
                    <?php echo e(__('messages.document.notes')); ?>

                    : <?php echo e(__('messages.currency.add_currency_code_as_per_three_letter_iso_code')); ?>.<a
                            href="//stripe.com/docs/currencies"
                            target="_blank"><?php echo e(__('messages.currency.you_can_find_out_here')); ?>.</a>
                </div>
                <div class="modal-footer p-0">
                    <?php echo e(Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary m-0','id'=>'editCurrencySaveBtn','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."])); ?>

                    <button type="button" aria-label="Close" class="btn btn-secondary"
                            data-bs-dismiss="modal"><?php echo __('messages.common.cancel'); ?>

                    </button>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/sadhin/Documents/hms-hosptalcare/resources/views/currency_settings/edit-modal.blade.php ENDPATH**/ ?>