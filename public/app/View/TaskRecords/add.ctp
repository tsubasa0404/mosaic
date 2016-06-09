<div class="taskRecords form">
<?php echo $this->Form->create('TaskRecord'); ?>
	<fieldset>
		<legend><?php echo __('Add Task Record'); ?></legend>
	<?php
		echo $this->Form->input('order_id');
		echo $this->Form->input('clip_no');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('edit_length');
		echo $this->Form->input('clip_in');
		echo $this->Form->input('clip_out');
		echo $this->Form->input('overtime');
		echo $this->Form->input('started');
		echo $this->Form->input('completed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Task Records'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
