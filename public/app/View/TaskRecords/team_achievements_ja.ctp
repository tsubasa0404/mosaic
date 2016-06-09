<?php $this->set('title_for_layout', '全体の業績'); ?>
<?php $this->Html->addCrumb('全体の業績', '/task_records/team_achievements'); ?>
											<h1>全体の業績</h1>
										</div>
									</div>
								</div>
							<!-- /Header -->
<!-- Achievement Tables -->
	<div class="row">
		<div class="col-md-12">
			<div class="main-box clearfix">
				<header class="main-box-header clearfix">
					<h2><?php echo $dateArray[0] . '/' . $dateArray[1] . "の業績" ?></h2>
				</header>
				<!-- Month search box -->
					<div class="main-box-body clearfix">
						<div class="dataTables_length">
							<?php echo $this->Form->create('task_records', array(
							'type' => 'get',
							'action' => 'team_achievements',
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
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab-normal-mosaic" data-toggle="tab">通常モザイク</a></li>
							<li><a href="#tab-cs-mosaic" data-toggle="tab">CS</a></li>
							<li><a href="#tab-client" data-toggle="tab">会社別</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-normal-mosaic">
								<div class="main-box-body clearfix">
									<div class="row">
										<div class="col-md-5 col-sm-12 col-sm-12">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>顧客</h2>
												</header>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered  table-total table-first-none">
															<thead>
																<tr>
																	<th class="text-center"><span>尺</span></th>
																	<th class="text-center"><span>本数</span></th>
																	<th class="text-center"><span>納品金額</span></th>
																	<th class="text-center"><span>平均作業時間</span></th>
																	<th class="text-center"><span>時間あたり売上</span></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($normalClientLength as $val) : ?>
																	<?php
																		echo '<tr>';
																		echo '<td class="text-center">' . $val['Order']['length'] . ' 分</td>';
																		echo '<td class="text-center">' . $val[0]['cnt'] . ' 本</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumPrice']) . ' 円</td>';
																		echo '<td class="text-center">' . number_format($val[0]['avgWorktime'], 1) . ' 時間</td>';
																		echo '<td class="text-center">' . number_format($val[0]['pricePerHour']) . ' 円/時</td>';
																		echo '</tr>';
																	?>
																<?php endforeach ; ?>
																<tr>
																	<td class="text-center">計</td>
																	<td class="text-center"><?php echo $normalClientTotal[0][0]['cnt'] ?> 本</td>
																	<td class="text-center"><span><?php echo number_format($normalClientTotal[0][0]['sumPrice'])?> 円</span></td>
																	<td class="text-center">-</td>
																	<td class="text-center"><?php echo number_format($normalClientTotal[0][0]['pricePerHour'])?> 円/時</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5 col-sm-12">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>極楽</h2>
												</header>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered table-total table-first-none">
															<thead>
																<tr>
																	<th class="text-center"><span>尺</span></th>
																	<th class="text-center"><span>本数</span></th>
																	<th class="text-center"><span>納品金額</span></th>
																	<th class="text-center"><span>平均作業時間</span></th>
																	<th class="text-center"><span>時間あたり売上</span></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($normalGKLength as $val) : ?>
																	<?php
																		echo '<tr>';
																		echo '<td class="text-center">' . $val['Order']['length'] . ' 分</td>';
																		echo '<td class="text-center">' . $val[0]['cnt'] . ' 本</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumPrice']) . ' 円</td>';
																		echo '<td class="text-center">' . number_format($val[0]['avgWorktime'], 1) . ' 時間</td>';
																		echo '<td class="text-center">' . number_format($val[0]['pricePerHour']) . ' 円/時</td>';
																		echo '</tr>';
																	?>
																<?php endforeach ; ?>
																<tr>
																	<td class="text-center">計</td>
																	<td class="text-center"><?php echo $normalGKTotal[0][0]['cnt'] ?> 本</td>
																	<td class="text-center"><span><?php echo number_format($normalGKTotal[0][0]['sumPrice'])?> 円</span></td>
																	<td class="text-center">-</td>
																	<td class="text-center"><?php echo number_format($normalGKTotal[0][0]['pricePerHour'])?> 円/時</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab-cs-mosaic">
								<div class="main-box-body clearfix">
									<div class="row">
										<div class="col-md-5 col-sm-12">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>顧客</h2>
												</header>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered table-total table-first-none">
															<thead>
																<tr>
																	<th class="text-center"><span>尺</span></th>
																	<th class="text-center"><span>本数</span></th>
																	<th class="text-center"><span>納品金額</span></th>
																	<th class="text-center"><span>平均作業時間</span></th>
																	<th class="text-center"><span>時間あたり売上</span></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($csClientLength as $val) : ?>
																	<?php
																		echo '<tr>';
																		echo '<td class="text-center">' . $val['Order']['length'] . ' 分</td>';
																		echo '<td class="text-center">' . $val[0]['cnt'] . ' 本</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumPrice']) . ' 円</td>';
																		echo '<td class="text-center">' . number_format($val[0]['avgWorktime'], 1) . ' 時間</td>';
																		echo '<td class="text-center">' . number_format($val[0]['pricePerHour']) . ' 円/時</td>';
																		echo '</tr>';
																	?>
																<?php endforeach ; ?>
																<tr>
																	<td class="text-center">計</td>
																	<td class="text-center"><?php echo $csClientTotal[0][0]['cnt'] ?> 本</td>
																	<td class="text-center"><span><?php echo number_format($csClientTotal[0][0]['sumPrice'])?> 円</span></td>
																	<td class="text-center">-</td>
																	<td class="text-center"><?php echo number_format($csClientTotal[0][0]['pricePerHour'])?> 円/時</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5 col-sm-12">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>極楽</h2>
												</header>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered table-total table-first-none">
															<thead>
																<tr>
																	<th class="text-center"><span>尺</span></th>
																	<th class="text-center"><span>本数</span></th>
																	<th class="text-center"><span>納品金額</span></th>
																	<th class="text-center"><span>平均作業時間</span></th>
																	<th class="text-center"><span>時間あたり売上</span></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($csGKLength as $val) : ?>
																	<?php
																		echo '<tr>';
																		echo '<td class="text-center">' . $val['Order']['length'] . ' 分</td>';
																		echo '<td class="text-center">' . $val[0]['cnt'] . ' 本</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumPrice']) . ' 円</td>';
																		echo '<td class="text-center">' . number_format($val[0]['avgWorktime'], 1) . ' 時間</td>';
																		echo '<td class="text-center">' . number_format($val[0]['pricePerHour']) . ' 円/時</td>';
																		echo '</tr>';
																	?>
																<?php endforeach ; ?>
																<tr>
																	<td class="text-center">計</td>
																	<td class="text-center"><?php echo $csGKTotal[0][0]['cnt'] ?> 本</td>
																	<td class="text-center"><span><?php echo number_format($csGKTotal[0][0]['sumPrice'])?> 円</span></td>
																	<td class="text-center">-</td>
																	<td class="text-center"><?php echo number_format($csGKTotal[0][0]['pricePerHour'])?> 円/時</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab-client">
								<div class="main-box-body clearfix">
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>通常モザイク</h2>
												</header>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered table-total table-first-none">
															<thead>
																<tr>
																	<th class="text-center"><span>Client</span></th>
																	<th class="text-center"><span>本数</span></th>
																	<th class="text-center"><span>納品金額</span></th>
																	<th class="text-center"><span>総作業時間</span></th>
																	<th class="text-center"><span>時間あたり売上</span></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($normalClientRecords as $val) : ?>
																	<?php
																		echo '<tr>';
																		echo '<td class="text-center">' . $val['Client']['client'] . '</td>';
																		echo '<td class="text-center">' . $val[0]['cnt'] . ' 本</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumPrice']) . ' 円</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumWorktime'], 1) . ' 時間</td>';
																		echo '<td class="text-center">' . number_format($val[0]['pricePerHour']) . ' 円/時</td>';
																		echo '</tr>';
																	?>
																<?php endforeach ; ?>
																<tr>
																	<td class="text-center">計</td>
																	<td class="text-center"><?php echo $normalClientTotalRecords[0][0]['cnt'] ?> 本</td>
																	<td class="text-center"><span><?php echo number_format($normalClientTotalRecords[0][0]['sumPrice'])?> 円</span></td>
																	<td class="text-center"><?php 			echo number_format($normalClientTotalRecords[0][0]['sumWorktime'])?> h</td>
																	<td class="text-center"><?php				echo number_format($normalClientTotalRecords[0][0]['pricePerHour'])?> 円/時</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="main-box clearfix">
												<header class="main-box-header clearfix">
													<h2>CS</h2>
												</header>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered table-total table-first-none">
															<thead>
																<tr>
																	<th class="text-center"><span>Client</span></th>
																	<th class="text-center"><span>本数</span></th>
																	<th class="text-center"><span>納品金額</span></th>
																	<th class="text-center"><span>総作業時間</span></th>
																	<th class="text-center"><span>時間あたり売上</span></th>
																</tr>
															</thead>
															<tbody>
																<?php foreach($csClientRecords as $val) : ?>
																	<?php
																		echo '<tr>';
																		echo '<td class="text-center">' . $val['Client']['client'] . '</td>';
																		echo '<td class="text-center">' . $val[0]['cnt'] . ' 本</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumPrice']) . ' 円</td>';
																		echo '<td class="text-center">' . number_format($val[0]['sumWorktime'], 1) . ' 時間</td>';
																		echo '<td class="text-center">' . number_format($val[0]['pricePerHour']) . ' 円/時</td>';
																		echo '</tr>';
																	?>
																<?php endforeach ; ?>
																<tr>
																	<td class="text-center">計</td>
																	<td class="text-center"><?php echo $csClientTotalRecords[0][0]['cnt'] ?> 本</td>
																	<td class="text-center"><span><?php echo number_format($csClientTotalRecords[0][0]['sumPrice'])?> 円</span></td>
																	<td class="text-center"><?php echo number_format($csClientTotalRecords[0][0]['sumWorktime'])?> h</td>
																	<td class="text-center"><?php echo number_format($csClientTotalRecords[0][0]['pricePerHour'])?> 円/時</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /Achievement Tables -->
<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 3 || $user['user_role_id'] == 5): ?>
<!-- Achievement Graph -->
	<div class="row">
		<div class="col-md-12">
			<div class="main-box">
				<header class="main-box-header clearfix">
					<h2 class="pull-left">売上(自社・顧客別) &amp; 稼働率</h2>
				</header>

				<div class="main-box-body clearfix">
					<div class="row">
						<div class="col-md-12">
							<div id="graph-bar" style="height: 360px; padding: 0px; position: relative;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /Achievement Graph -->
<?php endif; ?>
<!-- Price per Hour Graph -->
	<div class="row">
		<div class="col-md-12">
			<div class="main-box">
				<header class="main-box-header clearfix">
					<h2 class="pull-left">時間あたり売上</h2>
				</header>

				<div class="main-box-body clearfix">
					<div class="row">
						<div class="col-md-12">
							<div id="graph-bar2" style="height: 360px; padding: 0px; position: relative;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /Price per Hour Graph -->

<!-- page-js -->

<!-- form-js -->

<!-- this page specific scripts -->
<?php
		echo $this->Html->script('flot/jquery.flot.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.time.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.resize.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.threshold', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('flot/jquery.flot.axislabels', array('inline' => false, 'block' => 'page-js'));
	?>
<!-- theme scripts -->

<!-- inline scripts -->
<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>

$(document).ready(function() {

	//create link
	$('#task_recordsTeamAchievementsForm button').click(function(){
		var formUrl = $('#task_recordsTeamAchievementsForm').attr('action');
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

		if ($('#graph-bar').length) {
      var client  = [<?php echo $clientSales; ?>];
      var gk      = [<?php echo $gkSales; ?>];
			var operate = [<?php echo $operationRate ?>];

			var series = new Array();

			series.push({
				data: client,
				bars: {
					show : true,
					barWidth: 24 * 60 * 60 * 6000,
					lineWidth: 1,
					fill: 1,
					align:'left',
					order: 1,

				},
				label: '売上(顧客)'
			});
			series.push({
				data: gk,
				bars: {
					show : true,
					barWidth: 24 * 60 * 60 * 6000,
					lineWidth: 1,
					fill: 1,
					align:'right',
					order: 2,
				},
				label: '売上(自社)'
			});
			series.push({
				data: operate,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				yaxis:2,
				label: '稼働率'
			});



			$.plot("#graph-bar", series, {
				colors: ['#03a9f4', 'red', '#2ecc71', '#3498db', '#9b59b6', '#95a5a6'],
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
				yaxes: [
				{
					tickFormatter: function (val, axis) {
          	return val + "";
          },
          axisLabel: "売上",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: "Open Sans, sans-serif",
          axisLabelPadding: 5
				},
				{
				position: "right",
        	tickFormatter: function (val, axis) {
        		return val + "%";
        	},
        	max: 100,
        	min: 0,
        	axisLabel: "稼働率",
        	axisLabelUseCanvas: true,
        	axisLabelFontSizePixels: 12,
        	axisLabelFontFamily: "Open Sans, sans-serif",
        	axisLabelPadding: 5
				}

				]
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


		if ($('#graph-bar2').length) {
      var normalClient  = [<?php echo $pricePerHourNormalClient; ?>];
      var csClient      = [<?php echo $pricePerHourCsClient; ?>];
      var normalGK  = [<?php echo $pricePerHourNormalGK; ?>];
      var csGK      = [<?php echo $pricePerHourCsGK; ?>];

			var series = new Array();

			series.push({
				data: normalClient,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				label: '通常モザイク(顧客)'
			});
			series.push({
				data: csClient,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				label: 'CS(顧客)'
			});
			series.push({
				data: normalGK,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				label: '通常モザイク(自社)'
			});
			series.push({
				data: csGK,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				label: 'CS(自社)'
			});



			$.plot("#graph-bar2", series, {
				colors: ['#03a9f4', 'red', '#2ecc71', 'orange', '#9b59b6', '#95a5a6'],
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
			$("#graph-bar2").bind("plothover", function (event, pos, item) {
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
