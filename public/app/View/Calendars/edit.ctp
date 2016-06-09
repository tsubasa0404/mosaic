<?php $this->set('title_for_layout', 'Calendar Events'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>
	<?php $this->Html->addCrumb('Calendar', '/calendars/index'); ?>
					<h1 class="pull-left">Event edit<small></small></h1>
				</div><!-- /pull-left -->
			</div>
		</div>
		<div class="row">
			<div class="main-box clearfix maxW400">
				<div class="main-box-body clearfix">
					<div class="calendars form">
					<?php echo $this->Form->create('Calendar'); ?>
						<fieldset>
							<legend><?php echo __('Edit Event'); ?></legend>
							<?php echo $this->Form->input('id');?>
							<?php echo $this->Form->input('title', array('class' => 'form-control', 'div' => 'form-group'));?>
							<?php echo $this->Form->hidden('allday');?>

							<div class="form-group">
								<label for=""><?= __('Date') ?></label>
								<?php echo $this->Form->date('start', array('value' => date('Y-m-d', strtotime($start['Calendar']['start'])), 'class' => 'form-control'));?>
							</div>
							<?php echo $this->Form->input('day_type_id', array('class' => 'form-control', 'div' => 'form-group'));?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>