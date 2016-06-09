<div class="dayTypes view">
<h2><?php echo __('Day Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dayType['DayType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day Type'); ?></dt>
		<dd>
			<?php echo h($dayType['DayType']['day_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Day Type'), array('action' => 'edit', $dayType['DayType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Day Type'), array('action' => 'delete', $dayType['DayType']['id']), array(), __('Are you sure you want to delete # %s?', $dayType['DayType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Day Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Day Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calendars'), array('controller' => 'calendars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendar'), array('controller' => 'calendars', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Calendars'); ?></h3>
	<?php if (!empty($dayType['Calendar'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Allday'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('Day Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dayType['Calendar'] as $calendar): ?>
		<tr>
			<td><?php echo $calendar['id']; ?></td>
			<td><?php echo $calendar['title']; ?></td>
			<td><?php echo $calendar['allday']; ?></td>
			<td><?php echo $calendar['start']; ?></td>
			<td><?php echo $calendar['day_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calendars', 'action' => 'view', $calendar['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calendars', 'action' => 'edit', $calendar['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calendars', 'action' => 'delete', $calendar['id']), array(), __('Are you sure you want to delete # %s?', $calendar['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Calendar'), array('controller' => 'calendars', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
