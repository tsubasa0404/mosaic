<div class="wpUsers view">
<h2><?php echo __('Wp User'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Login'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Pass'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Nicename'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_nicename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Url'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Registered'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_registered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Activation Key'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_activation_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Status'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['user_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($wpUser['WpUser']['display_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wp User'), array('action' => 'edit', $wpUser['WpUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wp User'), array('action' => 'delete', $wpUser['WpUser']['id']), array(), __('Are you sure you want to delete # %s?', $wpUser['WpUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wp Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wp User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
