<div class="budgetTypes view">
<h2><?php echo __('Budget Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($budgetType['BudgetType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($budgetType['BudgetType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($budgetType['BudgetType']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Budget Type'), array('action' => 'edit', $budgetType['BudgetType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Budget Type'), array('action' => 'delete', $budgetType['BudgetType']['id']), array(), __('Are you sure you want to delete # %s?', $budgetType['BudgetType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Budget Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Budget Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Expenses'); ?></h3>
	<?php if (!empty($budgetType['Expense'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Expense Item Id'); ?></th>
		<th><?php echo __('Expense Type Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Budget Type Id'); ?></th>
		<th><?php echo __('Currency Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budgetType['Expense'] as $expense): ?>
		<tr>
			<td><?php echo $expense['id']; ?></td>
			<td><?php echo $expense['date']; ?></td>
			<td><?php echo $expense['project_id']; ?></td>
			<td><?php echo $expense['expense_item_id']; ?></td>
			<td><?php echo $expense['expense_type_id']; ?></td>
			<td><?php echo $expense['price']; ?></td>
			<td><?php echo $expense['budget_type_id']; ?></td>
			<td><?php echo $expense['currency_id']; ?></td>
			<td><?php echo $expense['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'expenses', 'action' => 'view', $expense['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'expenses', 'action' => 'edit', $expense['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'expenses', 'action' => 'delete', $expense['id']), array(), __('Are you sure you want to delete # %s?', $expense['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Incomes'); ?></h3>
	<?php if (!empty($budgetType['Income'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Income Item Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Budget Type Id'); ?></th>
		<th><?php echo __('Currency Id'); ?></th>
		<th><?php echo __('Payer Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budgetType['Income'] as $income): ?>
		<tr>
			<td><?php echo $income['id']; ?></td>
			<td><?php echo $income['date']; ?></td>
			<td><?php echo $income['project_id']; ?></td>
			<td><?php echo $income['income_item_id']; ?></td>
			<td><?php echo $income['price']; ?></td>
			<td><?php echo $income['budget_type_id']; ?></td>
			<td><?php echo $income['currency_id']; ?></td>
			<td><?php echo $income['payer_id']; ?></td>
			<td><?php echo $income['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'incomes', 'action' => 'view', $income['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'incomes', 'action' => 'edit', $income['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'incomes', 'action' => 'delete', $income['id']), array(), __('Are you sure you want to delete # %s?', $income['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
