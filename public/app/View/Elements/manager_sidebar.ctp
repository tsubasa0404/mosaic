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
													'<i class="fa fa-power-off"></i>ログアウト',
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
											'<i class="fa fa-home"></i><span>ホーム</span>',
											array('controller' => 'users', 'action' => 'dashboard'),
											array('escape' => false));
										?>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-bar-chart-o"></i>
											<span>業績</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<?php echo $this->Html->link(
													'全体の業績',
													array('controller' => 'task_records', 'action' => 'team_achievements'),
													array('escape' => false));
												?>
											</li>
											<li>
												<?php echo $this->Html->link(
													'個人の業績',
													array('controller' => 'task_records', 'action' => 'individual_achievements'),
													array('escape' => false));
												?>
											</li>
										</ul>
									</li>
									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-group"></i><span>スタッフ一覧</span>',
											array('controller' => 'employees', 'action' => 'team_members'),
											array('escape' => false));
										?>
									</li>
									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-calendar"></i><span>カレンダー</span>',
											array('controller' => 'calendars', 'action' => 'index'),
											array('escape' => false));
										?>
									</li>
								</ul>
							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
