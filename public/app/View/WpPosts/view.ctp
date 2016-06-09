<div class="wpPosts view">
<h2><?php echo __('Wp Post'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Author'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date Gmt'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_date_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Content'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Title'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Excerpt'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_excerpt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Status'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Status'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['comment_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ping Status'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['ping_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Password'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Name'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Ping'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['to_ping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pinged'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['pinged']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Modified'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Modified Gmt'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_modified_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Content Filtered'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_content_filtered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Parent'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guid'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['guid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu Order'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['menu_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Type'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Mime Type'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['post_mime_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Count'); ?></dt>
		<dd>
			<?php echo h($wpPost['WpPost']['comment_count']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wp Post'), array('action' => 'edit', $wpPost['WpPost']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wp Post'), array('action' => 'delete', $wpPost['WpPost']['id']), array(), __('Are you sure you want to delete # %s?', $wpPost['WpPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wp Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wp Post'), array('action' => 'add')); ?> </li>
	</ul>
</div>
