<?php $this->set('title_for_layout', 'Profile'); ?>
	<?php $this->Html->addCrumb('Team Members', '/employees/team_members'); ?>
					<h1 class="pull-left"><?php echo $employeeProf[0]['Employee']['employee_no']; ?><small></small></h1>

					</div>

					<!-- Month search box -->
					<div class="main-box-body clearfix">
						<div class="dataTables_length">
							<?php echo $this->Form->create('employees', array(
							'type' => 'get',
							'action' => 'profile',
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
								<a href="#" id="profile-pager"></a>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
					<!-- /Month search box -->
				</div>

			</div>
				<?php echo $this->Session->flash(); ?>


				<div class="row" id="user-profile">
					<div class="col-lg-2 col-md-4 col-sm-4">
						<div class="main-box clearfix">
							<header class="main-box-header clearfix">
								<h2><?php echo $employeeProf[0]['Employee']['first_name'] . " " .$employeeProf[0]['Employee']['family_name']; ?></h2>
							</header>
							<div class="main-box-body clearfix">
								<?php echo $this->Html->image('members/' . $employeeProf[0]['Employee']['prof_img'], array(
									'class' => 'profile-img img-responsive center-block')); ?>

								<div class="profile-label">
									<span class="label label-danger"><?php echo $employeeProf[0]['Career']['career'] ?></span>
								</div>

								<div class="profile-since" style="padding-top: 5px;">
									Member since: <?php echo $employeeProf[0]['Employee']['start_date']; ?>
								</div>

								<div class="profile-details">
									<ul class="fa-ul">
										<li><i class="fa-li fa fa-calendar"></i>Working Days: <span><?php echo $this->DateDiff->dayDiff($employeeProf[0]['Employee']['start_date'], date("Y-m-d")); ?> days</span></li>
										<li><i class="fa-li fa fa-money"></i>Total Points: <span><?php echo number_format($employeeProf[0][0]['sumEditPoint']); ?> P</span></li>
										<li><i class="fa-li fa fa-clock-o"></i>Edit Length: <span><?php echo number_format($employeeProf[0][0]['sumEditLength']); ?> Min</span></li>
										<li><i class="fa-li fa fa-usd"></i>Total Salary: <span id="sum-salary"></span> <span>$</span></li>
									</ul>
								</div>

								<div class="profile-message-btn center-block text-center">
									<?php echo $this->Html->link(
										'<i class="fa fa-edit"></i> '. __('Edit Profile'),
										array('action' => 'edit', $employeeProf[0]['Employee']['id']),
										array('escape' => false, 'class' => 'btn btn-primary')
									) ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-10 col-md-8 col-sm-8">
						<div class="main-box clearfix">
							<div class="tabs-wrapper profile-tabs">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab-time-card" data-toggle="tab">Time Card</a></li>
									<li><a href="#tab-work-record" data-toggle="tab">Work record</a></li>
									<li><a href="#tab-salary" data-toggle="tab">Salary Sheet</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-time-card">

										<div id="time-card">
											<div class="main-box-body clearfix">
												<header class="main-box-header clearfix">
													<h2 class="pull-left"><?php echo $dateArray[0]."-".$dateArray[1]; ?></h2>
													<!-- Modal -->
													<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2) : ?>
													<a data-toggle="modal" href="#myModal" class="btn btn-danger pull-right">Create Salary Sheet</a>
													<!-- <button class="md-trigger btn btn-primary mrg-b-lg" data-modal="modal-13">3D Slit</button> -->
													<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title">Salary sheet</h4>
																</div>
																<div class="modal-body">
																	<?php echo $this->Form->create('Salary', array(
																		'action' => 'add',
																		'div' => false,
																		'class' => '',
																		'inputDefaults' => array(
																			'class' => 'form-control'
																			)));
																	?>
																	<?php echo $this->Form->hidden('employee_id', array(
																		'value' => $employeeProf[0]['Employee']['id'],
																	)) ?>
																		<div class="form-group clearfix">
																			<div class="" style="max-width:200px">
																				<label for="SalaryMonthYear" class="control-label">Month</label>
																				<input type="month" name="data[Salary][month]" value="<?php echo substr($dateArray[3],0,7) ?>" class="form-control">
																			</div>
																		</div>
																		<div class="row">
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryBasic" class="control-label">Basic Salary</label>
																				<?php echo $this->Form->input('basic', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																					'value' => $employeeProf[0]['Career']['basic_salary']
																				)) ?>
																			</div>
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryOvertime" class="control-label">Overtime</label>
																				<?php echo $this->Form->input('overtime', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																				)) ?>
																			</div>
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryOffWork" class="control-label">Off Work</label>
																				<?php echo $this->Form->input('off_work', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																				)) ?>
																			</div>
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryBonus" class="control-label">Bonus</label>
																				<?php echo $this->Form->input('bonus', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																					'value' => "0"
																				)) ?>
																			</div>
																		</div>

																		<div class="row">
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryDeposit" class="control-label red">Deposit</label>
																				<?php if($employeeProf[0]['Career']['id'] == 3){ $deposit = "20";}else{$deposit = "0";}
																					echo $this->Form->input('deposit', array(
																						'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																						'after' => '</div>',
																						'label' => false,
																						'placeholder' => "",
																						'type' => 'number',
																						'value' => $deposit
																				)); ?>
																			</div>
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryAbsence" class="control-label red">Absence</label>
																				<?php echo $this->Form->input('absence', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																					'value' => $totalTimeCard[0][0]['cntOff']*6.67 + $totalTimeCard[0][0]['cntNoCall']*16,
																				)) ?>
																			</div>
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryLate" class="control-label red">Late</label>
																				<?php echo $this->Form->input('late', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																					'data-late' => ''
																				)) ?>
																			</div>
																			<div class="form-group col-lg-3 col-md-3">
																				<label for="SalaryEarly" class="control-label red">Early</label>
																				<?php echo $this->Form->input('early', array(
																					'before' => '<div class="input-group"><span class="input-group-addon">$</span>',
																					'after' => '</div>',
																					'label' => false,
																					'placeholder' => "",
																					'type' => 'number',
																					'data-early' => ''
																				)) ?>
																			</div>
																		</div>


																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<?php echo $this->Form->input('Save', array(
																		'type' => 'button',
																		'div' => false,
																		'label' => false,
																		'class' => 'btn btn-primary',
																		'name' => 'submit-salary-sheet',
																		'id' => 'submit-salary-sheet',
																		'onClick' => 'submit_salary_sheet();'
																		));
																	?>
																</div>
															</div><!-- /.modal-content -->
														</div><!-- /.modal-dialog -->
													</div>
													<?php endif; ?>
													<!-- /.modal -->
												</header>

												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered table-first-none">
															<thead>
																<tr>
																	<th class="text-center" colspan="3"><span>Absence</span></th>
																	<th class="text-center" colspan="2"><span>Late</span></th>
																	<th class="text-center" colspan="2"><span>Early</span></th>
																	<th class="text-center" colspan="2"><span>Overtime</span></th>
																	<th class="text-center"><span>Off work</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-center">Off <?php echo $totalTimeCard[0][0]['cntOff'] ?> day</td>
																	<td class="text-center">No Call <?php echo $totalTimeCard[0][0]['cntNoCall'] ?> day</td>
																	<td class="text-center">Paid off <?php echo $totalTimeCard[0][0]['cntPaid'] ?> day</td>
																	<td class="text-center"><?php echo $totalTimeCard[0][0]['cntLate'] ?> day</td>
																	<td class="text-center"><?php echo $lateMinutes ?> min</td>
																	<td class="text-center"><?php echo $totalTimeCard[0][0]['cntEarlyLeave'] ?> day</td>
																	<td class="text-center"><?php echo $outMinutes[0] ?> min</td>
																	<td class="text-center"><?php echo $totalTimeCard[0][0]['cntOvertime'] ?> day</td>
																	<td class="text-center"><?php echo (int)$outMinutes[1]/60 ?> hours</td>
																	<td class="text-center"><?php echo $totalTimeCard[0][0]['cntHolidayWork'] ?> day</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="main-box-body clearfix">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="text-center"><span>Date</span></th>
																	<th class="text-center"><span>Type</span></th>
																	<th class="text-center"><span>In</span></th>
																	<th class="text-center"><span>Out</span></th>
																	<th class="text-center"><span>Salary</span></th>
																	<th class="text-center"><span>Reason</span></th>
																	<th></th>
																</tr>
															</thead>
															<tbody class="time-card">
																<?php foreach($timeCards as $timeCard): ?>
																	<tr>
																		<td class="text-center">
																			<?php echo $this->Time->format("m/d", $timeCard['TimeCard']['date']) ."(".$this->Time->format("D", $timeCard['TimeCard']['date']).")"; ?>
																		</td>
																		<td class="text-center"><?php echo $timeCard['PayCutType']['type']; ?></td>
																		<td class="text-center"><?php echo $this->Time->format("H:i", $timeCard['TimeCard']['in_time']); ?></td>
																		<td class="text-center"><?php echo $this->Time->format("H:i", $timeCard['TimeCard']['out_time']); ?></td>
																			<?php switch ($timeCard['TimeCard']['pay_cut_type_id']) {
																				case 2:
																					if($this->DateDiff->timeDiff($timeCard['TimeCard']['in_time'],'08:00:00')>=30){
																						echo '<td class="text-center salary-selector red" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.number_format((int)$timeCard['PayCutType']['amount']/60*(int)$this->DateDiff->timeDiff($timeCard['TimeCard']['in_time'],'08:00:00'),2).'"><span class="cut-amount">-'.
																						number_format((int)$timeCard['PayCutType']['amount']/60*(int)$this->DateDiff->timeDiff($timeCard['TimeCard']['in_time'],'08:00:00'),2).
																						"$</span>";
																					} else {
																						echo '<td class="text-center salary-selector" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.'0'.'"><span class="cut-amount">0$</span>';
																					}
																					break;
																				case 3:
																					echo '<td class="text-center salary-selector red" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.number_format((int)$timeCard['PayCutType']['amount']/60*(int)$this->DateDiff->timeDiff('17:00:00',$timeCard['TimeCard']['out_time']),2).'"><span class="cut-amount">-'.number_format((int)$timeCard['PayCutType']['amount']/60*(int)$this->DateDiff->timeDiff('17:00:00',$timeCard['TimeCard']['out_time']),2)."$</span>";
																					break;
																				case 1:
																				case 4:
																					echo '<td class="text-center salary-selector red" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.$timeCard['PayCutType']['amount'].'"><span class="cut-amount">-'.$timeCard['PayCutType']['amount']."$</span>";
																					break;
																				case 5:
																					echo '<td class="text-center salary-selector" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.$timeCard['PayCutType']['amount'].'"><span class="cut-amount">'.$timeCard['PayCutType']['amount']."$</span>";
																					break;
																				case 6:
																				case 8:
																					echo '<td class="text-center salary-selector" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.number_format((int)$timeCard['PayCutType']['amount']/60*(int)$this->DateDiff->timeDiff('17:00:00',$timeCard['TimeCard']['out_time']),2).'"><span class="cut-amount">'.number_format((int)$timeCard['PayCutType']['amount']/60*(int)$this->DateDiff->timeDiff('17:00:00',$timeCard['TimeCard']['out_time']),2)."$</span>";
																					break;
																				case 7:
																					echo '<td class="text-center salary-selector" data-type="'.$timeCard['PayCutType']['type'].'" data-amount="'.(int)$this->DateDiff->timeDiff($timeCard['TimeCard']['out_time'], $timeCard['TimeCard']['in_time'],2)/60*(int)$timeCard['PayCutType']['amount']*(-1).'"><span class="cut-amount">'.(int)$this->DateDiff->timeDiff($timeCard['TimeCard']['out_time'], $timeCard['TimeCard']['in_time'],2)/60*(int)$timeCard['PayCutType']['amount']*(-1).'$</span>';
																				break;
																				default:
																					break;
																				}
																			?>
																		</td>
																		<td class="text-center"><?php echo $timeCard['TimeCard']['note']; ?></td>
																		<td class="text-center"><?php echo $this->Html->link(
																			'<i class="fa fa-pencil"></i>',
																			array('controller' => 'time_cards', 'action' => 'edit', $timeCard['TimeCard']['id']),
																			array('escape' => false, 'class' => 'table-link')
																		) ?></td>
																	</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="tab-work-record">
										<div class="main-box-body clearfix">
											<header class="main-box-header clearfix">
												<h2 class="pull-left"><?php echo $dateArray[0]."-".$dateArray[1]; ?></h2>
												</header>
											</header>
											<div class="row">
												<div class="col-md-9">
													<div class="main-box-body clearfix">
														<div class="table-responsive">
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th class="text-center"><span>Mosaic Type</span></th>
																		<th class="text-center"><span>Edit Length</span></th>
																		<th class="text-center"><span>Edit Point</span></th>
																		<th class="text-center"><span>Work time</span></th>
																		<th class="text-center"><span>Point / Hour</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="text-center">Normal</td>
																		<td class="text-center"><?php if($normal[0][0]['sumEditLength']){echo $normal[0][0]['sumEditLength'];}else{echo "0";} ?> min</td>
																		<td class="text-center"><?php if($normal[0][0]['sumEditPoint']){echo number_format($normal[0][0]['sumEditPoint']);}else{echo "0";} ?> P</td>
																		<td class="text-center"><?php if($normal[0][0]['sumWorktime']){echo number_format($normal[0][0]['sumWorktime']);}else{echo "0";} ?> Hours</td>
																		<td class="text-center"><?php if($normal[0][0]['pointPerHour']){echo number_format($normal[0][0]['pointPerHour']);}else{echo "0";} ?> P/H</td>
																	</tr>
																	<tr>
																		<td class="text-center">CS</td>
																		<td class="text-center"><?php if($cs[0][0]['sumEditLength']){echo $cs[0][0]['sumEditLength'];}else{echo "0";} ?> min</td>
																		<td class="text-center"><?php if($cs[0][0]['sumEditPoint']){echo number_format($cs[0][0]['sumEditPoint']);}else{echo "0";} ?> P</td>
																		<td class="text-center"><?php if($cs[0][0]['sumWorktime']){echo number_format($cs[0][0]['sumWorktime']);}else{echo "0";} ?> Hours</td>
																		<td class="text-center"><?php if($cs[0][0]['pointPerHour']){echo number_format($cs[0][0]['pointPerHour']);}else{echo "0";} ?> P/H</td>
																	</tr>
																	<tr>
																		<td class="text-center">TOTAL</td>
																		<td class="text-center"><?php if($total[0][0]['sumEditLength']){echo $total[0][0]['sumEditLength'];}else{echo "0";} ?> min</td>
																		<td class="text-center"><?php if($total[0][0]['sumEditPoint']){echo number_format($total[0][0]['sumEditPoint']);}else{echo "0";} ?> P</td>
																		<td class="text-center"><?php if($total[0][0]['sumWorktime']){echo number_format($total[0][0]['sumWorktime']);}else{echo "0";} ?> Hours</td>
																		<td class="text-center"><?php if($total[0][0]['pointPerHour']){echo number_format($total[0][0]['pointPerHour']);}else{echo "0";} ?> P/H</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<ul class="graph-stats">
														<p class="red">Under Construction</p>
														<li>
															<div class="clearfix">
																<div class="title pull-left">
																	Earnings
																</div>
																<div class="value pull-right" title="10% down" data-toggle="tooltip">
																	&dollar;94.382 <i class="fa fa-level-down red"></i>
																</div>
															</div>
															<div class="progress">
																<div style="width: 69%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="69" role="progressbar" class="progress-bar">
																	<span class="sr-only">69% Complete</span>
																</div>
															</div>
														</li>
														<li>
															<div class="clearfix">
																<div class="title pull-left">
																	Orders
																</div>
																<div class="value pull-right" title="24% up" data-toggle="tooltip">
																	3.930 <i class="fa fa-level-up green"></i>
																</div>
															</div>
															<div class="progress">
																<div style="width: 42%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar progress-bar-danger">
																	<span class="sr-only">42% Complete</span>
																</div>
															</div>
														</li>
														<li>
															<div class="clearfix">
																<div class="title pull-left">
																	New Clients
																</div>
																<div class="value pull-right" title="8% up" data-toggle="tooltip">
																	894 <i class="fa fa-level-up green"></i>
																</div>
															</div>
															<div class="progress">
																<div style="width: 78%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar" class="progress-bar progress-bar-success">
																	<span class="sr-only">78% Complete</span>
																</div>
															</div>
														</li>
														<li>
															<div class="clearfix">
																<div class="title pull-left">
																	Visitors
																</div>
																<div class="value pull-right" title="17% down" data-toggle="tooltip">
																	824.418 <i class="fa fa-level-down red"></i>
																</div>
															</div>
															<div class="progress">
																<div style="width: 94%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="94" role="progressbar" class="progress-bar progress-bar-warning">
																	<span class="sr-only">94% Complete</span>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="main-box-body clearfix">
												<div id="work-record-list" class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th class="text-center"><span>No</span></th>
																<th class="text-center"><span>Mosaic Type</span></th>
																<th class="text-center"><span>Edit Length</span></th>
																<th class="text-center"><span>Edit Point</span></th>
																<th class="text-center"><span>Started</span></th>
																<th class="text-center"><span>Completed</span></th>
																<th class="text-center"><span>worktime</span></th>

															</tr>
														</thead>
														<tbody>
															<?php foreach($individualTaskList as $list):?>
																<tr>
																	<td class="text-center"><?php echo $list['Order']['control_no']; ?></td>
																	<td class="text-center"><?php echo $list['MosaicType']['mosaic_type'] ?></td>
																	<td class="text-center"><?php echo $list['TaskRecord']['edit_length'] ?> min</td>
																	<td class="text-center"><?php echo number_format($list['TaskRecord']['edit_point']) ?> P</td>
																	<td class="text-center"><?php echo $this->Time->format("m/d H:i", $list['TaskRecord']['started']) ?></td>
																	<td class="text-center"><?php echo $this->Time->format("m/d H:i",$list['TaskRecord']['completed']) ?></td>
																	<td class="text-center"><?php echo $list['TaskRecord']['worktime'] ?> h</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="main-box-body clearfix">
												<div id="graph-bar" style="width: 100%; height: 240px; padding: 0px; position: relative;"></div>
											</div>
										</div>
									</div>

									<div class="tab-pane clearfix fade" id="tab-salary">
										<header class="main-box-header clearfix">
											<h2 class="pull-left">Salary history</h2>
										</header>


										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<table class="table table-bordered salary-table">
													<thead>
														<tr>
															<th class="text-center"><span>Month</span></th>
															<th class="text-center"><span>Basic</span></th>
															<th class="text-center"><span>Deposit</span></th>
															<th class="text-center"><span>Absence</span></th>
															<th class="text-center"><span>Late</span></th>
															<th class="text-center"><span>Early</span></th>
															<th class="text-center"><span>Overtime</span></th>
															<th class="text-center"><span>Off work</span></th>
															<th class="text-center"><span>Bonus</span></th>
															<th class="text-center"><span>Total</span></th>
															<th class="text-center"></th>
														</tr>
													</thead>
													<tbody class="salary-list">
														<?php foreach ($salaryList as $salary) : ?>
															<tr>
																<td class="text-center"><?php echo $this->Time->format("Y-m",$salary['Salary']['month']) ?></td>
																<td class="text-center"><?php echo $salary['Salary']['basic'] ?>$</td>
																<td class="text-center" style="color:red">-<?php echo $salary['Salary']['deposit'] ?>$</td>
																<td class="text-center" style="color:red">-<?php echo $salary['Salary']['absence'] ?>$</td>
																<td class="text-center" style="color:red">-<?php echo $salary['Salary']['late'] ?>$</td>
																<td class="text-center" style="color:red">-<?php echo $salary['Salary']['early'] ?>$</td>
																<td class="text-center"><?php echo $salary['Salary']['overtime'] ?>$</td>
																<td class="text-center"><?php echo $salary['Salary']['off_work'] ?>$</td>
																<td class="text-center"><?php echo $salary['Salary']['bonus'] ?>$</td>
																<td class="text-center total-salary"><span class="figure"><?php echo number_format($salary['Salary']['basic'] - ($salary['Salary']['deposit'] + $salary['Salary']['absence'] + $salary['Salary']['late'] + $salary['Salary']['early']) + ($salary['Salary']['overtime'] + $salary['Salary']['off_work'] + $salary['Salary']['bonus'])); ?></span>$</td>
																<td class="text-center">
																	<?php echo $this->Html->link('<i class="fa fa-pencil"></i>',
																		array('controller' => 'salaries', 'action' => 'edit/' . $salary['Salary']['id']),
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
							</div>
						</div>
					</div>
				</div>
<!-- Price per Hour Graph -->
	<div class="row">
		<div class="col-md-12">
			<div class="main-box">
				<header class="main-box-header clearfix">
					<h2 class="pull-left">Point / Hour</h2>
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
	<?php
		echo $this->Html->script('jquery.slimscroll.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('jquery.magnific-popup.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('flot/jquery.flot.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('flot/jquery.flot.resize.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('flot/jquery.flot.time.min', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('flot/jquery.flot.threshold', array('inline' => false, 'block' => 'form-js'));
		echo $this->Html->script('flot/jquery.flot.axislabels', array('inline' => false, 'block' => 'form-js'));
	?>

<!-- inline-scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
	//Submit Salary sheet
		function submit_salary_sheet(){
			document.forms['SalaryAddForm'].submit();
		}
	//Late,Early,Overtimeの給料計算
	$(function($){
		$(document).ready(function(){
			var type;
			var late = 0;
			var early = 0;
			var overtime = 0;
			var holiday = 0;
			$('.salary-selector').each(function(){
				type = $(this).data('type');
				if(type == 'late'){
					late += parseFloat($(this).data('amount'),2);
				} else if(type == 'early leave'){
					early += parseFloat($(this).data('amount'),2);
				} else if(type == 'overtime work' || type == '2$ overtime'){
					overtime += parseFloat($(this).data('amount'),2);
				} else if(type =='holiday work'){
					holiday += parseFloat($(this).data('amount'),2);
				}
				$('#SalaryLate').val(late);
				$('#SalaryEarly').val(early);
				$('#SalaryOvertime').val(overtime);
				$('#SalaryOffWork').val(holiday);
			})
		});
	});

	//給料合計計算
		$(document).ready(function(){
			var sum_salary = 0;
			var count = $('span.figure').length;
			for (var i=0; i < count;i++) {
				log = parseInt($('.figure').eq(i).text());
				sum_salary += log;
			}
			$('#sum-salary').text(sum_salary);
		});

	$(document).ready(function() {

		//create link
		$('#employeesProfileForm button').click(function(){
			var formUrl = $('#employeesProfileForm').attr('action');
			var year  = $('#employeesYear').val();
			var month = $('#employeesMonth').val();
			var id = "<?php echo $employeeProf[0]['Employee']['id']; ?>"
			var link = formUrl + '/' + id + '/' + year + '/' + month;
			$('#profile-pager').attr('href', link);
			location.href = link;
		});

		//CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		if ($('#graph-bar2').length) {
      var normal  = [<?php echo $pricePerHourNormal; ?>];
      var cs      = [<?php echo $pricePerHourCs; ?>];

			var series = new Array();

			series.push({
				data: normal,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				label: 'Normal'
			});
			series.push({
				data: cs,
				lines: {
					show : true,
					lineWidth: 3,
				},
				points:{
					fillColor: "white",
					pointWidth:1,
					show:true
				},
				label: 'CS'
			});



			$.plot("#graph-bar2", series, {
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
				yaxis: {
					min:0,
					max:2500
				}

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