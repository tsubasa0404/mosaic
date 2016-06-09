<div class="dayTypes form">
<?php echo $this->Form->create('DayType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Day Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('day_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DayType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DayType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Day Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Calendars'), array('controller' => 'calendars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendar'), array('controller' => 'calendars', 'action' => 'add')); ?> </li>
	</ul>
</div>
