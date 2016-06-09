<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('control_no'); ?></th>
			<th><?php echo $this->Paginator->sort('file_name'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_date'); ?></th>
			<th><?php echo $this->Paginator->sort('mosaic_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mosaic_size_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
			<th><?php echo $this->Paginator->sort('target_time'); ?></th>
			<th><?php echo $this->Paginator->sort('cut_count'); ?></th>
			<th><?php echo $this->Paginator->sort('multiplay'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('status_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['control_no']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['file_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Client']['id'], array('controller' => 'clients', 'action' => 'view', $order['Client']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['delivery_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['MosaicType']['id'], array('controller' => 'mosaic_types', 'action' => 'view', $order['MosaicType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['MosaicSize']['id'], array('controller' => 'mosaic_sizes', 'action' => 'view', $order['MosaicSize']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['price']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['length']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['target_time']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['cut_count']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['multiplay']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['note']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['StatusType']['id'], array('controller' => 'status_types', 'action' => 'view', $order['StatusType']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mosaic Types'), array('controller' => 'mosaic_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mosaic Type'), array('controller' => 'mosaic_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mosaic Sizes'), array('controller' => 'mosaic_sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mosaic Size'), array('controller' => 'mosaic_sizes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'status_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Type'), array('controller' => 'status_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Records'), array('controller' => 'task_records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task Record'), array('controller' => 'task_records', 'action' => 'add')); ?> </li>
	</ul>
</div>
