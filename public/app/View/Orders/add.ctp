<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Add Order'); ?></legend>
	<?php
		echo $this->Form->input('control_no');
		echo $this->Form->input('file_name');
		echo $this->Form->input('client_id');
		echo $this->Form->input('delivery_date');
		echo $this->Form->input('mosaic_type_id');
		echo $this->Form->input('mosaic_size_id');
		echo $this->Form->input('price');
		echo $this->Form->input('length');
		echo $this->Form->input('target_time');
		echo $this->Form->input('cut_count');
		echo $this->Form->input('multiplay');
		echo $this->Form->input('note');
		echo $this->Form->input('status_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mosaic Types'), array('controller' => 'mosaic_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mosaic Type'), array('controller' => 'mosaic_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mosaic Sizes'), array('controller' => 'mosaic_sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mosaic Size'), array('controller' => 'mosaic_sizes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Types'), array('controller' => 'status_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Type'), array('controller' => 'status_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Records'), array('controller' => 'task_records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task Record'), array('controller' => 'task_records', 'action' => 'add')); ?> </li>
	</ul>
</div>
