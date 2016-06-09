<div class="incomes view">
<h2><?php echo __('Income'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($income['Income']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($income['Income']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Project']['id'], array('controller' => 'projects', 'action' => 'view', $income['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Income Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['IncomeItem']['id'], array('controller' => 'income_items', 'action' => 'view', $income['IncomeItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($income['Income']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['BudgetType']['id'], array('controller' => 'budget_types', 'action' => 'view', $income['BudgetType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Currency']['id'], array('controller' => 'currencies', 'action' => 'view', $income['Currency']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Payer']['id'], array('controller' => 'payers', 'action' => 'view', $income['Payer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($income['Income']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Income'), array('action' => 'edit', $income['Income']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Income'), array('action' => 'delete', $income['Income']['id']), array(), __('Are you sure you want to delete # %s?', $income['Income']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('action' => 'add')); ?> </li>
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
