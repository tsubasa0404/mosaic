<div class="salaries form">
<?php echo $this->Form->create('Salary'); ?>
	<fieldset>
		<legend><?php echo __('Add Salary'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('month');
		echo $this->Form->input('basic');
		echo $this->Form->input('deposit');
		echo $this->Form->input('absence');
		echo $this->Form->input('late');
		echo $this->Form->input('early');
		echo $this->Form->input('overtime');
		echo $this->Form->input('off_work');
		echo $this->Form->input('bonus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Salaries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
