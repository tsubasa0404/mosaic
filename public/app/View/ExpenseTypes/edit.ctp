<div class="expenseTypes form">
<?php echo $this->Form->create('ExpenseType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Expense Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExpenseType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ExpenseType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Expense Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
