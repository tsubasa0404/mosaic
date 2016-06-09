<div class="taskRecords view">
<h2><?php echo __('Task Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taskRecord['Order']['id'], array('controller' => 'orders', 'action' => 'view', $taskRecord['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clip No'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['clip_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taskRecord['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $taskRecord['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit Length'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['edit_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clip In'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['clip_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clip Out'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['clip_out']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overtime'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['overtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Started'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['started']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['completed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($taskRecord['TaskRecord']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task Record'), array('action' => 'edit', $taskRecord['TaskRecord']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task Record'), array('action' => 'delete', $taskRecord['TaskRecord']['id']), array(), __('Are you sure you want to delete # %s?', $taskRecord['TaskRecord']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Records'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task Record'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
