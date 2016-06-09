<div class="expenseTypes index">
	<h2><?php echo __('Expense Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($expenseTypes as $expenseType): ?>
	<tr>
		<td><?php echo h($expenseType['ExpenseType']['id']); ?>&nbsp;</td>
		<td><?php echo h($expenseType['ExpenseType']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $expenseType['ExpenseType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $expenseType['ExpenseType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $expenseType['ExpenseType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expenseType['ExpenseType']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Expense Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('controller' => 'expenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('controller' => 'expenses', 'action' => 'add')); ?> </li>
	</ul>
</div>
