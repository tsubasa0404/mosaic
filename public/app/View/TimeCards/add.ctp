<div class="timeCards form">
<?php echo $this->Form->create('TimeCard'); ?>
	<fieldset>
		<legend><?php echo __('Add Time Card'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('date');
		echo $this->Form->input('pay_cut_type_id');
		echo $this->Form->input('in_time');
		echo $this->Form->input('out_time');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Time Cards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Cut Types'), array('controller' => 'pay_cut_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Cut Type'), array('controller' => 'pay_cut_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
