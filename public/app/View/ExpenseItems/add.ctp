<div class="expenseItems form">
<?php echo $this->Form->create('ExpenseItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Expense Item'); ?></legend>
	<?php
		echo $this->Form->input('item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Expense Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
