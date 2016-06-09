<div class="payCutTypes index">
	<h2><?php echo __('Pay Cut Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($payCutTypes as $payCutType): ?>
	<tr>
		<td><?php echo h($payCutType['PayCutType']['id']); ?>&nbsp;</td>
		<td><?php echo h($payCutType['PayCutType']['type']); ?>&nbsp;</td>
		<td><?php echo h($payCutType['PayCutType']['amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payCutType['PayCutType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payCutType['PayCutType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payCutType['PayCutType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $payCutType['PayCutType']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pay Cut Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Time Cards'), array('controller' => 'time_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Card'), array('controller' => 'time_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
