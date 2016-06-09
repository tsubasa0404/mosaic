<?php $this->set('title_for_layout', 'Edit Profile'); ?>
	<?php $this->Html->addCrumb('Team Members', '/employees/profile/'.$this->request->data['Employee']['id']); ?>
					<h1 class="pull-left"><?php echo $this->request->data['Employee']['employee_no']; ?><small></small></h1>
				</div>
			</div>
		</div>

<div class="row">
	<div class="col-lg-4">
		<div class="main-box clearfix">
			<div class="main-box-header">

			</div>
			<div class="main-box-body clearfix">

				<div class="employees form">
				<?php echo $this->Form->create('Employee'); ?>
					<fieldset>
						<legend><?php echo __('Edit Employee'); ?></legend>
						<?php echo $this->Form->input('id');?>
						<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('family_name', array('class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('employee_no', array('class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('sex', array('class' => 'form-control', 'div' => 'form-group'));?>

						<div class="form-group">
							<label for="">Birthday</label>
							<?php echo $this->Form->date('birthday', array('class' => 'form-control', 'div' => 'form-group'));?>
						</div>
						<?php echo $this->Form->input('tel', array('class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('address', array('class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('occupation', array('class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('career_id', array('options' => $option_careers, 'class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('employee_group_id', array('options' => $option_group_managers, 'class' => 'form-control', 'div' => 'form-group'));?>
						<?php echo $this->Form->input('prof_img', array('class' => 'form-control', 'div' => 'form-group'));?>
						<div class="form-group">
							<label for="">Start From</label>
							<?php echo $this->Form->date('start_date', array('class' => 'form-control', 'div' => 'form-group'));?>
						</div>
						<div class="form-group">
							<label for="">Terminated Date</label>
							<?php echo $this->Form->date('terminated_date', array('value' => null, 'class' => 'form-control', 'div' => 'form-group'));?>
						</div>
						<?php echo $this->Form->input('memo', array('class' => 'form-control', 'div' => 'form-group'));?>
					</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
				</div>
			</div>
		</div>
	</div>
</div>