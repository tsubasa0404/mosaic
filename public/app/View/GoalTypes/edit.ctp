<div class="goalTypes form">
<?php echo $this->Form->create('GoalType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Goal Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('goal_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GoalType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GoalType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Goal Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Goal Settings'), array('controller' => 'goal_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goal Setting'), array('controller' => 'goal_settings', 'action' => 'add')); ?> </li>
	</ul>
</div>
