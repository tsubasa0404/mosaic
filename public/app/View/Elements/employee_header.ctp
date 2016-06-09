			<header class="navbar" id="header-navbar">
				<div class="container">
					<?php echo $this->Html->link(
						$this->Html->image("logo.png", array('class' => 'normal-logo logo-white')),
							"/users/dashboard",
							array('id' => 'logo', 'class' => 'navbar-brand', 'escape' => false)
							);
						?>
					</a>

					<div class="clearfix">
						<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa fa-bars"></span>
						</button>

				<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
					<ul class="nav navbar-nav pull-left">
						<li>
							<a class="btn" id="make-small-nav">
								<i class="fa fa-bars"></i>
							</a>
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								English
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="item">
									<a href="#">
										English
									</a>
								</li>
								<li class="item">
									<a href="javascript:void(0);">
										日本語
									</a>
								</li>
								<li class="item">
									<a href="javascript:void(0);">
										Khmer
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="nav-no-collapse pull-right" id="header-nav">
					<ul class="nav navbar-nav pull-right">
						<li class="mobile-search">
							<a class="btn">
								<i class="fa fa-search"></i>
							</a>

							<div class="drowdown-search">
								<form role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search...">
										<i class="fa fa-search nav-search-icon"></i>
									</div>
								</form>
							</div>

						</li>
						<li class="dropdown profile-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php echo $this->Html->image('users/'. $user_img); ?>
								<span class="hidden-xs"><?php echo $username; ?></span> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
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
										array('escape' => false)
									);
									?>
								</li>
							</ul>
						</li>
						<li class="hidden-xxs">
							<?php echo $this->Html->link(
								'<i class="fa fa-power-off"></i>',
								array('controller' => 'users', 'action' => 'logout'),
								array('escape' => false, 'class' => 'btn')
							) ?>
						</li>
					</ul>
				</div>
				</div>
				</div>
			</header>
