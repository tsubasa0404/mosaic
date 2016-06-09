<div class="goalTypes view">
<h2><?php echo __('Goal Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($goalType['GoalType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal Type'); ?></dt>
		<dd>
			<?php echo h($goalType['GoalType']['goal_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Goal Type'), array('action' => 'edit', $goalType['GoalType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Goal Type'), array('action' => 'delete', $goalType['GoalType']['id']), array(), __('Are you sure you want to delete # %s?', $goalType['GoalType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goal Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goal Settings'), array('controller' => 'goal_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Setting'), array('controller' => 'goal_settings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Goal Settings'); ?></h3>
	<?php if (!empty($goalType['GoalSetting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Goal Type Id'); ?></th>
		<th><?php echo __('Goal Value'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($goalType['GoalSetting'] as $goalSetting): ?>
		<tr>
			<td><?php echo $goalSetting['id']; ?></td>
			<td><?php echo $goalSetting['month']; ?></td>
			<td><?php echo $goalSetting['goal_type_id']; ?></td>
			<td><?php echo $goalSetting['goal_value']; ?></td>
			<td><?php echo $goalSetting['created']; ?></td>
			<td><?php echo $goalSetting['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'goal_settings', 'action' => 'view', $goalSetting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'goal_settings', 'action' => 'edit', $goalSetting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'goal_settings', 'action' => 'delete', $goalSetting['id']), array(), __('Are you sure you want to delete # %s?', $goalSetting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Goal Setting'), array('controller' => 'goal_settings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
