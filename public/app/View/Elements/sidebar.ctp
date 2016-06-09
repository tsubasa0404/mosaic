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
													array('controller' => 'users', 'action' => 'profile'. '/' . $username),
													array('escape' => false));
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
													'Team Achievements',
													array('controller' => 'task_records', 'action' => 'team_achievements'),
													array('escape' => false));
												?>
											</li>
											<li>
												<?php echo $this->Html->link(
													'Indivisual Achievements',
													array('controller' => 'task_records', 'action' => 'indivisual_achievements'),
													array('escape' => false));
												?>
											</li>
											<li>
												<?php echo $this->Html->link(
													'Ranking',
													array('controller' => '', 'action' => ''),
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
											'<i class="fa fa-picture-o"></i><span>Gallery</span>',
											array('controller' => '', 'action' => ''),
											array('escape' => false));
										?>
									</li>

									<li class="nav-header hidden-sm hidden-xs">
										Admin tools
									</li>

									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-cny"></i><span>Finance</span>',
											array('controller' => '', 'action' => ''),
											array('escape' => false));
										?>
									</li>

									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-edit"></i>
											<span>Edit</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<?php echo $this->Html->link(
													'<i class="fa fa-user"></i><span>User List</span>',
													array('controller' => 'users', 'action' => 'index'),
													array('escape' => false));
												?>
											</li>
											<li>
												<?php echo $this->Html->link(
													'<i class="fa fa-trophy"></i><span>Goal Settings</span>',
													array('controller' => '', 'action' => ''),
													array('escape' => false));
												?>
											</li>
										</ul>
									</li>

									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-database"></i><span>phpMyAdmin</span>',
											"https://mysqladmin.lolipop.jp/pma/index.php?db=LAA0623458-mangetsudb&server=120&token=382ce9b5234a5fcc4dad2885bd0a5340",
											array('target' => '_blank', 'escape' => false));
										?>
									</li>

									<li>
										<?php echo $this->Html->link(
											'<i class="fa fa-book"></i><span>Blog</span>',
											array('controller' => '', 'action' => ''),
											array('escape' => false));
										?>
									</li>

									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-edit"></i>
											<span>Forms</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="form-elements.html">
													Elements
												</a>
											</li>
											<li>
												<a href="x-editable.html">
													X-Editable
												</a>
											</li>
											<li>
												<a href="form-wizard.html">
													Wizard
												</a>
											</li>
											<li>
												<a href="form-wizard-popup.html">
													Wizard popup
												</a>
											</li>
											<li>
												<a href="form-wysiwyg.html">
													WYSIWYG
												</a>
											</li>
											<li>
												<a href="form-summernote.html">
													WYSIWYG Summernote
												</a>
											</li>
											<li>
												<a href="form-ckeditor.html">
													WYSIWYG CKEditor
												</a>
											</li>
											<li>
												<a href="form-dropzone.html">
													Multiple File Upload
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-desktop"></i>
											<span>UI Kit</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="ui-elements.html">
													Elements
												</a>
											</li>
											<li>
												<a href="notifications.html">
													Notifications &amp; Alerts
												</a>
											</li>
											<li>
												<a href="modals.html">
													Modals
												</a>
											</li>
											<li>
												<a href="video.html">
													Video
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-toggle">
													Icons
													<i class="fa fa-angle-right drop-icon"></i>
												</a>
												<ul class="submenu">
													<li>
														<a href="icons-awesome.html">
															Awesome Icons
														</a>
													</li>
													<li>
														<a href="icons-halflings.html">
															Halflings Icons
														</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="ui-nestable.html">
													Nestable List
												</a>
											</li>
											<li>
												<a href="typography.html">
													Typography
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-toggle">
													3 Level Menu
													<i class="fa fa-angle-right drop-icon"></i>
												</a>
												<ul class="submenu">
													<li>
														<a href="#">
															3rd Level
														</a>
													</li>
													<li>
														<a href="#">
															3rd Level
														</a>
													</li>
													<li>
														<a href="#">
															3rd Level
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="maps.html">
											<i class="fa fa-map-marker"></i>
											<span>Google Maps</span>
											<span class="label label-danger pull-right">Updated</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-file-text-o"></i>
											<span>Extra pages</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="faq.html">
													FAQ
												</a>
											</li>
											<li>
												<a href="emails.html">
													Email Templates
												</a>
											</li>
											<li>
												<a href="login.html">
													Login
												</a>
											</li>
											<li>
												<a href="login-full.html">
													Login Full
												</a>
											</li>
											<li>
												<a href="registration.html">
													Registration
												</a>
											</li>
											<li>
												<a href="registration-full.html">
													Registration Full
												</a>
											</li>
											<li>
												<a href="forgot-password.html">
													Forgot Password
												</a>
											</li>
											<li>
												<a href="forgot-password-full.html">
													Forgot Password Full
												</a>
											</li>
											<li>
												<a href="lock-screen.html">
													Lock Screen
												</a>
											</li>
											<li>
												<a href="lock-screen-full.html">
													Lock Screen Full
												</a>
											</li>
											<li>
												<a href="error-404.html">
													Error 404
												</a>
											</li>
											<li>
												<a href="error-404-v2.html">
													Error 404 Nested
												</a>
											</li>
											<li>
												<a href="error-500.html">
													Error 500
												</a>
											</li>
											<li>
												<a href="extra-grid.html">
													Grid
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="/angularjs">
											<i class="fa fa-google"></i>
											<span>AngularJS Demo</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
