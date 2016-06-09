<div class="statusTypes form">
<?php echo $this->Form->create('StatusType'); ?>
	<fieldset>
		<legend><?php echo __('Add Status Type'); ?></legend>
	<?php
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Status Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Todo Lists'), array('controller' => 'todo_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo List'), array('controller' => 'todo_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
