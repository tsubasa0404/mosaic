<?php $this->set('title_for_layout', 'Member List'); ?>
<?php $this->Html->css('sweetalert', array('inline' => false, 'block' => 'page-css')) ?>
	<?php $this->Html->addCrumb('Team Members', '/employees/team_members'); ?>
					<h1 class="pull-left">Team members <small></small></h1>
				</div><!-- /pull-left -->
				<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2): ?>
					<div class="pull-right">
						<a data-toggle="modal" href="#addMember" class="btn btn-primary pull-right">
							<i class="fa fa-plus-circle fa-lg"></i> Add Member
						</a>
						<div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="addMemberLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Add Member</h4>
									</div>
									<div class="modal-body">
										<?php echo $this->Form->create('Employee', array(
											'action' => 'add',
											'div' => false,
											'inputDefaults' => array(
												'class' => 'form-control'
												),
										)) ?>
											<div class="form-group">
												<?php echo $this->Form->input('first_name', array(
													'placeholder' => 'Enter First Name'
												)) ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('family_name', array(
													'placeholder' => 'Enter Family Name'
												)) ?>
											</div>
											<div class="form-group">
												<?php echo $this->Form->input('sex', array(
													'legend'		=> false,
													'type'			=> 'radio',
													'before'		=> '<div class="radio">',
													'separator'	=> '</div><div class="radio">',
													'after'			=> '</div>',
													'value'			=> '1',
													'options' => array('1' => 'Man', '2' => 'Woman')
												)) ?>
											</div>
											<div class="form-group">
												<label for="datepickerDate">Birthday</label>
												<?php echo $this->Form->input('birthday', array(
													'div'		=> 'input-group',
													'label' => false,
													'id'		=> 'datepickerDate',
													'style'	=> 'width: 200px;',
													'type'	=> 'text',
													'between' => '<span class="input-group-addon"><i class="fa fa-birthday-cake fa-1"></i></span>'
												)) ?>
											</div>
											<div class="form-group">
												<label for="tel">Tel</label>
												<?php echo $this->Form->input('tel', array(
													'div'		=> 'input-group',
													'label'	=> false,
													'placeholder'	=> 'Enter phone number',
													'style'	=> 'width: 200px;',
													'between'	=> '<span class="input-group-addon"><i class="fa fa-phone"></i></span>'
												)) ?>
											</div>
											<div class="form-group">
												<label for="address">Address</label>
												<?php echo $this->Form->input('address', array(
													'div'		=> 'input-group',
													'label'	=> false,
													'placeholder'	=> '#41, St3, Sangat Teuk Thla, Phnom Penh',
													'between'	=> '<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>'
												)) ?>
											</div>
											<div class="form-group">
												<label for="occupation">Occupation</label>
												<?php echo $this->Form->input('occupation', array(
													'div'		=> 'input-group',
													'label'	=> false,
													'placeholder'	=> 'Staff, Student, Part-time etc...',
													'between'	=> '<span class="input-group-addon"><i class="fa fa-user"></i></span>',
													'style'	=> 'width: 200px;'
												)) ?>
											</div>
											<div class="form-group clearfix">
												<?php echo $this->Form->input('career_id', array(
													'style' => 'width: 200px;',
													'options' => $careerList,
													'empty' => '--Select Career--',
													'selected' => 3
												)) ?>
											</div>

											<div class="form-group clearfix">
												<?php echo $this->Form->input('employee_group_id', array(
													'style' => 'width: 200px;',
													'options' => $employee_group_option,
													'empty' => '--Select Team--'
												)) ?>
											</div>

											<div class="form-group">
												<label for="datepickerStartDate">Start Date</label>
												<?php echo $this->Form->input('start_date', array(
													'div'		=> 'input-group',
													'label'	=> false,
													'between'	=> '<span class="input-group-addon"><i class="fa fa-calendar"></i></span>',
													'style'	=> 'width: 200px;',
													'id' => 'datepickerStartDate',
													'type' => 'text'
												)) ?>
											</div>
											<div class="form-group">
												<label for="memo">Memo</label>
												<?php echo $this->Form->textarea('memo', array(
													'rows' => '3',
													'style' => 'height: auto !important;',
													'class' => 'form-control'
												)) ?>
											</div>
										<?php echo $this->Form->end(); ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<?php echo $this->Form->input('Add Member', array(
												'type' => 'button',
												'div' => false,
												'label' => false,
												'class' => 'btn btn-primary',
												'name' => 'submit-add-member',
												'id'	=> 'submit-add-member'
												));
											?>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
					</div>
				<?php endif; ?>
			</div>
			<!-- /con-lg-12 -->
		</div>
		<!-- /row -->
		<div class="row">
			<!-- Member List -->
			<?php foreach($employeeList as $employee) : ?>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="main-box clearfix profile-box-contact">
						<div class="main-box-body clearfix">
							<div class="profile-box-header clearfix <?php echo $this->Employee->get_career_color($employee['Career1']['id']); ?>">
								<?php if($user['user_role_id'] == 1 || $user['user_role_id'] == 2 || $user['employee_id'] == $employee['Employee']['id']): ?>
									<?php echo $this->Html->link(
										$this->Html->image('members/'.$employee['Employee']['prof_img'],
											array('class' => 'profile-img img-responsive')),
											"profile/" . $employee['Employee']['id'],array('escape' => false));
									?>
								<?php else :?>
									<?php echo $this->Html->image('members/'.$employee['Employee']['prof_img'],
										array('class' => 'profile-img img-responsive'));
									?>
								<?php endif; ?>
								<h2>
									<?php
										if($user['user_role_id'] == 1|| $user['user_role_id']==2 || $user['employee_id'] == $employee['Employee']['id']){
											echo $this->Html->link('<span style="color:#fff;">'.$employee['Employee']['employee_no'].'</span>',
												"profile/".$employee['Employee']['id'],array('escape' => false)
											);
										} else {
											echo '<a href=""><span style="color:#fff;">'.$employee['Employee']['employee_no'].'</span></a>';
										}
									?>
								</h2>
								<div class="job-position">
									<?php echo $employee['Career1']['career'];?>
								</div>
								<ul class="contact-details">
									<li><i class="fa fa-map-marker"></i><?php echo $employee['Employee']['address'];?></li>
									<li><i class="fa fa-birthday-cake fa-1"></i><?php echo $employee['Employee']['birthday'];?></li>
									<li><i class="fa fa-phone"></i><?php echo $employee['Employee']['tel'];?></li>
								</ul>
							</div>
							<div class="profile-box-footer clearfix">
								<a href="#"><span class="value"><?php echo $this->DateDiff->dayDiff($employee['Employee']['start_date'], date("Y-m-d")); ?></span><span class="label">Days</span></a>
								<a href="#"><span class="value"><?php echo number_format($employee[0]['sumEditPoint']); ?></span><span class="label">Points</span></a>
								<a href="#"><span class="value"><?php echo number_format($employee[0]['sumEditLength']); ?></span><span class="label">Mins</span></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>



	<!-- Form-js -->
	<?php
		echo $this->Html->script('bootstrap-datepicker', array('inline' => false, 'block' => 'form-js'));
	?>

	<!-- inline-scripts -->
	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function(){
			//メンバー登録モーダルフォーム
			$('#datepickerDate').datepicker({
			  format: 'yyyy-mm-dd'
			});
			$('#datepickerStartDate').datepicker({
			  format: 'yyyy-mm-dd'
			});
			$('#datepickerDateComponent').datepicker();
			$('#submit-add-member').click(function(){
				$('#EmployeeAddForm').submit();
			});
		});
	<?php $this->Html->scriptEnd(); ?>


</body>
</html>