<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee No'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['employee_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Career'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Career']['id'], array('controller' => 'careers', 'action' => 'view', $employee['Career']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['EmployeeGroup']['id'], array('controller' => 'employee_groups', 'action' => 'view', $employee['EmployeeGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prof Img'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['prof_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terminated Date'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['terminated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memo'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['memo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('controller' => 'careers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('controller' => 'careers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Groups'), array('controller' => 'employee_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Group'), array('controller' => 'employee_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Todo Lists'), array('controller' => 'todo_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Todo List'), array('controller' => 'todo_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Todo Lists'); ?></h3>
	<?php if (!empty($employee['TodoList'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Priority Type Id'); ?></th>
		<th><?php echo __('Status Type Id'); ?></th>
		<th><?php echo __('Deadline'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['TodoList'] as $todoList): ?>
		<tr>
			<td><?php echo $todoList['id']; ?></td>
			<td><?php echo $todoList['title']; ?></td>
			<td><?php echo $todoList['employee_id']; ?></td>
			<td><?php echo $todoList['priority_type_id']; ?></td>
			<td><?php echo $todoList['status_type_id']; ?></td>
			<td><?php echo $todoList['deadline']; ?></td>
			<td><?php echo $todoList['created']; ?></td>
			<td><?php echo $todoList['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'todo_lists', 'action' => 'view', $todoList['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'todo_lists', 'action' => 'edit', $todoList['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'todo_lists', 'action' => 'delete', $todoList['id']), array(), __('Are you sure you want to delete # %s?', $todoList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Todo List'), array('controller' => 'todo_lists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
