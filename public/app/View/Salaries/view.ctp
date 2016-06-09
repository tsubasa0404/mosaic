<div class="salaries view">
<h2><?php echo __('Salary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salary['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $salary['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basic'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['basic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['deposit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Absence'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['absence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Late'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['late']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Early'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['early']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overtime'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['overtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Off Work'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['off_work']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bonus'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['bonus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salary'), array('action' => 'edit', $salary['Salary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary'), array('action' => 'delete', $salary['Salary']['id']), array(), __('Are you sure you want to delete # %s?', $salary['Salary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
