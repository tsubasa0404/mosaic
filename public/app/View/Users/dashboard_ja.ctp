<?php $this->set('title_for_layout', 'ダッシュボード'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>

					<h1>ダッシュボード</h1>
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
									<h4 class="modal-title">Set Team Goal</h4>
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
											<label for="GoalSettingMonthYear" style="display: block;">Month</label>
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
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
				<span class="headline">月間売上目標</span>
				<span class="value"><?php echo $team_goal_value_formated; ?> 円</span>
			</div>
		</div>

		<div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="main-box infographic-box">
				<i class="fa fa-group red-bg"></i>
				<span class="headline">現在の納品金額</span>
				<span class="value"><?php echo number_format($current_point[0]['price']); ?> 円</span>
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
									<h4 class="modal-title">Set Individual Goal</h4>
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
											<label for="GoalSettingMonthYear" style="display: block;">Month</label>
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
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

				<span class="headline">月間個人売上目標</span>
				<span class="value"><?php echo $indivisual_goal_value_formated ?> 円</span>
			</div>
		</div>
	</div>
<!-- /Setting Goals -->
<!-- Orders -->
	<div class="row">
		<div class="col-lg-12">
			<div class="main-box clearfix">
				<header class="main-box-header clearfix">
					<h2 class="pull-left">現在のオーダー状況</h2>
					<div class="filter-block pull-right">
						<div class="form-group pull-left">
							<input id="filter" type="text" class="form-control" placeholder="Search...">
							<i class="fa fa-search search-icon"></i>
						</div>
						<?php echo $this->Html->link(
							'<i class="fa fa-eye fa-lg"></i> 過去のオーダー一覧',
							array('controller' => 'orders', 'action' => 'order_list'),
							array(
								'escape' => false,
								'class' => 'btn btn-primary pull-right'));
						?>
					<!-- Order Modal -->
						<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 3) : ?>
						<a data-toggle="modal" href="#myModal" class="btn btn-primary">オーダーフォーム</a>
						<!-- <button class="md-trigger btn btn-primary mrg-b-lg" data-modal="modal-13">3D Slit</button> -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">オーダーフォーム</h4>
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
													<label for="clientClient" style="display:block;">会社名を追加</label>
													<input id="inputClient" type="text" class="form-control" name="data[Client][client]" placeholder="半角英数字で入力してください" style="width: 195px;">
													<button type="button" class="btn btn-success" id="addClientBtn">追加</button>
												</div>
											</div>

											<div class="row">
												<div class="form-group">
													<div class="col-lg-6 col-md-6 col-sm-6">
														<label for="datepickerDeliveryDate">納期</label>
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
														<label for="delivery_time">時刻</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
															<?php echo $this->Form->time('delivery_time', array(
																'class' => 'form-control',
																'label' => false,
																'div' => false,
																'style' => 'width:200px;',
																'id' => 'delivery_time',
																'value' => '19:00'
														)) ?>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label for="mosaicType">モザイクタイプ</label>
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
												<label for="mosaicSize">モザイクサイズ</label>
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
												<label for="OrderPrice">受注金額</label>
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
												<label for="OrderLength">動画の尺</label>
												<div class="input-group">
													<span class="input-group-addon">分</span>
													<?php echo $this->Form->input('length', array(
														'type' => 'text',
														'label' => false,
														'placeholder' => "半角数字で入力してください",
														'style' => 'width:200px;'
													)) ?>
												</div>
											</div>

											<div class="form-group">
												<label for="OrderTargetTime">目標作業時間</label>
												<div class="input-group">
													<span class="input-group-addon">時間</span>
													<?php echo $this->Form->input('target_time', array(
														'type' => 'text',
														'label' => false,
														'placeholder' => "半角数字で入力してください",
														'style' => 'width:200px;'
													)) ?>
												</div>
											</div>

											<div class="form-group">
												<label for="OrderNote">備考</label>
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
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
									<th class="text-center footable-visible footable-first-column footable-sortable"><a href="#"><span>管理番号</span></a></th>
									<th class="text-center"><span>会社名</span></th>
									<th class="text-center"><span>モザイクタイプ</span></th>
									<th class="text-center"><span>モザイクサイズ</span></th>
									<th class="text-center"><span>動画の尺</span></th>
									<th class="text-center"><span>推定作業時間</span></th>
									<th class="text-center"><a href="#" class="asc"><span>納期</span></a></th>
									<th class="text-center"><span>備考</span></th>
									<th class="text-center"><span>開始日時</span></th>
									<th class="text-center"><span>進捗状況</span></th>
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
										<td class="text-center"><?php echo $order['MosaicType']['mosaic_type'];?></td>
										<td class="text-center"><?php echo $order['MosaicSize']['mosaic_size'];?></td>
										<td class="text-center"><?php echo $order['Order']['length'];?> 分</td>
										<td class="text-center"><?php if($order['MosaicType']['mosaic_type'] == 'normal') {echo ceil($order['Avg']['worktime']);}else{echo ceil($order['AvgCs']['worktime']) ;} ;?> 時間</td>
										<td class="text-center"><?php echo $this->Time->format('m/d', $order['Order']['delivery_date']);?>(<?php echo $order['Order']['delivery_time']; ?>)</td>
										<td class="text-center"><?php echo $order['Order']['note'];?></td>
										<td class="text-center"><?php echo substr($order['TaskRecord']['started'], 0, -3);?></td>
										<td class="text-center"><?php if(!isset($order['TaskRecord']['started'])){ echo $this->Btn->setStatusBtn($order['TaskRecord']['started'], $order['Order']['completed']) . $order['StatusType']['status'];}elseif($order['TaskRecord']['started']){echo '<span class="label label-warning">作業中';}?></span>
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
	<div class="row">


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

		//In TimeとOut Time表示切り替え
		$('#TimeCardPayCutTypeId').bind('change', function(){
			if($('#TimeCardPayCutTypeId').val() == 1 || $('#TimeCardPayCutTypeId').val() == 4 || $('#TimeCardPayCutTypeId').val() == 5 || $('#TimeCardPayCutTypeId').val() == 7){
				$('#intime_form_group').hide();
				$('#outtime_form_group').hide();
			} else if($('#TimeCardPayCutTypeId').val() == 2) {
				$('#intime_form_group').show();
				$('#outtime_form_group').hide();
			} else if($('#TimeCardPayCutTypeId').val() == 3 || $('#TimeCardPayCutTypeId').val() == 6) {
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
				if(pay_cut_type_id == 3 || pay_cut_type_id == 6){
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


	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		if ($('#graph-bar').length) {
			var data1 = [
			    [gd(2015, 1, 1), 838], [gd(2015, 1, 2), 749], [gd(2015, 1, 3), 634], [gd(2015, 1, 4), 1080], [gd(2015, 1, 5), 850], [gd(2015, 1, 6), 465], [gd(2015, 1, 7), 453], [gd(2015, 1, 8), 646], [gd(2015, 1, 9), 738], [gd(2015, 1, 10), 899], [gd(2015, 1, 11), 830], [gd(2015, 1, 12), 789]
			];

			var data2 = [
			    [gd(2015, 1, 1), 342], [gd(2015, 1, 2), 721], [gd(2015, 1, 3), 493], [gd(2015, 1, 4), 403], [gd(2015, 1, 5), 657], [gd(2015, 1, 6), 782], [gd(2015, 1, 7), 609], [gd(2015, 1, 8), 543], [gd(2015, 1, 9), 599], [gd(2015, 1, 10), 359], [gd(2015, 1, 11), 783], [gd(2015, 1, 12), 680]
			];

			var series = new Array();

			series.push({
				data: data1,
				bars: {
					show : true,
					barWidth: 24 * 60 * 60 * 12000,
					lineWidth: 1,
					fill: 1,
					align: 'center'
				},
				label: 'Revenues'
			});
			series.push({
				data: data2,
				color: '#e84e40',
				lines: {
					show : true,
					lineWidth: 3,
				},
				points: {
					fillColor: "#e84e40",
					fillColor: '#ffffff',
					pointWidth: 1,
					show: true
				},
				label: 'Orders'
			});

			$.plot("#graph-bar", series, {
				colors: ['#03a9f4', '#f1c40f', '#2ecc71', '#3498db', '#9b59b6', '#95a5a6'],
				grid: {
					tickColor: "#f2f2f2",
					borderWidth: 0,
					hoverable: true,
					clickable: true
				},
				legend: {
					noColumns: 1,
					labelBoxBorderColor: "#000000",
					position: "ne"
				},
				shadowSize: 0,
				xaxis: {
					mode: "time",
					tickSize: [1, "month"],
					tickLength: 0,
					// axisLabel: "Date",
					axisLabelUseCanvas: true,
					axisLabelFontSizePixels: 12,
					axisLabelFontFamily: 'Open Sans, sans-serif',
					axisLabelPadding: 10
				}
			});

			var previousPoint = null;
			$("#graph-bar").bind("plothover", function (event, pos, item) {
				if (item) {
					if (previousPoint != item.dataIndex) {

						previousPoint = item.dataIndex;

						$("#flot-tooltip").remove();
						var x = item.datapoint[0],
						y = item.datapoint[1];

						showTooltip(item.pageX, item.pageY, item.series.label, y );
					}
				}
				else {
					$("#flot-tooltip").remove();
					previousPoint = [0,0,0];
				}
			});

			function showTooltip(x, y, label, data) {
				$('<div id="flot-tooltip">' + '<b>' + label + ': </b><i>' + data + '</i>' + '</div>').css({
					top: y + 5,
					left: x + 20
				}).appendTo("body").fadeIn(200);
			}
		}

	});
	<?php $this->Html->scriptEnd(); ?>