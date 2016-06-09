<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mangetsu.com | Login</title>

	<!-- CSS -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<?php echo $this->Html->css('font-awesome'); ?>
	<?php echo $this->Html->css('nanoscroller'); ?>
	<?php echo $this->Html->css('theme_styles'); ?>


	<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<?php echo $this->Html->meta('icon'); ?>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body id="login-page" class="theme-whbl fixed-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<div id="login-box">
				<?php echo $this->Session->flash(); ?>
					<div id="login-box-holder">
						<div class="row">
							<div class="col-xs-12">
								<header id="login-header">
									<div id="login-logo">
										<?php echo $this->Html->image('logo.png') ?>
									</div>
								</header>
								<div id="login-box-inner">
									<?php echo $this->Form->create('User', array(
										'action' => 'login',
										'inputDefaults' => array(
											'label' => false,
											'div' => false,
											'class' => 'form-control'
											),
										));
									?>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<?php
												echo $this->Form->input('username', array(
													'class' => 'form-control',
													'placeholder' => 'User Name'));
											?>
										</div>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"></i></span>
											<?php
												echo $this->Form->input('password', array(
													'class' => 'form-control',
													'type' => 'password',
													'placeholder' => 'Password'));
											?>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<button type="submit" class="btn btn-success col-xs-12">Login</button>
											</div>
										</div>
									<?php echo $this->Form->end(); ?>
								</div>
							</div>
						</div>
					</div>

					<div id="login-box-footer">
						<div class="row">
							<div class="col-xs-12"><?php echo $this->Html->link('Create account', 'register') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php echo $this->Html->script('jquery'); ?>
	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->Html->script('jquery.nanoscroller.min'); ?>
	<?php echo $this->Html->script('notificationFx'); ?>

	<!-- theme scripts -->
	<?php echo $this->Html->script('scripts'); ?>

	<!-- this page specific scripts -->

	<!-- this page specific inline scripts -->


</body>
</html>