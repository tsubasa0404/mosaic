<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>

		<div class="">
			<?php echo $this->Form->input('id');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('control_no');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('file_name');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('client_id');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('delivery_date');?>
		</div>
		<div class="">
			<label for=""><?= __('Delivery Time') ?></label>
			<?php echo $this->Form->time('delivery_time');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('mosaic_type_id');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('mosaic_size_id');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('price');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('length');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('target_time');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('cut_count');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('multiplay');?>
		</div>
		<div class="">
			<?php echo $this->Form->input('note', array(
			'rows' => 3,
			'style' => 'vertical-align:top'
			));?>
		</div>
		<div class=""><?php echo $this->Form->input('status_type_id'); ?></div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
</div>