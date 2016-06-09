<?php $this->set('title_for_layout', 'Individual Achievements'); ?>
	<?php $this->Html->addCrumb('Individual Achievements', '/task_records/individual_achievements/'); ?>
						<h1>Individual Achievements</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="main-box infographic-box">
						<a data-toggle="modal" href="#indivisualGoalModal"><i class="fa fa-user red-bg"></i></a>
						<span class="headline">Monthly Individual Goal</span>
						<span class="value"><?php echo number_format($individualGoal) ?> Points</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2><?php echo "Achievements [" . $dateArray[0] . '/' . $dateArray[1] . "]" ?></h2>
						</header>

						<!-- Month search box -->
						<div class="main-box-body clearfix">
							<div class="dataTables_length">
								<?php echo $this->Form->create('task_records', array(
								'type' => 'get',
								'action' => 'individual_achievements',
								'class' => 'form-inline',
								'inputDefaults' => array(
									'div' => 'form-group',
									'class' => 'form-control'
								))); ?>
									<?php echo $this->Form->input('year', array(
										'label' => array('class' => 'sr-only'),
										'type' => 'number',
										'min' => '2014',
										'value' => $dateArray[0],
										'style' => 'width: 100px;'
									)) ?>
									<?php echo $this->Form->input('month', array(
										'label' => array('class' => 'sr-only'),
										'type' => 'number',
										'min' => '1',
										'max' => '12',
										'value' => $dateArray[1]
									)) ?>
									<button type="button" class="btn btn-primary"><i class="fa fa-search"></i> search</button>
									<a href="#" id="achievement-pager"></a>
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
						<!-- /Month search box -->


						<div class="main-box-body clearfix">
							<div class="tabs-wrapper">
								<!-- tab menu -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab-pie" data-toggle="tab">Pie</a></li>
									<li><a href="#tab-graph" data-toggle="tab">Graph</a></li>
								</ul>
								<!-- /tab menu -->
								<!-- contents -->
								<div class="tab-content">
									<!-- Pie Charts -->
										<div class="tab-pane fade in active" id="tab-pie">
											<div class="main-box-body clearfix">
												<div class="row">
													<div class="col-md-12">
														<div class="main-box clearfix">
															<header class="main-box-header clearfix">
																<h2>Achievement Rate</h2>
															</header>
															<?php foreach($individualRecords as $val): ?>
																<div class="col-lg-3 col-md-6 col-sm-6">
																	<div class="main-box clearfix project-box emerald-box">
																		<div class="main-box-body clearfix">
																			<div class="project-box-header emerald-bg">
																				<div class="name">
																				<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2 || $user['employee_id'] == $employee['Employee']['id']): ?>
																					<?php	echo $this->Html->link($val['Employee']['employee_no'], array(
																							'controller' => 'employees', 'action' => 'profile/'.$val['TaskRecord']['employee_id']
																							));
																					?>
																				<?php else: ?>
																					<?php echo '<a href="">'. $val['Employee']['employee_no'].'</a>'; ?>
																				<?php endif; ?>
																				</div>
																			</div>
																			<div class="project-box-content">
																				<span class="chart" data-percent="<?php echo number_format((int)$val[0]['sumEditPoint']/(int)$individualGoal*100, 2);?>">
																					<span class="percent"></span>%<br/>
																					<span class="lbl">completed</span>
																				</span>
																			</div>
																			<div class="project-box-footer clearfix">
																				<a href="#">
																					<span class="value"><?php echo number_format($val[0]['sumEditLength']);?></span>
																					<span class="label">Mins</span>
																				</a>
																				<a href="#">
																					<span class="value"><?php echo number_format($val[0]['sumWorktime']);?></span>
																					<span class="label">Hours</span>
																				</a>
																				<a href="#">
																					<span class="value"><?php echo number_format($val[0]['sumEditPoint']);?></span>
																					<span class="label">Points</span>
																				</a>
																				<a href="#">
																					<span class="value"><?php echo number_format($val[0]['pointPerHour']);?></span>
																					<span class="label">P/h</span>
																				</a>
																			</div>
																			<div class="project-box-ultrafooter clearfix">
																				<?php echo $this->Html->image('members/'. $val['Employee']['prof_img'], array(
																					'class' => 'project-img-owner',
																					'data-toggle' => 'tooltip',
																					'title' => $val['Employee']['employee_no']
																					));
																				?>
																				<?php	echo $this->Html->link('<i class="fa fa-arrow-circle-right fa-lg"></i>', array(
																							'controller' => 'employees', 'action' => 'profile/'.$val['TaskRecord']['employee_id']
																							),
																					array('class' => 'link pull-right', 'escape' => false));
																				?>
																			</div>
																		</div>
																	</div>
																</div>
															<?php endforeach; ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									<!-- /Pie Charts -->
									<!-- Ranking Charts -->
										<div class="tab-pane fade in" id="tab-graph">
											<div class="main-box-body clearfix">
												<div class="row">
													<div class="col-md-12">
														<div class="main-box">
															<header class="main-box-header clearfix">
																<h2 class="pull-left">Point / Hour</h2>
															</header>

															<div class="main-box-body clearfix">
																<div class="row">
																	<div class="col-md-12">
																		<div id="ranking" style="height: 360px;width: 100%; padding: 0px; position: relative;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-box-body clearfix">
												<div class="row">
													<div class="col-md-12">
														<div class="main-box">
															<header class="main-box-header clearfix">
																<h2 class="pull-left">Total Points</h2>
															</header>

															<div class="main-box-body clearfix">
																<div class="row">
																	<div class="col-md-12">
																		<div id="total-points" style="height: 360px;width: 100%; padding: 0px; position: relative;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<!-- /Ranking Charts -->

								</div>
								<!-- /contents -->
							</div>
						</div>


					</div>
				</div>
			</div>



	<!-- page-js -->
	<?php
		echo $this->Html->script('flot/jquery.flot.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.time.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.resize.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.threshold', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.axislabels', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('jquery.easypiechart.min', array('inline' => false, 'block' => 'page-js'));
	?>

	<!-- inline-scripts -->
	<?php $this->Html->scriptStart(array('inlie' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function(){
			//create link
			$('#task_recordsIndividualAchievementsForm button').click(function(){
				var formUrl = $('#task_recordsIndividualAchievementsForm').attr('action');
				var year  = $('#task_recordsYear').val();
				var month = $('#task_recordsMonth').val();
				var link = formUrl + '/' + year + '/' + month;
				$('#achievement-pager').attr('href', link);
				location.href = link;
			});

			//CHARTS
	    function gd(year, day, month) {
				return new Date(year, month - 1, day).getTime();
			}

			if ($('#ranking').length) {
     		<?php foreach($graphData as $val) : ?>
					<?php echo $val[1] ?>
     		<?php endforeach; ?>

			var series = new Array();

				<?php foreach($graphData as $employee_no) : ?>
					series.push({
						data: <?php echo "data". $employee_no[0] ?>,
						lines: {
							show : true,
							lineWidth: 3,
						},
						points:{
							fillColor: "white",
							pointWidth:1,
							show:true
						},
						label: '<?php echo $employee_no[0] ?>'
					});
				<?php endforeach; ?>



			$.plot("#ranking", series, {

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
				},


			});

			var previousPoint = null;
			$("#ranking").bind("plothover", function (event, pos, item) {
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

		$(document).ready(function(){
			//CHARTS
	    function gd(year, day, month) {
				return new Date(year, month - 1, day).getTime();
			}

			if ($('#total-points').length) {
     		<?php foreach($graphData2 as $val2) : ?>
					<?php echo $val2[1] ?>
     		<?php endforeach; ?>

			var series = new Array();

				<?php foreach($graphData2 as $employee_no) : ?>
					series.push({
						data: <?php echo "data". $employee_no[0] ?>,
						lines: {
							show : true,
							lineWidth: 3,
						},
						points:{
							fillColor: "white",
							pointWidth:1,
							show:true
						},
						label: '<?php echo $employee_no[0] ?>'
					});
				<?php endforeach; ?>



			$.plot("#total-points", series, {

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
				},


			});

			var previousPoint = null;
			$("#total-points").bind("plothover", function (event, pos, item) {
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



		$(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutBounce',
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				},
				barColor: '#3498db',
				trackColor: '#f2f2f2',
				scaleColor: false,
				lineWidth: 8,
				size: 130,
				animate: 1500
			});
		});

	<?php $this->Html->scriptEnd(); ?>

</body>
</html>