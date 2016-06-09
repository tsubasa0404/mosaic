<div class="incomes form">
<?php echo $this->Form->create('Income'); ?>
	<fieldset>
		<legend><?php echo __('Add Income'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('project_id');
		echo $this->Form->input('income_item_id');
		echo $this->Form->input('price');
		echo $this->Form->input('budget_type_id');
		echo $this->Form->input('currency_id');
		echo $this->Form->input('payer_id');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Incomes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Income Items'), array('controller' => 'income_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income Item'), array('controller' => 'income_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Budget Types'), array('controller' => 'budget_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Budget Type'), array('controller' => 'budget_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies'), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency'), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payers'), array('controller' => 'payers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payer'), array('controller' => 'payers', 'action' => 'add')); ?> </li>
	</ul>
</div>
