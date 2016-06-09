<div class="mosaicSizes form">
<?php echo $this->Form->create('MosaicSize'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mosaic Size'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mosaic_size');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MosaicSize.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MosaicSize.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mosaic Sizes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
