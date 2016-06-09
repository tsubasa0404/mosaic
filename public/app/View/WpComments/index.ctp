<div class="wpComments index">
	<h2><?php echo __('Wp Comments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('comment_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_post_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author_email'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author_url'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author_IP'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_date'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_date_gmt'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_content'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_karma'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approved'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_agent'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_type'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_parent'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($wpComments as $wpComment): ?>
	<tr>
		<td><?php echo h($wpComment['WpComment']['comment_ID']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_post_ID']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_author']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_author_email']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_author_url']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_author_IP']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_date']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_date_gmt']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_content']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_karma']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_approved']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_agent']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_type']); ?>&nbsp;</td>
		<td><?php echo h($wpComment['WpComment']['comment_parent']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wpComment['User']['id'], array('controller' => 'users', 'action' => 'view', $wpComment['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wpComment['WpComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wpComment['WpComment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wpComment['WpComment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wpComment['WpComment']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Wp Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
