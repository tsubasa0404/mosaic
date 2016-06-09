<?php $this->set('title_for_layout', 'Profile'); ?>
	<?php $this->Html->addCrumb('Profile', '/employees/profile/'.$this->request->data['Employee']['id']); ?>
					<h1 class="pull-left"><?php echo $this->request->data['Employee']['employee_no']; ?><small></small></h1>
					</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
				<div class="main-box-header">
					<h2><?php echo __('Edit Salary'); ?></h2>
				</div>
					<div class="main-box-body clearfix">

						<div class="salaries form">
						<?php echo $this->Form->create('Salary'); ?>
							<fieldset>
							<?php echo $this->Form->hidden('id');?>
								<?php echo $this->Form->hidden('employee_id');?>
								<?php echo $this->Form->date('month');?>
								<?php echo $this->Form->input('basic');?>
								<?php echo $this->Form->input('deposit', array('class' => 'red'));?>
								<?php echo $this->Form->input('absence', array('class' => 'red'));?>
								<?php echo $this->Form->input('late', array('class' => 'red'));?>
								<?php echo $this->Form->input('early', array('class' => 'red'));?>
								<?php echo $this->Form->input('overtime');?>
								<?php echo $this->Form->input('off_work');?>
							<?php echo $this->Form->input('bonus');?>
							</fieldset>
						<?php echo $this->Form->end(__('Submit')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
