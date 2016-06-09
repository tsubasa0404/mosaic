<div class="mosaicTypes form">
<?php echo $this->Form->create('MosaicType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mosaic Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mosaic_type');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MosaicType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MosaicType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mosaic Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
