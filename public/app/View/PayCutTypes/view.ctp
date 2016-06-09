<div class="payCutTypes view">
<h2><?php echo __('Pay Cut Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($payCutType['PayCutType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($payCutType['PayCutType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($payCutType['PayCutType']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pay Cut Type'), array('action' => 'edit', $payCutType['PayCutType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pay Cut Type'), array('action' => 'delete', $payCutType['PayCutType']['id']), array(), __('Are you sure you want to delete # %s?', $payCutType['PayCutType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Cut Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Cut Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Cards'), array('controller' => 'time_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Card'), array('controller' => 'time_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Time Cards'); ?></h3>
	<?php if (!empty($payCutType['TimeCard'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Pay Cut Type Id'); ?></th>
		<th><?php echo __('In Time'); ?></th>
		<th><?php echo __('Out Time'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($payCutType['TimeCard'] as $timeCard): ?>
		<tr>
			<td><?php echo $timeCard['id']; ?></td>
			<td><?php echo $timeCard['staff_id']; ?></td>
			<td><?php echo $timeCard['date']; ?></td>
			<td><?php echo $timeCard['pay_cut_type_id']; ?></td>
			<td><?php echo $timeCard['in_time']; ?></td>
			<td><?php echo $timeCard['out_time']; ?></td>
			<td><?php echo $timeCard['note']; ?></td>
			<td><?php echo $timeCard['created']; ?></td>
			<td><?php echo $timeCard['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_cards', 'action' => 'view', $timeCard['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_cards', 'action' => 'edit', $timeCard['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_cards', 'action' => 'delete', $timeCard['id']), array(), __('Are you sure you want to delete # %s?', $timeCard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Card'), array('controller' => 'time_cards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
