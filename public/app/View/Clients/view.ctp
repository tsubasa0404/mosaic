<div class="clients view">
<h2><?php echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo h($client['Client']['client']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), array(), __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($client['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Control No'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Delivery Date'); ?></th>
		<th><?php echo __('Mosaic Type Id'); ?></th>
		<th><?php echo __('Mosaic Size Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Target Time'); ?></th>
		<th><?php echo __('Cut Count'); ?></th>
		<th><?php echo __('Multiplay'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Status Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['control_no']; ?></td>
			<td><?php echo $order['file_name']; ?></td>
			<td><?php echo $order['client_id']; ?></td>
			<td><?php echo $order['delivery_date']; ?></td>
			<td><?php echo $order['mosaic_type_id']; ?></td>
			<td><?php echo $order['mosaic_size_id']; ?></td>
			<td><?php echo $order['price']; ?></td>
			<td><?php echo $order['length']; ?></td>
			<td><?php echo $order['target_time']; ?></td>
			<td><?php echo $order['cut_count']; ?></td>
			<td><?php echo $order['multiplay']; ?></td>
			<td><?php echo $order['note']; ?></td>
			<td><?php echo $order['status_type_id']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), array(), __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
