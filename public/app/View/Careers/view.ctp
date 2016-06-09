<div class="careers view">
<h2><?php echo __('Career'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($career['Career']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Career'); ?></dt>
		<dd>
			<?php echo h($career['Career']['career']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basic Salary'); ?></dt>
		<dd>
			<?php echo h($career['Career']['basic_salary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hourly Wage'); ?></dt>
		<dd>
			<?php echo h($career['Career']['hourly_wage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Career'), array('action' => 'edit', $career['Career']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Career'), array('action' => 'delete', $career['Career']['id']), array(), __('Are you sure you want to delete # %s?', $career['Career']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($career['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Family Name'); ?></th>
		<th><?php echo __('Employee No'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Occupation'); ?></th>
		<th><?php echo __('Career Id'); ?></th>
		<th><?php echo __('Employee Group Id'); ?></th>
		<th><?php echo __('Prof Img'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Terminated Date'); ?></th>
		<th><?php echo __('Memo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($career['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['first_name']; ?></td>
			<td><?php echo $employee['family_name']; ?></td>
			<td><?php echo $employee['employee_no']; ?></td>
			<td><?php echo $employee['sex']; ?></td>
			<td><?php echo $employee['birthday']; ?></td>
			<td><?php echo $employee['tel']; ?></td>
			<td><?php echo $employee['address']; ?></td>
			<td><?php echo $employee['occupation']; ?></td>
			<td><?php echo $employee['career_id']; ?></td>
			<td><?php echo $employee['employee_group_id']; ?></td>
			<td><?php echo $employee['prof_img']; ?></td>
			<td><?php echo $employee['start_date']; ?></td>
			<td><?php echo $employee['terminated_date']; ?></td>
			<td><?php echo $employee['memo']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array(), __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Staffs'); ?></h3>
	<?php if (!empty($career['Staff'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Family Name'); ?></th>
		<th><?php echo __('Employee No'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Occupation'); ?></th>
		<th><?php echo __('Career Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Terminated'); ?></th>
		<th><?php echo __('Memo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($career['Staff'] as $staff): ?>
		<tr>
			<td><?php echo $staff['id']; ?></td>
			<td><?php echo $staff['first_name']; ?></td>
			<td><?php echo $staff['family_name']; ?></td>
			<td><?php echo $staff['employee_no']; ?></td>
			<td><?php echo $staff['sex']; ?></td>
			<td><?php echo $staff['birthday']; ?></td>
			<td><?php echo $staff['tel']; ?></td>
			<td><?php echo $staff['address']; ?></td>
			<td><?php echo $staff['occupation']; ?></td>
			<td><?php echo $staff['career_id']; ?></td>
			<td><?php echo $staff['start_date']; ?></td>
			<td><?php echo $staff['terminated']; ?></td>
			<td><?php echo $staff['memo']; ?></td>
			<td><?php echo $staff['created']; ?></td>
			<td><?php echo $staff['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staffs', 'action' => 'view', $staff['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staffs', 'action' => 'edit', $staff['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staffs', 'action' => 'delete', $staff['id']), array(), __('Are you sure you want to delete # %s?', $staff['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
