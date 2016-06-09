<div class="wpComments form">
<?php echo $this->Form->create('WpComment'); ?>
	<fieldset>
		<legend><?php echo __('Add Wp Comment'); ?></legend>
	<?php
		echo $this->Form->input('comment_ID');
		echo $this->Form->input('comment_post_ID');
		echo $this->Form->input('comment_author');
		echo $this->Form->input('comment_author_email');
		echo $this->Form->input('comment_author_url');
		echo $this->Form->input('comment_author_IP');
		echo $this->Form->input('comment_date');
		echo $this->Form->input('comment_date_gmt');
		echo $this->Form->input('comment_content');
		echo $this->Form->input('comment_karma');
		echo $this->Form->input('comment_approved');
		echo $this->Form->input('comment_agent');
		echo $this->Form->input('comment_type');
		echo $this->Form->input('comment_parent');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wp Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
