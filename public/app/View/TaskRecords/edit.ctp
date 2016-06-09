<?php $this->set('title_for_layout', 'Task Record Edit'); ?>
	<?php $this->Html->addCrumb( $taskRecordList['Order']['control_no'].' Order Detail', '/orders/detail/' . $taskRecordList['TaskRecord']['order_id']); ?>
					<h1>Edit <?php echo $taskRecordList['Order']['control_no']; ?> Task Record - <?php echo $taskRecordList['Employee']['employee_no']; ?></h1>
					<?php //var_dump($taskRecordList) ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<h2>Edit Task Record</h2>
					</header>
							<?php echo $this->Session->flash(); ?>
					<div class="main-box-body clearfix">
						<?php echo $this->Form->create('TaskRecord',array(
							'class' => 'form-inline',
							'inputDefaults' => array(
								'class' => 'form-control')));
						?>

						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<?php echo $this->Form->input('clip_in', array(
										'label' => array('Time Cord/Start','style' => 'display:block;')
									)) ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('clip_out', array(
										'label' => array('Time Cord/End','style' => 'display:block;' )
									)) ?>
								</div>
								<div class="form-group" style="width: 7.5%">
									<?php echo $this->Form->input('edit_length', array(
										'label' => array('Edit Lenght','style' => 'display:block;' ),
										'type' => 'number',
										'step' => 1,
										'min' => 0,
										'required' => true,
										'style' => 'width: 100%'
									)) ?>
								</div>
								<input type="hidden" name="data[TaskRecord][edit_point]" id="TaskRecordEditPoint">
								<div class="form-group">
									<label for="TaskRecordEmployeeId" style="display:block;">Staff Name</label>
									<?php echo $this->Form->input('employee_id', array(
										'label' => false,
										'options' => $employeeList,
										'empty' => '--Select Staff--'
									)) ?>
								</div>
								<div class="form-group">
									<label for="TaskRecordStarted" style="display: block;">Started</label>
									<?php echo $this->Form->input('started', array(
										'type' => 'text',
										'label' => false)) ?>
								</div>
							</div>
						</div>





						<div class="row mT10">
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label for="TaskRecordCompleted" style="display:block;">Completed</label>
									<?php if($taskRecordList['TaskRecord']['completed']): ?>
										<?php
											echo $this->Form->input('completed', array(
												'type' => 'text',
												'label' => false));
										?>
									<?php else : ?>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										<input type="text" name="completed-day" id="datepickerCompleted" class="form-control" >
									</div>
								</div>
								<div class="form-group">
									<label for="TaskRecordCompleted" style="display: block;">Complete time</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
										<input type="text" name="completed-time" id="timepickerCompleted" class="form-control">
										<?php echo $this->Form->hidden('completed') ?>
									</div>
									<?php endif; ?>
								</div>
								<div class="form-group" style="width: 7.5%">
									<label for="TaskRecordOvertime" style="display: block;">Overtime</label>
									<?php echo $this->Form->input('overtime', array(
										'type' => 'number',
										'label' => false,
										'step' => 0.5,
										'min' => 0,
										'style' => 'width: 100%'
									))?>
								</div>
								<div class="form-group" style="width: 7.5%">
									<label for="TaskRecordWorktime" style="display: block;">Worktime</label>
									<?php echo $this->Form->input('worktime', array(
										'type' => 'text',
										'label' => false,

										'min' => 0,
										'style' => 'width: 100%'
									))?>
								</div>
								<?php echo $this->Form->hidden('clip_no'); ?>
								<?php echo $this->Form->hidden('TaskRecord.order_id'); ?>
								<?php echo $this->Form->hidden('id'); ?>
								<?php echo $this->Form->input('Save', array(
									'type' => 'button',
									'div' => false,
									'label' => false,
									'id' => 'submit-edit-task',
									'class' => 'btn btn-primary',
									'style' => 'vertical-align:bottom;',
										));
								?>
								<button type="button" class="btn btn-default" style="vertical-align: bottom;"><?php echo $this->Html->link("back", array("controller" => "orders", "action" => "detail/".$orderId), array('style' => 'color:white;')) ?></button>
								<?php echo $this->Form->end(); ?>
								</div>
							</div>
						</div>
				</div>
			</div>
			<!-- /row -->
	<!-- page-js -->
	<?php
		echo $this->Html->script('bootstrap-editable.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
	?>

	<!-- form-js -->
	<?php
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('bootstrap-datetimepicker.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('bootstrap-timepicker.min', array('inline' => false, 'block' => 'form-js'));
	?>

	<!-- inline-scripts -->
	<?php $this->Html->scriptStart(array('inlie' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function(){
			$('#TaskRecordStarted').change(function(){
				$('#TaskRecordWorktime').val("");
			});
			$('#TaskRecordCompleted').change(function(){
				$('#TaskRecordWorktime').val("");
			});
			$('#TaskRecordOvertime').change(function(){
				$('#TaskRecordWorktime').val("");
			});
			$('#datepickerCompleted').change(function(){
				$('#TaskRecordWorktime').val("");
			});

			$('#datepickerCompleted').datepicker({
				format: 'yyyy/mm/dd'
			});

			$('#timepickerCompleted').timepicker({
				minuteStep: 5,
				timeFormat:'HH:mm',
				showSeconds: false,
				showMeridian: false,
				disableFocus: false,
				showWidget: true,

			}).focus(function(){
				$(this).next().trigger('click');
			});


			$('#submit-edit-task').click(function(){
				var date = $('#datepickerCompleted').val();
				var time = $('#timepickerCompleted').val();
				var completed = date + ' ' + time;
				var edit_length = $('#TaskRecordEditLength').val();
				var price = "<?php echo $orderData['Order']['price']; ?>";
				var length = "<?php echo $orderData['Order']['length'] ?>";
				var edit_point = parseInt(price)/parseInt(length)*parseInt(edit_length);
				$('#TaskRecordEditPoint').val(edit_point);
				if(!date || !time){
					$('#TaskRecordCompleted').val();
				} else {
					$('#TaskRecordCompleted').val(completed);
				}

			});
		});
	<?php $this->Html->scriptEnd(); ?>
</body>
</html>