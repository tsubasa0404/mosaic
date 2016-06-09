<div class="mosaicSizes view">
<h2><?php echo __('Mosaic Size'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mosaicSize['MosaicSize']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mosaic Size'); ?></dt>
		<dd>
			<?php echo h($mosaicSize['MosaicSize']['mosaic_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($mosaicSize['MosaicSize']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mosaicSize['MosaicSize']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mosaicSize['MosaicSize']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mosaic Size'), array('action' => 'edit', $mosaicSize['MosaicSize']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mosaic Size'), array('action' => 'delete', $mosaicSize['MosaicSize']['id']), array(), __('Are you sure you want to delete # %s?', $mosaicSize['MosaicSize']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mosaic Sizes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mosaic Size'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($mosaicSize['Order'])): ?>
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
	<?php foreach ($mosaicSize['Order'] as $order): ?>
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
