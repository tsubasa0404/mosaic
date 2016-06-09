<div class="todoLists view">
<h2><?php echo __('Todo List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($todoList['TodoList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($todoList['TodoList']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($todoList['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $todoList['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($todoList['PriorityType']['id'], array('controller' => 'priority_types', 'action' => 'view', $todoList['PriorityType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($todoList['StatusType']['id'], array('controller' => 'status_types', 'action' => 'view', $todoList['StatusType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin Check'); ?></dt>
		<dd>
			<?php echo h($todoList['TodoList']['admin_check']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deadline'); ?></dt>
		<dd>
			<?php echo h($todoList['TodoList']['deadline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($todoList['TodoList']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($todoList['TodoList']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Todo List'), array('action' => 'edit', $todoList['TodoList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Todo List'), array('action' => 'delete', $todoList['TodoList']['id']), array(), __('Are you sure you want to delete # %s?', $todoList['TodoList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Todo Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo List'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priority Types'), array('controller' => 'priority_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority Type'), array('controller' => 'priority_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'status_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Type'), array('controller' => 'status_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
