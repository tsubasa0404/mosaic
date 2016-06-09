<div class="incomeItems form">
<?php echo $this->Form->create('IncomeItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Income Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('income_item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IncomeItem.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('IncomeItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Income Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
