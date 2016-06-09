<div class="incomes index">
	<h2><?php echo __('Incomes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('income_item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($incomes as $income): ?>
	<tr>
		<td><?php echo h($income['Income']['id']); ?>&nbsp;</td>
		<td><?php echo h($income['Income']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($income['Project']['id'], array('controller' => 'projects', 'action' => 'view', $income['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($income['IncomeItem']['id'], array('controller' => 'income_items', 'action' => 'view', $income['IncomeItem']['id'])); ?>
		</td>
		<td><?php echo h($income['Income']['price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($income['BudgetType']['id'], array('controller' => 'budget_types', 'action' => 'view', $income['BudgetType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($income['Currency']['id'], array('controller' => 'currencies', 'action' => 'view', $income['Currency']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($income['Payer']['id'], array('controller' => 'payers', 'action' => 'view', $income['Payer']['id'])); ?>
		</td>
		<td><?php echo h($income['Income']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $income['Income']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $income['Income']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $income['Income']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $income['Income']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Income'), array('action' => 'add')); ?></li>
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
