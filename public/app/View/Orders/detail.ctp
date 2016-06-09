<?php $this->set('title_for_layout', 'Order Detail'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>
	<?php $this->Html->addCrumb('Order List', '/orders/order_list'); ?>
					<h1><?php echo $order['Order']['control_no']; ?></h1>
					<?php //var_dump($order) ?>
					<?php //var_dump($employeeList) ?>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<h2 class="pull-left">Order Information</h2>
						<div class="filter-block pull-right">
							<?php echo $this->Form->create('Order', array(
								'action' => 'task_completed/'.$order['Order']['id'],
								'id' => 'OrderTaskCompletedForm',
								))
							?>
							<?php echo $this->Form->hidden('id'); ?>
							<?php echo $this->Form->hidden('started'); ?>
							<?php echo $this->Form->hidden('completed'); ?>
							<?php echo $this->Form->hidden('overtime'); ?>
							<?php echo $this->Form->hidden('worktime'); ?>
							<?php echo $this->Form->hidden('status_type_id', array('value' => 3)); ?>
							<button class="btn btn-primary pull-right" type="button">
								<i class="fa fa-cloud-upload fa-lg"></i> COMPLETED</button>
						<?php echo $this->Form->end(); ?>
						</div>
					</header>
						<?php echo $this->Session->flash(); ?>
					<div class="main-box-body clearfix">
						<div class="table-responsive">
						<?php echo $this->Html->link('edit-link', array(
										'controller' => 'task_records',
										'action' => 'edit'),
										array('id' => 'edit-link', 'style' => 'display: none;')); ?>
							<table id="" class="table table-bordered" style="clear: both;table-layout: fixed">
								<thead>
									<tr>
										<th class="text-center"><span>Delivery Date</span></th>
										<th class="text-center"><span>Mosaic Type</span></th>
										<th class="text-center"><span>Mosaic Size</span></th>
										<th class="text-center"><span>Point</span></th>
										<th class="text-center"><span>Length</span></th>
										<th class="text-center"><span>Note</span></th>
										<th class="text-center"><span>Started</span></th>
										<th class="text-center"><span>Completed</span></th>
										<th class="text-center"><span>Over time</span></th>
										<th class="text-center"><span>Work Time</span></th>
										<th class="text-center"><span>Status</span></th>
										<th class="text-center"><span></span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center"><span style="font-size: 0.875em;font-weight: initial;"><?php echo $this->Time->format('m/d', $order['Order']['delivery_date']); ?></span></td>
										<td class="text-center"><span><?php echo $order['MosaicType']['mosaic_type']; ?></span></td>
										<td class="text-center"><span><?php echo $order['MosaicSize']['mosaic_size']; ?></span></td>
										<td class="text-center"><span><?php echo number_format($order['Order']['price']); ?> P</span>
											<span class="hidden" id="order_price"><?php echo $order['Order']['price']; ?></span>
										</td>
										<td class="text-center"><span><?php echo $order['Order']['length']; ?> min</span>
											<span class="hidden" id="order_length"><?php echo $order['Order']['length']; ?></span>
										</td>
										<td class="text-center"><span><?php echo $order['Order']['note']; ?></span></td>
										<td class="text-center"><span><?php echo $this->Time->format('m/d H:i',$startedCompletedOvertimeWorktime[0]['minStarted']); ?></span></td>
										<td class="text-center"><span><?php echo $this->Time->format('m/d H:i',$startedCompletedOvertimeWorktime[0]['maxCompleted']); ?></span></td>
										<td class="text-center"><span><?php echo $startedCompletedOvertimeWorktime[0]['sumOvertime']; ?></span> h</td>
										<td class="text-center"><span><?php echo number_format($startedCompletedOvertimeWorktime[0]['sumWorktime'],2); ?></span> h</td>
										<td class="text-center">
											<?php
												if($order['Order']['status_type_id'] == 3) {
													echo '<span class="label label-success">Completed</span>';
												} elseif($startedCompletedOvertimeWorktime[0]['minStarted']){
													echo '<span class="label label-warning">Working</span>';
												} else {
													echo '<span class="label label-danger">Waiting</span>';
												}
											?>
										</td>
										<td class="text-center">
											<?php if($user['user_role_id'] == 1): ?>
												<span>
													<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',
														array('action' => 'edit/' . $order['Order']['id']),
														array('class' => 'table-link','escape' => false)); ?>
												</span>
											<?php endif; ?>
										</td>

									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<header class="main-box-header clearfix">
						<h2>Assign Task</h2>
					</header>
					<div class="main-box-body clearfix">
						<?php echo $this->Form->create('TaskRecord', array(
							'action' => 'addAjax',
							'class' => 'form-inline',
							'inputDefaults' => array(
								'class' => 'form-control')));
						?>
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
						<div class="form-group">
							<?php echo $this->Form->input('edit_length', array(
								'label' => array('Edit Lenght','style' => 'display:block;' ),
								'type' => 'number',
								'step' => 1,
								'min' => 0,
								'max' => $order['Order']['length'] - $sum_editLength[0]['sumEditLength'],
								'required' => true
							)) ?>
						</div>
						<div class="form-group">
							<label for="TaskRecordEmployeeId" style="display:block;">Staff Name</label>
							<?php echo $this->Form->input('employee_id', array(
								'label' => false,
								'options' => $employeeList,
								'empty' => '--Select Staff--'
							)) ?>
						</div>
						<div class="form-group">
							<label for="TaskRecordStarted" style="display: block;">Start date</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input type="text" name="started-day" id="datepickerStarted" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label for="TaskRecordStarted" style="display: block;">Start time</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
								<input type="text" name="started-time" id="timepickerStarted" class="form-control" required>
							</div>
						</div>
						<?php echo $this->Form->hidden('started') ?>
						<?php echo $this->Form->hidden('clip_no'); ?>
						<?php echo $this->Form->hidden('TaskRecord.order_id', array('value' => $order['Order']['id'])); ?>
						<button id="submit-assign-task" class="btn btn-primary" type="button" style="vertical-align: bottom;">
							<i class="fa fa-plus-circle fa-lg"></i> add
						</button>
						<?php echo $this->Form->end(); ?>
					</div>

					<div class="main-box-body clearfix">
						<div class="table-responsive">
							<table id="user" class="table table-hover table-bordered" style="clear: both">
								<thead>
									<tr>
										<th class="text-center"><span>No</span></th>
										<th class="text-center" colspan="2"><span>Time Code</span></th>
										<th class="text-center"><span>Edit Length</span></th>
										<th class="text-center"><span>Edit Point</span></th>
										<th class="text-center"><span>Name</span></th>
										<th class="text-center"><span>Started</span></th>
										<!-- <th class="text-center"><span>Expected</span></th> -->
										<th class="text-center"><span>Completed</span></th>
										<th class="text-center"><span>Over Time</span></th>
										<th class="text-center"><span>Work Time</span></th>
										<th class="text-center"><span></span></th>

									</tr>
								</thead>
								<tbody>
									<?php foreach($taskRecordList as $taskRecord) : ?>
										<tr id="task_<?php echo $taskRecord['TaskRecord']['id'];?>" data-id="<?php echo $taskRecord['TaskRecord']['id'];?>">
											<td class="text-center" width="2.5%"><?php echo $taskRecord['TaskRecord']['clip_no'];?></td>
											<td class="text-center" width="7.5%"><?php echo $taskRecord['TaskRecord']['clip_in'];?></td>
											<td class="text-center" width="7.5%"><?php echo $taskRecord['TaskRecord']['clip_out'];?></td>
											<td class="text-center" width="7.5%"><?php echo $taskRecord['TaskRecord']['edit_length'];?> min</td>
											<td class="text-center" width="7.5%"><?php echo round(
												$order['Order']['price'] / $order['Order']['length'] * $taskRecord['TaskRecord']['edit_length'], 0);?> P</td>
											<td class="text-center" width="10%"><?php echo $taskRecord['Employee']['employee_no'];?></td>
											<td class="hidden"><?php echo $taskRecord['TaskRecord']['employee_id']?></td>
											<td class="text-center" width="10%"><?php echo $this->Time->format('m/d H:i', $taskRecord['TaskRecord']['started']);?></td>
											<td class="text-center" width="10%"><?php echo $this->Time->format('m/d H:i', $taskRecord['TaskRecord']['completed']);?></td>
											<td class="text-center" width="7.5%"><?php echo $taskRecord['TaskRecord']['overtime'];?> h</td>
											<td class="text-center" width="5%"><?php echo $taskRecord['TaskRecord']['worktime'];?> h</td>
											<td class="text-center" width="5%">
												<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2): ?>
													<div class="actions">
														<?php
															echo $this->Html->link('<i class="fa fa-pencil"></i>', array(
																'controller' => 'task_records',
																'action' => 'edit/' . $taskRecord['TaskRecord']['id']),
																array('class' => 'table-link', 'escape' => false));
															echo $this->Form->postLink('<i class="fa fa-trash-o"></i>', array(
																'controller' => 'task_records',
																'action' => 'delete' , $taskRecord['TaskRecord']['id']),
																array(
																	'confirm' => __('Are you sure you want to delete?'),
																	'class' 	=> 'table-link', 'escape' => false
																	));
														?>
													</div>
												<?php endif; ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
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
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
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

			//Task Completed Btn
				$('#OrderTaskCompletedForm button').click(function(){

          var OrderId   = "<?php echo $order['Order']['id'] ?>";
          var OrderStarted   = "<?php echo $startedCompletedOvertimeWorktime[0]['minStarted'] ?>";
          var OrderCompleted = "<?php echo $startedCompletedOvertimeWorktime[0]['maxCompleted'] ?>";
          var OrderOvertime  = "<?php echo $startedCompletedOvertimeWorktime[0]['sumOvertime'] ?>";
          var OrderWorktime  = "<?php echo $startedCompletedOvertimeWorktime[0]['sumWorktime'] ?>";
          $('#OrderId')  .val(OrderId);
          $('#OrderStarted')  .val(OrderStarted);
          $('#OrderCompleted').val(OrderCompleted);
          $('#OrderOvertime') .val(OrderOvertime);
          $('#OrderWorktime') .val(OrderWorktime);
					$('#OrderTaskCompletedForm').submit();
				});


			//Assign Task Form action addAjax
				$('#TaskRecordClipIn').focus();
					$('#submit-assign-task').click(function(){
						var order_id 	   = $('#TaskRecordOrderId').val();
						var order_price  = $('#order_price').text();
						var order_length = $('#order_length').text();
						var assign_count = $('#user>tbody tr').length;
		        var clip_no      = assign_count + 1;
		        var clip_in      = $('#TaskRecordClipIn').val();
		        var clip_out     = $('#TaskRecordClipOut').val();
		        var edit_length  = $('#TaskRecordEditLength').val();
		        var employee_id  = $('#TaskRecordEmployeeId').val();
		        var employee_no	 = $('#TaskRecordEmployeeId option:selected').text();
		        var date         = $('#datepickerStarted').val();
		        var time         = $('#timepickerStarted').val();
		        var started      = date + ' ' + time;
						var formUrl 		 = $('#TaskRecordAddAjaxForm').attr('action');
						var edit_point	 = Math.ceil(order_price / order_length * edit_length);

						$.ajax({
							url: formUrl,
							type: 'POST',
							dataType: 'json',
							data: {
										order_id 		: order_id,
										clip_no 		: clip_no,
										clip_in 		: clip_in,
										clip_out 		: clip_out,
										edit_length : edit_length,
										edit_point 	: edit_point,
										employee_id : employee_id,
										started 		: started,
										},
							success: function(rs){
								swal({
									title: "Success!",
									text: "Do your best!",
									type:"success",
									confirmButtonText:"OK"
								});
								var e = $(
									'<tr id="task_' + rs + '" data-id="' + rs + '">' +
									'<td class="text-center" width="2.5%"><span></span></td>' +
									'<td class="text-center" width="7.5%"><span></span></td>' +
									'<td class="text-center" width="7.5%"><span></span></td>' +
									'<td class="text-center" width="7.5%"><span></span> min</td>' +
									'<td class="text-center" width="7.5%"><span></span> P</td>' +
									'<td class="text-center" width="10%"><span></span></td>' +
									'<td class="hidden"><span></span></td>' +
									'<td class="text-center" width="10%"><span></span></td>' +
									'<td class="text-center" width="10%"><span></span></td>' +
									'<td class="text-center" width="7.5%"><span></span> h</td>' +
									'<td class="text-center" width="5%"><span></span> h</td>' +
									'<td class="text-center" width="5%">' +
										'<div class="actions">' +
											'<a href="' + $('#edit-link').attr('href')   + '/' + rs + '" class="table-link"><i class="fa fa-pencil"></i></a>' +
											'<a href="' + $('#delete-link').attr('href') + '/' + rs + '" class="table-link"><i class="fa fa-trash-o"></i></a>' +
										'</div>' +
									'</div></td>' +
									'</tr>'
									);

								$('#user').append(e).find('tr:last span:eq(0)').text(clip_no);
								$('#user').append(e).find('tr:last span:eq(1)').text(clip_in);
								$('#user').append(e).find('tr:last span:eq(2)').text(clip_out);
								$('#user').append(e).find('tr:last span:eq(3)').text(edit_length);
								$('#user').append(e).find('tr:last span:eq(4)').text(edit_point);
								$('#user').append(e).find('tr:last span:eq(5)').text(employee_no);
								$('#user').append(e).find('tr:last span:eq(6)').text(started.substr(-11));
								$('#TaskRecordAddAjaxForm').find(":text, select").val('');
								$('#TaskRecordEditLength').val('');
								$('#TaskRecordClipIn').focus();

							},
							error: function(){
								swal({
									title: "Oops...",
									text: "Please try it again.",
									type:"error",
									confirmButtonText:"OK"
								});
							}
						});
					});




			$('#datepickerStarted').datepicker({
				format: 'yyyy/mm/dd'
			});

			$('#timepickerStarted').timepicker({
				minuteStep: 5,
				timeFormat:'HH:mm',
				showSeconds: false,
				showMeridian: false,
				disableFocus: false,
				showWidget: true,
				//defaultTime: '',
			}).focus(function(){
				$(this).next().trigger('click');
			});

		});
	<?php $this->Html->scriptEnd(); ?>
