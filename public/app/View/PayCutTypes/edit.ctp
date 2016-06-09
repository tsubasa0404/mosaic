<div class="payCutTypes form">
<?php echo $this->Form->create('PayCutType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pay Cut Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PayCutType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PayCutType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pay Cut Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Time Cards'), array('controller' => 'time_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Card'), array('controller' => 'time_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
