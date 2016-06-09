<div class="wpComments view">
<h2><?php echo __('Wp Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Comment ID'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Post ID'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_post_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author Email'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_author_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author Url'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_author_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author IP'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_author_IP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Date'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Date Gmt'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_date_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Content'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Karma'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_karma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approved'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Agent'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Type'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Parent'); ?></dt>
		<dd>
			<?php echo h($wpComment['WpComment']['comment_parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wpComment['User']['id'], array('controller' => 'users', 'action' => 'view', $wpComment['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wp Comment'), array('action' => 'edit', $wpComment['WpComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wp Comment'), array('action' => 'delete', $wpComment['WpComment']['id']), array(), __('Are you sure you want to delete # %s?', $wpComment['WpComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wp Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wp Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
