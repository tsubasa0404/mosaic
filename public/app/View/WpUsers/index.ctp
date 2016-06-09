<div class="wpUsers index">
	<h2><?php echo __('Wp Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('user_login'); ?></th>
			<th><?php echo $this->Paginator->sort('user_pass'); ?></th>
			<th><?php echo $this->Paginator->sort('user_nicename'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_url'); ?></th>
			<th><?php echo $this->Paginator->sort('user_registered'); ?></th>
			<th><?php echo $this->Paginator->sort('user_activation_key'); ?></th>
			<th><?php echo $this->Paginator->sort('user_status'); ?></th>
			<th><?php echo $this->Paginator->sort('display_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($wpUsers as $wpUser): ?>
	<tr>
		<td><?php echo h($wpUser['WpUser']['ID']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_login']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_pass']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_nicename']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_email']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_url']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_registered']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_activation_key']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['user_status']); ?>&nbsp;</td>
		<td><?php echo h($wpUser['WpUser']['display_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wpUser['WpUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wpUser['WpUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wpUser['WpUser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wpUser['WpUser']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Wp User'), array('action' => 'add')); ?></li>
	</ul>
</div>
