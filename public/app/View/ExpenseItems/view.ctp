<div class="expenseItems view">
<h2><?php echo __('Expense Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expenseItem['ExpenseItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo h($expenseItem['ExpenseItem']['item']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expense Item'), array('action' => 'edit', $expenseItem['ExpenseItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expense Item'), array('action' => 'delete', $expenseItem['ExpenseItem']['id']), array(), __('Are you sure you want to delete # %s?', $expenseItem['ExpenseItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Expenses'); ?></h3>
	<?php if (!empty($expenseItem['Expense'])): ?>
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
	<?php foreach ($expenseItem['Expense'] as $expense): ?>
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
