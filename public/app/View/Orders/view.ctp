<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Control No'); ?></dt>
		<dd>
			<?php echo h($order['Order']['control_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Client']['id'], array('controller' => 'clients', 'action' => 'view', $order['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['delivery_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mosaic Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['MosaicType']['id'], array('controller' => 'mosaic_types', 'action' => 'view', $order['MosaicType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mosaic Size'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['MosaicSize']['id'], array('controller' => 'mosaic_sizes', 'action' => 'view', $order['MosaicSize']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($order['Order']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($order['Order']['length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Target Time'); ?></dt>
		<dd>
			<?php echo h($order['Order']['target_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cut Count'); ?></dt>
		<dd>
			<?php echo h($order['Order']['cut_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multiplay'); ?></dt>
		<dd>
			<?php echo h($order['Order']['multiplay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($order['Order']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['StatusType']['id'], array('controller' => 'status_types', 'action' => 'view', $order['StatusType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Task Records'); ?></h3>
	<?php if (!empty($order['TaskRecord'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Clip No'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Edit Length'); ?></th>
		<th><?php echo __('Clip In'); ?></th>
		<th><?php echo __('Clip Out'); ?></th>
		<th><?php echo __('Overtime'); ?></th>
		<th><?php echo __('Started'); ?></th>
		<th><?php echo __('Completed'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($order['TaskRecord'] as $taskRecord): ?>
		<tr>
			<td><?php echo $taskRecord['id']; ?></td>
			<td><?php echo $taskRecord['order_id']; ?></td>
			<td><?php echo $taskRecord['clip_no']; ?></td>
			<td><?php echo $taskRecord['staff_id']; ?></td>
			<td><?php echo $taskRecord['edit_length']; ?></td>
			<td><?php echo $taskRecord['clip_in']; ?></td>
			<td><?php echo $taskRecord['clip_out']; ?></td>
			<td><?php echo $taskRecord['overtime']; ?></td>
			<td><?php echo $taskRecord['started']; ?></td>
			<td><?php echo $taskRecord['completed']; ?></td>
			<td><?php echo $taskRecord['created']; ?></td>
			<td><?php echo $taskRecord['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'task_records', 'action' => 'view', $taskRecord['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'task_records', 'action' => 'edit', $taskRecord['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'task_records', 'action' => 'delete', $taskRecord['id']), array(), __('Are you sure you want to delete # %s?', $taskRecord['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Task Record'), array('controller' => 'task_records', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
