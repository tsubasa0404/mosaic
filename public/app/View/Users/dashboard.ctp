<?php $this->set('title_for_layout', 'Dashboard'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>

					<h1><?= __('Dashboard') ?></h1>
				</div>
			</div>

	</div>

<!-- Setting Goals -->
	<div class="row">
		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="main-box infographic-box ">
				<!-- team goal modal -->

				<a data-toggle="modal" href="#teamGoalModal"><i class="fa fa-money red-bg"></i></a>
				<?php if($user['user_role_id'] == 1): ?>
					<div class="modal fade" id="teamGoalModal" tabindex="-1" role="dialog" aria-labelledby="teamGoalModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"><?= __('Set Team Goal') ?></h4>
								</div>
								<div class="modal-body">
									<?php echo $this->Form->create('GoalSetting', array(
										'action' => 'add',
										'id' => 'GoalSettingAddForm1',
										'name' => 'GoalSettingAddForm1',
										'class' => 'form-inline',
										'inputDefaults' => array(
											'div' => false,
											'class' => 'form-control',
											'required' => true,
											)
										));
									?>
									<?php echo $this->Form->hidden('id');?>
									<?php echo $this->Form->hidden('goal_type_id', array(
										'value' => 1
										))
									?>
									<div class="row">
										<div class="form-group col-xs-6">
											<label for="GoalSettingMonthYear" style="display: block;"><?= __('Month') ?></label>
											<?php echo $this->Form->input('month', array(
												'label' => false,
												'type' => 'date',
												'dateFormat' => 'YM',
												'monthNames' => true
											)); ?>
											<input type="hidden" name="data[GoalSetting][month][day]" value="01" id="GoalSettingMonthDay">
										</div>
										<div class="form-group col-xs-4">
											<?php echo $this->Form->input('goal_value', array(
												'type' => 'number',
												'min' => '800000', 'step' => '100000',
												'value' => $team_goal_value_form,
												'placeholder' => $team_goal_value_formated
												))
											?>
										</div>
										<?php echo $this->Form->end(); ?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?= __('Close') ?></button>
									<?php echo $this->Form->input('Save', array(
										'type' => 'button',
										'div' => false,
										'label' => false,
										'class' => 'btn btn-primary',
										'name' => 'submit-team-goal',
										'onClick' => 'submit_team_goal();'
										));
									?>
								</div>

							</div>
						</div>
					</div>
				<?php endif; ?>
				<!-- /team goal modal -->
				<span class="headline"><?= __('Monthly Team Goal') ?></span>
				<span class="value"><?php echo $team_goal_value_formated; ?> <?= __('Points') ?></span>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="main-box infographic-box">
				<i class="fa fa-group red-bg"></i>
				<span class="headline"><?= __('Current Team Points') ?></span>
				<span class="value"><?php echo number_format($current_point[0]['price']); ?> <?= __('Points') ?></span>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="main-box infographic-box">
				<!-- indivisual goal modal -->

				<a data-toggle="modal" href="#indivisualGoalModal"><i class="fa fa-user red-bg"></i></a>
				<?php if($user['user_role_id'] == 1): ?>
					<div class="modal fade" id="indivisualGoalModal" tabindex="-1" role="dialog" aria-labelledby="indivisualGoalModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"><?= __('Set Individual Goal') ?></h4>
								</div>
								<div class="modal-body">
									<?php echo $this->Form->create('GoalSetting', array(
										'action' => 'addIndivisual',
										'id' => 'GoalSettingAddIndivisualForm',
										'class' => 'form-inline',
										'inputDefaults' => array(
											'div' => false,
											'class' => 'form-control',
											'required' => true,
											)
										));
									?>
									<?php echo $this->Form->hidden('id') ?>
									<?php echo $this->Form->hidden('goal_type_id', array(
										'value' => 2
										))
									?>
									<div class="row">
										<div class="form-group col-xs-6">
											<label for="GoalSettingMonthYear" style="display: block;"><?= __('Month') ?></label>
											<?php echo $this->Form->input('month', array(
												'label' => false,
												'type' => 'date',
												'dateFormat' => 'YM',
												'monthNames' => true
											)); ?>
										</div>
										<input type="hidden" name="data[GoalSetting][month][day]" value="01" id="GoalSettingMonthDay">
										<div class="form-group col-xs-4">
											<?php echo $this->Form->input('goal_value', array(
												'type' => 'number',
												'min' => '120000', 'step' => '10000',
												'value' => $indivisual_goal_value_form,
												'placeholder' => $indivisual_goal_value_formated
												))
											?>
										</div>
										<?php echo $this->Form->end(); ?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><?= __('Close') ?></button>
									<?php echo $this->Form->input('Save', array(
										'type' => 'button',
										'div' => false,
										'label' => false,
										'class' => 'btn btn-primary',
										'name' => 'submit-indivisual-goal',
										'onClick' => 'submit_indivisual_goal();'
										));
									?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<!-- /indivisual goal modal -->

				<span class="headline"><?= __('Monthly Individual Goal') ?></span>
				<span class="value"><?php echo $indivisual_goal_value_formated ?> <?= __('Points') ?></span>
			</div>
		</div>
	</div>
<!-- /Setting Goals -->
<!-- Orders -->
	<div class="row">
		<div class="col-lg-12">
			<div class="main-box clearfix">
				<header class="main-box-header clearfix">
					<h2 class="pull-left"><?= __('Current orders') ?></h2>
					<div class="filter-block pull-right">
						<div class="form-group pull-left">
							<input id="filter" type="text" class="form-control" placeholder="Search...">
							<i class="fa fa-search search-icon"></i>
						</div>
						<?php echo $this->Html->link(
							'<i class="fa fa-eye fa-lg"></i> View all orders',
							array('controller' => 'orders', 'action' => 'order_list'),
							array(
								'escape' => false,
								'class' => 'btn btn-primary pull-right'));
						?>
					<!-- Order Modal -->
						<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 3) : ?>
						<a data-toggle="modal" href="#myModal" class="btn btn-primary"><?= __('Order Form') ?></a>
						<!-- <button class="md-trigger btn btn-primary mrg-b-lg" data-modal="modal-13">3D Slit</button> -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title"><?= __('Order Form') ?></h4>
									</div>
									<div class="modal-body">
										<?php echo $this->Form->create('Order', array(
											'action' => 'add',
											'div' => false,
											'inputDefaults' => array(
												'class' => 'form-control'
												),
											));
										?>
										<?php echo $this->Form->hidden('status_type_id', array(
											'value' => 1,
										)) ?>
											<div class="form-group">
												<?php echo $this->Form->input('control_no',array(
													'label' => '管理番号',
													'placeholder' => "GK+4桁の半角数字を入力してください"
												)) ?>
												<?php echo $this->Form->error('Order.control_no'); ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('file_name', array(
													'label' => 'ファイル名',
													'placeholder' => "ファイル名を入力してください"
												)) ?>
											</div>
											<div class="form-group clearfix">
												<div class="form-inline" style="float: left;">
													<?php echo $this->Form->input('client_id', array(
														'label' => '会社名', 'style' => 'display: block;',
														'options' => $clientList,
														'empty' => "--会社名を選択--"
													)) ?>

												</div>
												<div id="clientAddForm" class="form-inline" style="float: right;">
													<label for="clientClient" style="display:block;"><?= __('会社名を追加') ?></label>
													<input id="inputClient" type="text" class="form-control" name="data[Client][client]" placeholder="半角英数字で入力してください" style="width: 195px;">
													<button type="button" class="btn btn-success" id="addClientBtn"><?= __('追加') ?></button>
												</div>
											</div>

											<div class="row form-group">
													<div class="col-lg-6 col-md-6 col-sm-6">
														<label for="datepickerDeliveryDate"><?= __('納期') ?></label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<?php echo $this->Form->input('delivery_date', array(
																'type' => 'text',
																'label' => false,
																'div' => false,
																'style' => 'width:200px;',
																'id' => 'datepickerDeliveryDate'
														)) ?>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6">
														<label for="delivery_time"><?= __('時刻') ?></label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
															<?php echo $this->Form->time('delivery_time', array(
																'class' => 'form-control',
																'label' => false,
																'div' => false,
																'style' => 'width:200px;',
																'id' => 'delivery_time',
																'value' => '17:00'
														)) ?>
														</div>
													</div>
											</div>

											<div class="form-group">
												<label for="mosaicType"><?= __('モザイクタイプ') ?></label>
												<?php echo $this->Form->input('mosaic_type_id', array(
													'legend' => false,
													'type' => 'radio',
													'before' => '<div class="radio">',
													'separator' => '</div><div class="radio">',
													'after' => '</div>',
													'options' => $mosaicTypeList,
													'value' => 1,
												)) ?>
											</div>
											<div class="form-group">
												<label for="mosaicSize"><?= __('モザイクサイズ') ?></label>
												<?php echo $this->Form->input('mosaic_size_id', array(
													'legend' => false,
													'type' => 'radio',
													'before' => '<div class="radio">',
													'separator' => '</div><div class="radio">',
													'after' => '</div>',
													'options' => $mosaicSizeList,
													'value' => 1,
												)) ?>
											</div>

											<div class="form-group">
												<label for="OrderPrice"><?= __('受注金額') ?></label>
												<div class="input-group">
													<span class="input-group-addon">￥</span>
													<?php echo $this->Form->input('price', array(
														'type' => 'text',
														'label' => false,
														'placeholder' => "半角数字で入力してください",
														'style' => "width:200px;"
													)) ?>
												</div>
											</div>

											<div class="form-group">
												<label for="OrderLength"><?= __('動画の尺') ?></label>
												<div class="input-group">
													<span class="input-group-addon"><?= __('分') ?></span>
													<?php echo $this->Form->input('length', array(
														'type' => 'text',
														'label' => false,
														'placeholder' => "半角数字で入力してください",
														'style' => 'width:200px;'
													)) ?>
												</div>
											</div>

											<div class="form-group">
												<label for="OrderTargetTime"><?= __('目標作業時間') ?></label>
												<div class="input-group">
													<span class="input-group-addon"><?= __('時間') ?></span>
													<?php echo $this->Form->input('target_time', array(
														'type' => 'text',
														'label' => false,
														'placeholder' => "半角数字で入力してください",
														'style' => 'width:200px;'
													)) ?>
												</div>
											</div>

											<div class="form-group">
												<label for="OrderNote"><?= __('備考') ?></label>
												<?php echo $this->Form->textarea('note', array(
													'class' => 'form-control',
													'rows' => '3',
													'style' => 'height:auto !important;'
												)) ?>
											</div>
										</form>
										<?php echo $this->Form->create('Client', array(
											'name' => 'ClientAddForm',
											'action' => 'add'));
										 ?>
										 <?php echo $this->Form->hidden('client'); ?>
										 <?php echo $this->Form->end(); ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?= __('Close') ?></button>
										<?php echo $this->Form->input('オーダー', array(
											'type' => 'button',
											'div' => false,
											'label' => false,
											'class' => 'btn btn-primary',
											'name' => 'submit-order',
											'onClick' => 'submit_order();'
											));
										?>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<?php endif; ?>
					<!-- /.Order Modal -->
					</div>
				</header>
				<?php echo $this->Session->flash(); ?>
				<div class="main-box-body clearfix">
					<div class="table-responsive clearfix">
						<table class="table table-hover footable toggle-circle-filled" data-page-size="50" data-filter="#filter" data-filter-text-only="true">
							<thead>
								<tr>
									<th class="text-center footable-visible footable-first-column footable-sortable"><a href="#"><span><?= __('Control No') ?></span></a></th>
									<th class="text-center"><span><?= __('Client') ?></span></th>
									<th class="text-center"><span><?= __('Quality') ?></span></th>
									<th class="text-center"><span><?= __('Mosaic Type') ?></span></th>
									<th class="text-center"><span><?= __('Mosaic Size') ?></span></th>
									<th class="text-center"><span><?= __('Length') ?></span></th>
									<th class="text-center"><span><?= __('Maybe') ?></span></th>
									<th class="text-center"><a href="#" class="asc"><span><?= __('Delivery Date') ?></span></a></th>
									<th class="text-center"><span><?= __('Note') ?></span></th>
									<th class="text-center"><span><?= __('Started') ?></span></th>
									<th class="text-center"><span><?= __('Status') ?></span></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($orderList as $order): ?>
									<tr>
										<td class="text-center">
											<?php echo $this->Html->link($order['Order']['control_no'],
												array('controller' => 'orders', 'action' => 'detail/'.$order['Order']['id']));?>
										</td>
										<td class="text-center"><?php echo $order['Client']['client'];?></td>
										<td class="text-center"><?php echo $order['Client']['quality'];?></td>
										<td class="text-center"><?php echo $order['MosaicType']['mosaic_type'];?></td>
										<td class="text-center"><?php echo $order['MosaicSize']['mosaic_size'];?></td>
										<td class="text-center"><?php echo $order['Order']['length'];?> <?= __('min') ?></td>
										<td class="text-center"><?php if($order['MosaicType']['mosaic_type'] == 'normal') {echo ceil($order['Avg']['worktime']);}else{echo ceil($order['AvgCs']['worktime']) ;} ;?> <?= __('hours') ?></td>
										<td class="text-center"><?php echo $this->Time->format('m/d', $order['Order']['delivery_date']);?>
										(<?php echo
											date('H:i', strtotime('-2 hour',  strtotime(date('H:i', strtotime($order['Order']['delivery_time'])))))
											; ?>)</td>
										<td class="text-center"><?php echo $order['Order']['note'];?></td>
										<td class="text-center"><?php echo substr($order['TaskRecord']['started'], 0, -3);?></td>
										<td class="text-center"><?php if(!isset($order['TaskRecord']['started'])){ echo $this->Btn->setStatusBtn($order['TaskRecord']['started'], $order['Order']['completed']) . $order['StatusType']['status'];}elseif($order['TaskRecord']['started']){echo '<span class="label label-warning">Working';}?></span>
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
<!-- /Orders -->
<?php if($user['user_role_id'] == 1): ?>

<?php endif; ?>

	<div class="row">

		<!-- Time Card -->
			<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2) : ?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<h2 class="pull-left"><?= __('Time Card') ?></h2>
					</header>
					<div class="main-box-body clearfix hidden-xs">
						<?php echo $this->Form->create('TimeCard', array(
						'action' => 'addAjax',
						'class' => 'form-inline',
						'inputDefaults' => array(
							'div' => false,
							'class' => 'form-control'
						))) ?>
						<div class="row">
							<div class="form-group" style="margin-bottom: 10px;">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<?php echo $this->Form->input('employee_id', array(
										'label' => array('Who?', 'class' => 'sr-only'),
										'options' => $employeeList,
										'empty' => 'Who?',
										'style' => 'width:150px;'
										)
									) ?>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										<?php echo $this->Form->input('date', array(
											'type' => 'text',
											'label' => array('Date', 'class' => 'sr-only'),
											'placeholder' => 'Date',
											'style' => array('width: 100px; line-height: 1.428571429;')
											)
										) ?>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 10px;">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<label for="TimeCardPayCutTypeId" class="sr-only"><?= __('Pay Cut Type') ?></label>
									<?php echo $this->Form->input('pay_cut_type_id', array(
										'label' => false,
										'style' => 'width:150px;',
										'options' => $payCutTypeList,
										'empty' => 'What\'s up?'
									)) ?>
									<div id="intime_form_group" class="form-group">
										<div class="input-group input-append bootstrap-timepicker">
											<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
												<?php echo $this->Form->input('in_time', array(
													'type' => 'text',
													'label' => array('In Time', 'class' => 'sr-only'),
													'style' => 'width:100px;',
													'id' => 'timepickerIntime'
												)) ?>
										</div>
									</div>
									<div id="outtime_form_group" class="form-group">
										<div class="input-group input-append bootstrap-timepicker">
											<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
											<?php echo $this->Form->input('out_time', array(
												'type' => 'text',
												'label' => array('Out Time', 'class' => 'sr-only'),
												'style' => 'width:100px;',
												'id' => 'timepickerOuttime'
											)) ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group" style="display: block; margin-top: 5px; margin-bottom: 5px;">
							<label for="TimeCardNote" class="sr-only"><?= __('Reason') ?></label>
							<?php echo $this->Form->textarea('note', array(
									'class' => 'form-control',
									'style' => 'width:100%;',
									'placeholder' => 'Enter Reason',
									'required' => true
								)) ?>
						</div>
						<button class="btn btn-primary pull-right" type="button"><i class="fa fa-plus-circle fa-lg"></i> <?= __('add') ?></button>
						<?php echo $this->Html->link('edit', array(
							'controller' => 'time_cards',
							'action' => 'edit'),
							array('class' => 'hidden', 'id' => 'time-card-edit-link')
						); ?>
						<?php echo $this->Form->end(); ?>
					</div>
					<hr style="margin-top: 0px !important;">
					<div class="main-box-body clearfix">
						<div class="table-responsive clearfix">
							<table id="time-card-table" class="table table-bordered table-first-none">
								<thead>
									<tr>
										<th class="text-center"><span><?= __('Date') ?></span></a></th>
										<th class="text-center"><span><?= __('Name') ?></span></th>
										<th class="text-center"><span><?= __('Type') ?></span></th>
										<th class="text-center"><span><?= __('In Time') ?></span></th>
										<th class="text-center"><span><?= __('Out Time') ?></span></th>
										<th class="text-center"><span><?= __('Reason') ?></span></th>
										<th class="text-center"><span></span></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($timeCardList as $timeCard) : ?>
										<tr>
											<td class="text-center">
												<?php echo $this->Time->format('m/d', $timeCard['TimeCard']['date']);?>
											</td>
											<td class="text-center">
												<?php echo $timeCard['Employee']['employee_no'];?>
											</td>
											<td class="text-center">
												<?php echo $timeCard['PayCutType']['type'];?>
											</td>
											<td class="text-center">
												<?php echo $this->TimeCard->setInTime(
													$timeCard['TimeCard']['pay_cut_type_id'], $this->Time->format('h:i A', $timeCard['TimeCard']['in_time']));?>
											</td>
											<td class="text-center">
												<?php echo $this->TimeCard->setOutTime(
													$timeCard['TimeCard']['pay_cut_type_id'], $this->Time->format('h:i A', $timeCard['TimeCard']['out_time']));?>
											</td>
											<td class="">
												<?php echo $timeCard['TimeCard']['note'];?>
											</td>
											<td class="text-center">
											<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',
												array('controller' => 'time_cards', 'action' => 'edit/' . $timeCard['TimeCard']['id']),
												array('class' => 'table-link','escape' => false)
												);?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<!-- /Time Card -->
		<!-- To do Lists -->
			<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2 ||$user['user_role_id'] == 4): ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Todo') ?></h2>
						</header>
						<div class="main-box-body clearfix">
							<?php echo $this->Form->create('TodoList', array(
								'action' => 'addAjax',
								'class' => 'todo_form'
							)) ?>
								<div class="form-group">
									<label class="sr-only" for="todoTitle"><?= __('Title') ?></label>
									<?php echo $this->Form->input('title', array(
										'class' => 'form-control new_todo',
										'label' => false,
										'required' => true,
										'placeholder' => 'Enter the Task'
									)) ?>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<label class="sr-only" for="staffId"><?= __('Who\'s task?') ?></label>
												<?php echo $this->Form->input('employee_id', array(
													'class' => 'form-control employee_todo',
													'type' => 'select',
													'options' => $employeeList,
													'label' => false,
													'empty' => 'Who\'s task?',
													'style' => array('max-width:200px'),
													'required' => true,
													'data-name' => ''
												)) ?>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<label class="sr-only" for="datepickerDeadline"><?= __('Deadline') ?></label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<?php echo $this->Form->date('deadline', array(
													'class' => 'form-control deadline_todo',
													'type' => 'date',
													'style' => 'width:160px'
												)) ?>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="sr-only" for="priorityId"><?= __('Priority') ?></label>
									<?php echo $this->Form->input('priority_type_id', array(
										'class' => 'form-control priority_todo',
										'options' => array('1' => 'High Priority', '2' => 'Low Priority'),
										'style' => 'max-width:200px',
										'empty' => 'Priority?',
										'label' => false,
										'data-priority' => ''
									)) ?>
								<button type="button" class="btn btn-primary pull-right todo_btn">
									<i class="fa fa-plus-circle fa-lg"></i>
									add
								</button>
								</div>
							<?php echo $this->Form->end(); ?>
						</div>
						<?php echo $this->Form->create('TodoList', array(
							'action' => 'updateAjax',
							'class' => 'hide update_form',
						)) ?>
						<?php echo $this->Form->end(); ?>

						<hr style="margin-top: 0px !important;">


						<div class="main-box-body clearfix" ng-controller="todoCtrl">
							<ul class="widget-todo">
								<?php foreach ($todos as $todo) : ?>
									<li class="clearfix" id="todo_<?php echo $todo['TodoList']['id']; ?>">
									<div class="name">
										<div class="checkbox-nice">
											<input type="checkbox" value="<?php echo $todo['TodoList']['status_type_id']; ?>" id="chk_<?php echo $todo['TodoList']['id']; ?>" data-id="<?php echo $todo['TodoList']['id']; ?>" class="todo_chk" data-status="<?php echo $todo['TodoList']['status_type_id']; ?>">
											<label for="chk_<?php echo $todo['TodoList']['id']; ?>">
												<?php echo $todo['TodoList']['title']; ?>
											</label>
										</div>
									</div>
									<div class="actions">
									<span class="label label-default employee_label"><?php echo $todo['Employee']['employee_no']; ?></span>
									<span class="label priority_label" data-priority-id="<?php echo $todo['TodoList']['priority_type_id'];?>"></span>
									<span class="label label-danger deadline_label"><?php echo date('m/d', strtotime($todo['TodoList']['deadline'])); ?></span>
										<?php echo $this->Html->link(
											'<i class="fa fa-pencil"></i>',
											array('controller' => 'todo_lists', 'action' => 'edit', $todo['TodoList']['id']),
											array('escape' => false, 'class' => 'edit_btn table-link')
										) ?>
										<?php if($user['user_role_id'] == 1): ?>
										<?php echo $this->Form->postlink(
											'<i class="fa fa-trash-o"></i>',
											array('controller' => 'todo_lists', 'action' => 'delete',$todo['TodoList']['id']),
											array('escape' => false, 'class' => 'delete_btn table-link red')
										) ?>
										<?php endif; ?>
									</div>
								</li>
								<?php endforeach; ?>


								<li class="clearfix hide temp_todo" id="">
									<div class="name">
										<div class="checkbox-nice">
											<input type="checkbox" id="" data-id="" value="" class="todo_chk" data-status="">
											<label for="">

											</label>
										</div>
									</div>
									<div class="actions">
									<span class="label label-default employee_label"></span>
									<span class="label priority_label"></span>
									<span class="label label-danger deadline_label"></span>
										<?php echo $this->Html->link(
											'<i class="fa fa-pencil"></i>',
											array('controller' => 'todo_lists', 'action' => 'edit'),
											array('escape' => false, 'class' => 'edit_btn table-link')
										) ?>
										<?php if($user['user_role_id'] == 1): ?>
										<?php echo $this->Form->postlink(
											'<i class="fa fa-trash-o"></i>',
											array('controller' => 'todo_lists', 'action' => 'delete'),
											array('escape' => false, 'class' => 'delete_btn table-link red')
										) ?>
										<?php endif; ?>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<!-- /Todo Lists -->
	</div>

	<!-- page-js -->
	<?php
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.resize.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.threshold', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.axislabels', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.sort', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
	?>

	<!-- form-js -->
	<?php
		echo $this->Html->script('bootstrap-datepicker', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('bootstrap-timepicker.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('jquery.pwstrength', array('inline' => false, 'block' => 'form-js'));
	?>

	<!-- modal-js -->
	<?php
		echo $this->Html->script('modernizr.custom', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('classie', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('modalEffects', array('inline' => false, 'block' => 'modal-js'));
	?>

	<!-- inline-scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

		//todo checkbox
		$(document).on('click','.todo_chk',  function(){
			var url = $('.update_form').attr('action');
			var id = $(this).data('id');
			var status = '';
			status = $(this).val();
			$.ajax({
				url:url,
				type:'POST',
				dataType: 'json',
				data: {
					id:id,
					status_type_id:status
				}, success: function(rs){
					$('input#chk_'+id).val(rs);
					$('input#chk_'+id).attr('data-status', rs);
					alert('success');
				}, error: function(){
					alert('error');
				}
			});
			return true;
		});



		$(function(){
			$('.todo_chk').each(function(){
				if($(this).data('status') == 1){
					$(this).prop('checked', 'checked');
				}
			});
			$('.priority_label').each(function(){
				var priority = $(this).attr('data-priority-id');
				if(priority == 1){$(this).addClass('label-danger');$(this).text('High');}
				else if(priority == 2){$(this).addClass('label-success');$(this).text('Low');}
			});
		});
		//todo create
		$(function(){
			$(document).on('click','.todo_btn', function(){
				var title = $('.new_todo').val();
				var employee_id = $('.employee_todo').val();
				var employee_name = $('.employee_todo option:selected').text();
				var deadline = $('.deadline_todo').val();
				var priority_type_id = $('.priority_todo').val();
				var priority_type = $('.priority_todo option:selected').text();
				var status_type_id = 0;
				var url = $('.todo_form').attr('action');

				$.ajax({
					url:url,
					type: 'POST',
					dataType: 'json',
					data: {
						title:title,
						employee_id:employee_id,
						deadline:deadline,
						priority_type_id:priority_type_id,
						status_type_id:status_type_id
					}, success:function(rs){
						$li = $('li.hide').clone();
						$li.removeClass('hide');
						$li.attr('id', 'todo_'+rs);
						$li.find('input').val(status_type_id);
						$li.find('input').attr('data-id', rs);
						$li.find('input').attr('id', 'chk_'+rs);
						$li.find('input').attr('data-status', 0);
						$li.find('label').attr('id', 'chk_'+rs);
						$li.find('label').text(title);
						$li.find('.employee_label').text(employee_name);
						$li.find('.priority_label').text(priority_type);
						$li.find('.deadline_label').text(deadline);
						$li.find('.edit_btn').attr('href', '/'+rs);
						$('.widget-todo').prepend($li);
						$('.new_todo').val("");
						$('.employee_id').val("");
						$('.deadline').val("");
						$('.priority_type_id').val("");
					}, error: function(exception){
						console.log(exception);
					}
				});
			});
		});


		//月間目標 Team Submitボタン
		function submit_team_goal(){
			document.forms['GoalSettingAddForm1'].submit();
		}
		//月間目標 Indivisual Submitボタン
		function submit_indivisual_goal(){
			document.forms['GoalSettingAddIndivisualForm'].submit();
		}
		//オーダーSubmitボタン
		function submit_order(){
			document.forms['OrderAddForm'].submit();
		}

		//OrderForm内Client追加Formの処理
		$(document).ready(function() {
			//会社名を追加
			$('#inputClient').on('change', function(){
			var addClientForm = document.getElementById("ClientAddForm");
			var client = $('#inputClient').val();
			document.ClientAddForm.elements["data[Client][client]"].value = client;
			});
			$('#addClientBtn').click(function(){
				document.forms['ClientAddForm'].submit();
			});

		//Timecard
		//In TimeとOut Time表示切り替え
		$('#TimeCardPayCutTypeId').bind('change', function(){
			//1:off, 4:no call off,5:paid off,7:holiday work
			if($('#TimeCardPayCutTypeId').val() == 1 || $('#TimeCardPayCutTypeId').val() == 4 || $('#TimeCardPayCutTypeId').val() == 5 || $('#TimeCardPayCutTypeId').val() == 7){
				$('#intime_form_group').hide();
				$('#outtime_form_group').hide();

				//2:late
			} else if($('#TimeCardPayCutTypeId').val() == 2) {
				$('#intime_form_group').show();
				$('#outtime_form_group').hide();
				//3:early leave,6:overtime work, 8:2$ overtime
			} else if($('#TimeCardPayCutTypeId').val() == 3 || $('#TimeCardPayCutTypeId').val() == 6 || $('#TimeCardPayCutTypeId').val() == 8) {
				$('#intime_form_group').hide();
				$('#outtime_form_group').show();
			}
		})

		//TimeCardをAjaxで処理
		//Addボタンを押したら、Ajaxで保存
		$('#TimeCardAddAjaxForm button').click(function(){
			var employee_id     = $('#TimeCardEmployeeId').val();
			var employee_no     = $('#TimeCardEmployeeId option:selected').text();
			var date            = $('#TimeCardDate').val();
			var pay_cut_type_id = $('#TimeCardPayCutTypeId').val();
			var pay_cut_type	  = $('#TimeCardPayCutTypeId option:selected').text();
			var note            = $('#TimeCardNote').val();
			var timeCardForm    = $('#TimeCardAddAjaxForm').attr('action');
			//id={1:off, 2:late, 3:early, 4:no call off,5:paid off}
			function get_in_time(pay_cut_type_id){
				if(pay_cut_type_id == 2){
					return $('#timepickerIntime').val();
				} else {
					return '';
				}
			};
			function get_out_time(pay_cut_type_id){
				if(pay_cut_type_id == 3 || pay_cut_type_id == 6 || pay_cut_type_id == 8){
					return $('#timepickerOuttime').val();
				} else {
					return '';
				}
			};
			var in_time = get_in_time(pay_cut_type_id);
			var out_time = get_out_time(pay_cut_type_id);
			$.ajax({
				url: timeCardForm,
				type: 'POST',
				dataType: 'json',
				data: {
					employee_id:     employee_id,
					date:            date,
					pay_cut_type_id: pay_cut_type_id,
					in_time:         in_time,
					out_time:        out_time,
					note:            note
				},
				success: function(rs){
					swal({
						title: "Success!",
						text: "Save Time Card",
						type:"success",
						confirmButtonText:"OK"
					});
					var newTimeCard = $(
						'<tr id="time_card_' + rs + '" data-id="' + rs + '">' +
						'<td class="text-center"><span></span></td>' +
						'<td class="text-center"><span></span></td>' +
						'<td class="text-center"><span></span></td>' +
						'<td class="text-center"><span></span></td>' +
						'<td class="text-center"><span></span></td>' +
						'<td class=""><span></span></td>' +
						'<td class="text-center"><a href="' + $('#time-card-edit-link').attr('href') + '/' + rs + '" class="table-link"><i class="fa fa-pencil"></i></a></td></tr>'
					);

					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(0)').text(date);
					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(1)').text(employee_no);
					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(2)').text(pay_cut_type);
					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(3)').text(in_time);
					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(4)').text(out_time);
					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(5)').text(note);
					$('#time-card-table').append(newTimeCard).find('tr:last span:eq(6)').text($('#time-card-edit-link').attr('href')+'/'+rs);

          $('#TimeCardEmployeeId').val("");
					$('#TimeCardDate').val("");
					$('#TimeCardPayCutTypeId').val("");
					$('#TimeCardNote').val("");
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
		});
	<?php $this->Html->scriptEnd(); ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	$(document).ready(function() {
		//datepicker
		$('#datepickerDeliveryDate').datepicker({
		  format: 'yyyy-mm-dd'
		});

		$('#TimeCardDate').datepicker({
		  format: 'yyyy-mm-dd'
		});
		$('#datepickerTimeCard').datepicker({
		  format: 'yyyy-mm-dd',
		});

		$('#datepickerDateComponent').datepicker();

		$('#timepickerIntime').timepicker({
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
		$('#timepickerOuttime').timepicker({
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

		$(document).ready(function() {
			$('.footable').footable();
		});

	});
	<?php $this->Html->scriptEnd(); ?>