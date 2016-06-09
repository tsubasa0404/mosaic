<div class="todoLists index">
	<h2><?php echo __('Todo Lists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('priority_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_check'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($todoLists as $todoList): ?>
	<tr>
		<td><?php echo h($todoList['TodoList']['id']); ?>&nbsp;</td>
		<td><?php echo h($todoList['TodoList']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($todoList['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $todoList['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($todoList['PriorityType']['id'], array('controller' => 'priority_types', 'action' => 'view', $todoList['PriorityType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($todoList['StatusType']['id'], array('controller' => 'status_types', 'action' => 'view', $todoList['StatusType']['id'])); ?>
		</td>
		<td><?php echo h($todoList['TodoList']['admin_check']); ?>&nbsp;</td>
		<td><?php echo h($todoList['TodoList']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($todoList['TodoList']['created']); ?>&nbsp;</td>
		<td><?php echo h($todoList['TodoList']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $todoList['TodoList']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $todoList['TodoList']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $todoList['TodoList']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $todoList['TodoList']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Todo List'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priority Types'), array('controller' => 'priority_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority Type'), array('controller' => 'priority_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'status_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Type'), array('controller' => 'status_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
