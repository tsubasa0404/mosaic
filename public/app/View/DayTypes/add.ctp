<div class="dayTypes form">
<?php echo $this->Form->create('DayType'); ?>
	<fieldset>
		<legend><?php echo __('Add Day Type'); ?></legend>
	<?php
		echo $this->Form->input('day_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Day Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Calendars'), array('controller' => 'calendars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendar'), array('controller' => 'calendars', 'action' => 'add')); ?> </li>
	</ul>
</div>
