<div class="careers index">
	<h2><?php echo __('Careers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('career'); ?></th>
			<th><?php echo $this->Paginator->sort('basic_salary'); ?></th>
			<th><?php echo $this->Paginator->sort('hourly_wage'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($careers as $career): ?>
	<tr>
		<td><?php echo h($career['Career']['id']); ?>&nbsp;</td>
		<td><?php echo h($career['Career']['career']); ?>&nbsp;</td>
		<td><?php echo h($career['Career']['basic_salary']); ?>&nbsp;</td>
		<td><?php echo h($career['Career']['hourly_wage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $career['Career']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $career['Career']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $career['Career']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $career['Career']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Career'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
	</ul>
</div>
