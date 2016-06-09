<div class="wpUsers form">
<?php echo $this->Form->create('WpUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Wp User'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('user_login');
		echo $this->Form->input('user_pass');
		echo $this->Form->input('user_nicename');
		echo $this->Form->input('user_email');
		echo $this->Form->input('user_url');
		echo $this->Form->input('user_registered');
		echo $this->Form->input('user_activation_key');
		echo $this->Form->input('user_status');
		echo $this->Form->input('display_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wp Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
