<div class="timeCards index">
	<h2><?php echo __('Time Cards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_cut_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('in_time'); ?></th>
			<th><?php echo $this->Paginator->sort('out_time'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($timeCards as $timeCard): ?>
	<tr>
		<td><?php echo h($timeCard['TimeCard']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeCard['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $timeCard['Employee']['id'])); ?>
		</td>
		<td><?php echo h($timeCard['TimeCard']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeCard['PayCutType']['id'], array('controller' => 'pay_cut_types', 'action' => 'view', $timeCard['PayCutType']['id'])); ?>
		</td>
		<td><?php echo h($timeCard['TimeCard']['in_time']); ?>&nbsp;</td>
		<td><?php echo h($timeCard['TimeCard']['out_time']); ?>&nbsp;</td>
		<td><?php echo h($timeCard['TimeCard']['note']); ?>&nbsp;</td>
		<td><?php echo h($timeCard['TimeCard']['created']); ?>&nbsp;</td>
		<td><?php echo h($timeCard['TimeCard']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timeCard['TimeCard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timeCard['TimeCard']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timeCard['TimeCard']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $timeCard['TimeCard']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Time Card'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Cut Types'), array('controller' => 'pay_cut_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Cut Type'), array('controller' => 'pay_cut_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
