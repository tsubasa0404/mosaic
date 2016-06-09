<div class="goalSettings view">
<h2><?php echo __('Goal Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($goalSetting['GoalSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($goalSetting['GoalSetting']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($goalSetting['GoalType']['id'], array('controller' => 'goal_types', 'action' => 'view', $goalSetting['GoalType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal Value'); ?></dt>
		<dd>
			<?php echo h($goalSetting['GoalSetting']['goal_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($goalSetting['GoalSetting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($goalSetting['GoalSetting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Goal Setting'), array('action' => 'edit', $goalSetting['GoalSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Goal Setting'), array('action' => 'delete', $goalSetting['GoalSetting']['id']), array(), __('Are you sure you want to delete # %s?', $goalSetting['GoalSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goal Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Setting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goal Types'), array('controller' => 'goal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Type'), array('controller' => 'goal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
