<div class="todoLists form">
<?php echo $this->Form->create('TodoList'); ?>
	<fieldset>
		<legend><?php echo __('Add Todo List'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('priority_type_id');
		echo $this->Form->input('status_type_id');
		echo $this->Form->input('admin_check');
		echo $this->Form->input('deadline');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Todo Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priority Types'), array('controller' => 'priority_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority Type'), array('controller' => 'priority_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'status_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Type'), array('controller' => 'status_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
