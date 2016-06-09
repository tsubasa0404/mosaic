<div class="timeCards form">
<?php echo $this->Form->create('TimeCard'); ?>
	<fieldset>
		<legend><?php echo __('Edit Time Card'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('date');
		echo $this->Form->input('pay_cut_type_id');
		echo $this->Form->input('in_time');
		echo $this->Form->input('out_time');
		echo $this->Form->input('note',array('style'=> 'width:70%'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
</div>
</div>