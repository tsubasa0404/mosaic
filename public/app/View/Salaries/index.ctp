<div class="salaries index">
	<h2><?php echo __('Salaries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('month'); ?></th>
			<th><?php echo $this->Paginator->sort('basic'); ?></th>
			<th><?php echo $this->Paginator->sort('deposit'); ?></th>
			<th><?php echo $this->Paginator->sort('absence'); ?></th>
			<th><?php echo $this->Paginator->sort('late'); ?></th>
			<th><?php echo $this->Paginator->sort('early'); ?></th>
			<th><?php echo $this->Paginator->sort('overtime'); ?></th>
			<th><?php echo $this->Paginator->sort('off_work'); ?></th>
			<th><?php echo $this->Paginator->sort('bonus'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($salaries as $salary): ?>
	<tr>
		<td><?php echo h($salary['Salary']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salary['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $salary['Employee']['id'])); ?>
		</td>
		<td><?php echo h($salary['Salary']['month']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['basic']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['deposit']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['absence']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['late']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['early']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['overtime']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['off_work']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['bonus']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['created']); ?>&nbsp;</td>
		<td><?php echo h($salary['Salary']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salary['Salary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salary['Salary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salary['Salary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $salary['Salary']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Salary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
