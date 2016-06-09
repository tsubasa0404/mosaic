<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('family_name');
		echo $this->Form->input('employee_no');
		echo $this->Form->input('sex');
		echo $this->Form->input('birthday');
		echo $this->Form->input('tel');
		echo $this->Form->input('address');
		echo $this->Form->input('occupation');
		echo $this->Form->input('career_id');
		echo $this->Form->input('employee_group_id');
		echo $this->Form->input('prof_img');
		echo $this->Form->input('start_date');
		echo $this->Form->input('terminated_date');
		echo $this->Form->input('memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Groups'), array('controller' => 'employee_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Group'), array('controller' => 'employee_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Todo Lists'), array('controller' => 'todo_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo List'), array('controller' => 'todo_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
