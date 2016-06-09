<div class="employees index">
	<h2><?php echo __('Employees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_no'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('career_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prof_img'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('terminated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('memo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['family_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['employee_no']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['sex']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['tel']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['address']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['occupation']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['Career']['id'], array('controller' => 'careers', 'action' => 'view', $employee['Career']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['EmployeeGroup']['id'], array('controller' => 'employee_groups', 'action' => 'view', $employee['EmployeeGroup']['id'])); ?>
		</td>
		<td><?php echo h($employee['Employee']['prof_img']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['terminated_date']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['memo']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['created']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $employee['Employee']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Groups'), array('controller' => 'employee_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Group'), array('controller' => 'employee_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Todo Lists'), array('controller' => 'todo_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo List'), array('controller' => 'todo_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
