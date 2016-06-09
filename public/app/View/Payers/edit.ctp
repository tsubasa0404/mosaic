<div class="payers form">
<?php echo $this->Form->create('Payer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Payer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('payer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Payer.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Payer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
