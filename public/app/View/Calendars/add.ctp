<div class="calendars form">
<?php echo $this->Form->create('Calendar'); ?>
	<fieldset>
		<legend><?php echo __('Add Calendar'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('allday');
		echo $this->Form->input('start');
		echo $this->Form->input('day_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Calendars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Day Types'), array('controller' => 'day_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Day Type'), array('controller' => 'day_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
