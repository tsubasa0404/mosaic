				<div id="nav-col">
					<section id="col-left" class="col-left-nano">
						<div id="col-left-inner" class="col-left-nano-content">
							<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
								<?php echo $this->Html->image('users/'. $user_img); ?>
								<div class="user-box">
									<span class="name">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<?php echo $username; ?>
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<?php echo $this->Html->link(
													'<i class="fa fa-user"></i>profile',
													array('controller' => 'employees', 'action' => 'profile'. '/' . $employee_id),
													array('escape' => false)
												);
												?>
											</li>
											<li>
												<?php echo $this->Html->link(
													'<i class="fa fa-power-off"></i>Logout',
													array('controller' => 'users', 'action' => 'logout'),
													array('escape' => false));
												?>
											</li>
										</ul>
									</span>
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
								<ul class="nav nav-pills nav-stacked">
									<li class="nav-header nav-header-first hidden-sm hidden-xs">
										Menu
									</li>
									<li class="active">
										<?php echo $this->Html->link(
											'<i class="fa fa-home"></i><span>Home</span>',
											array('controller' => 'users', 'action' => 'dashboard'),
											array('escape' => false));
										?>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-bar-chart-o"></i>
											<span>Records</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<?php echo $this->Html->link(
													'Individual Achievements',
													array('controller' => 'task_records', 'action' => 'individual_achievements'),
													array('escape' => false));
												?>
											</li>
										</ul>
									</li>

									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-group"></i><span>Team Members</span>',
											array('controller' => 'employees', 'action' => 'team_members'),
											array('escape' => false));
										?>
									</li>
									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-calendar"></i><span>Calendar</span>',
											array('controller' => 'calendars', 'action' => 'index'),
											array('escape' => false));
										?>
									</li>
									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-book"></i><span>Blog</span>',
											array('controller' => 'blog'),
											array('escape' => false, 'class' => '', 'target' => '_blank')
										) ?>
									</li>
									<!-- <li>
										<?php echo $this->Html->link(
											'<i class="fa fa-picture-o"></i><span>Gallery</span>',
											array('controller' => '', 'action' => ''),
											array('escape' => false));
										?>
									</li> -->


								</ul>
							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
