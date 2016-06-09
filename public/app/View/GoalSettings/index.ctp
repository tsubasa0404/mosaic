<div class="goalSettings index">
	<h2><?php echo __('Goal Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('month'); ?></th>
			<th><?php echo $this->Paginator->sort('goal_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('goal_value'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($goalSettings as $goalSetting): ?>
	<tr>
		<td><?php echo h($goalSetting['GoalSetting']['id']); ?>&nbsp;</td>
		<td><?php echo h($goalSetting['GoalSetting']['month']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($goalSetting['GoalType']['id'], array('controller' => 'goal_types', 'action' => 'view', $goalSetting['GoalType']['id'])); ?>
		</td>
		<td><?php echo h($goalSetting['GoalSetting']['goal_value']); ?>&nbsp;</td>
		<td><?php echo h($goalSetting['GoalSetting']['created']); ?>&nbsp;</td>
		<td><?php echo h($goalSetting['GoalSetting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $goalSetting['GoalSetting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $goalSetting['GoalSetting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $goalSetting['GoalSetting']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $goalSetting['GoalSetting']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Goal Setting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Goal Types'), array('controller' => 'goal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Type'), array('controller' => 'goal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
