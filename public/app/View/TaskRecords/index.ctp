<div class="taskRecords index">
	<h2><?php echo __('Task Records'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('clip_no'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_length'); ?></th>
			<th><?php echo $this->Paginator->sort('clip_in'); ?></th>
			<th><?php echo $this->Paginator->sort('clip_out'); ?></th>
			<th><?php echo $this->Paginator->sort('overtime'); ?></th>
			<th><?php echo $this->Paginator->sort('started'); ?></th>
			<th><?php echo $this->Paginator->sort('completed'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($taskRecords as $taskRecord): ?>
	<tr>
		<td><?php echo h($taskRecord['TaskRecord']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($taskRecord['Order']['id'], array('controller' => 'orders', 'action' => 'view', $taskRecord['Order']['id'])); ?>
		</td>
		<td><?php echo h($taskRecord['TaskRecord']['clip_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($taskRecord['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $taskRecord['Employee']['id'])); ?>
		</td>
		<td><?php echo h($taskRecord['TaskRecord']['edit_length']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['clip_in']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['clip_out']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['overtime']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['started']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['completed']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['created']); ?>&nbsp;</td>
		<td><?php echo h($taskRecord['TaskRecord']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taskRecord['TaskRecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taskRecord['TaskRecord']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taskRecord['TaskRecord']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $taskRecord['TaskRecord']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Task Record'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
