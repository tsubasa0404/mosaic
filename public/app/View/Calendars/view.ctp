<?php $this->set('title_for_layout', 'Calendar Events'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>
	<?php $this->Html->addCrumb('Calendar', '/calendars/index'); ?>
					<h1 class="pull-left">Event List<small></small></h1>
				</div><!-- /pull-left -->
			</div>
		</div>
				<?php echo $this->Session->flash(); ?>

<div class="row">
	<div class="col-lg-6 maxW600">
		<div class="main-box">
				<div class="main-box-header">
					<h2><?php echo __('Holidays'); ?></h2>
				</div>
				<div class="main-box-body clearfix ">
					<table class="table  toggle-circle-filled table-striped table-bordered">
						<thead>
							<tr>
								<th><?= __('Date') ?></th>
								<th><?= __('Title') ?></th>
								<th><?= __('Day Type') ?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($holidays as $holiday) : ?>
							<tr>
								<td><?php echo h($holiday[0]['start']); ?></td>
								<td><?php echo h($holiday['Calendar']['title']); ?></td>
								<td><?php echo h($holiday['DayType']['day_type']); ?></td>
								<td class="text-center">
									<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',
										array('action' => 'edit', $holiday['Calendar']['id']),
										array('class' => 'table-link','escape' => false)
									); ?>
									<?php echo $this->Form->postLink('<i class="fa fa-trash-o"></i>',
										array('action' => 'delete', $holiday['Calendar']['id']),
										array('escape' => false, 'class' => 'delete_btn table-link red'),
										__('Are you sure you want to delete # %s?', $holiday['Calendar']['id'])
									); ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
	</div>
	<div class="col-lg-6 maxW600">
		<div class="main-box">
				<div class="main-box-header">
					<h2><?php echo __('Events'); ?></h2>
				</div>
				<div class="main-box-body clearfix ">
					<table class="table  toggle-circle-filled table-striped table-bordered">
						<thead>
							<tr>
								<th><?= __('Date') ?></th>
								<th><?= __('Title') ?></th>
								<th><?= __('Day Type') ?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($events as $event) : ?>
							<tr>
								<td><?php echo h($event[0]['start']); ?></td>
								<td><?php echo h($event['Calendar']['title']); ?></td>
								<td><?php echo h($event['DayType']['day_type']); ?></td>
								<td class="text-center">
									<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',
										array('action' => 'edit', $event['Calendar']['id']),
										array('class' => 'table-link','escape' => false)
									); ?>
									<?php echo $this->Form->postLink('<i class="fa fa-trash-o"></i>',
										array('action' => 'delete', $event['Calendar']['id']),
										array('escape' => false, 'class' => 'delete_btn table-link red'),
										__('Are you sure you want to delete # %s?', $event['Calendar']['id'])
									); ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Calendar'), array('action' => 'edit', $calendar['Calendar']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Calendar'), array('action' => 'delete', $calendar['Calendar']['id']), array(), __('Are you sure you want to delete # %s?', $calendar['Calendar']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Calendars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendar'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Day Types'), array('controller' => 'day_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Day Type'), array('controller' => 'day_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
