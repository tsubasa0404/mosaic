<div class="expenses view">
<h2><?php echo __('Expense'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['Project']['id'], array('controller' => 'projects', 'action' => 'view', $expense['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expense Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['ExpenseItem']['id'], array('controller' => 'expense_items', 'action' => 'view', $expense['ExpenseItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expense Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['ExpenseType']['id'], array('controller' => 'expense_types', 'action' => 'view', $expense['ExpenseType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['BudgetType']['id'], array('controller' => 'budget_types', 'action' => 'view', $expense['BudgetType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['Currency']['id'], array('controller' => 'currencies', 'action' => 'view', $expense['Currency']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expense'), array('action' => 'edit', $expense['Expense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expense'), array('action' => 'delete', $expense['Expense']['id']), array(), __('Are you sure you want to delete # %s?', $expense['Expense']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Items'), array('controller' => 'expense_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Item'), array('controller' => 'expense_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Types'), array('controller' => 'expense_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Type'), array('controller' => 'expense_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Budget Types'), array('controller' => 'budget_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Budget Type'), array('controller' => 'budget_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies'), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency'), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
	</ul>
</div>
