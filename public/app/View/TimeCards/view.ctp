<div class="timeCards view">
<h2><?php echo __('Time Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeCard['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $timeCard['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Cut Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeCard['PayCutType']['id'], array('controller' => 'pay_cut_types', 'action' => 'view', $timeCard['PayCutType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Time'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['in_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Out Time'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['out_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($timeCard['TimeCard']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Card'), array('action' => 'edit', $timeCard['TimeCard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time Card'), array('action' => 'delete', $timeCard['TimeCard']['id']), array(), __('Are you sure you want to delete # %s?', $timeCard['TimeCard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pay Cut Types'), array('controller' => 'pay_cut_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay Cut Type'), array('controller' => 'pay_cut_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
