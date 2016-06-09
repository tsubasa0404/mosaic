<div class="employeeGroups view">
<h2><?php echo __('Employee Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeGroup['EmployeeGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee Group'); ?></dt>
		<dd>
			<?php echo h($employeeGroup['EmployeeGroup']['employee_group']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Group'), array('action' => 'edit', $employeeGroup['EmployeeGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Group'), array('action' => 'delete', $employeeGroup['EmployeeGroup']['id']), array(), __('Are you sure you want to delete # %s?', $employeeGroup['EmployeeGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($employeeGroup['Employee'])): ?>
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
	<?php foreach ($employeeGroup['Employee'] as $employee): ?>
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
