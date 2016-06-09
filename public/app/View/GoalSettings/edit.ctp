<div class="goalSettings form">
<?php echo $this->Form->create('GoalSetting'); ?>
	<fieldset>
		<legend><?php echo __('Edit Goal Setting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('month');
		echo $this->Form->input('goal_type_id');
		echo $this->Form->input('goal_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GoalSetting.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GoalSetting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Goal Settings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Goal Types'), array('controller' => 'goal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Type'), array('controller' => 'goal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
