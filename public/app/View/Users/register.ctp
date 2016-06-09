<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mangetsu.com | Register page</title>

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
<body id="login-page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div id="login-box">
					<div class="row">
						<div class="col-xs-12">
							<header id="login-header">
								<div id="login-logo">
									<?php echo $this->Html->image('logo.png') ?>
								</div>
							</header>
							<div id="login-box-inner">
								<?php echo $this->Form->create('User', array(
									'action' => 'add',
									'inputDefaults' => array(
										'label' => false,
										'div' => false,
										'class' => 'form-control'
										)
									)); ?>
									<div class="input-group username">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<?php echo $this->Form->input('username', array(
											'placeholder' => 'Enter User Name',
											'class' => array('form-control ajax-check')
										 )); ?>
									</div>
									<div class="input-group ajax-check">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<?php echo $this->Form->input('password', array(
											'type' => 'password',
											'placeholder' => 'Enter password',
											'class' => 'form-control password-1'));
										?>
									</div>
									<div class="input-group ajax-check confirm-password">
										<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
										<?php echo $this->Form->input('password', array(
											'type' => 'password',
											'placeholder' => 'Re-Enter password',
											'class' => 'form-control password-2'));
										?>
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
											<?php echo $this->Form->input('user_role_id', array(
												'options' => $userRolesValue,
												'empty' => "--Select User Role--"
												));
											?>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<button type="submit" class="btn btn-success col-xs-12">Register</button>
										</div>
									</div>
								</form>
								<?php echo $this->Form->end(); ?>
							</div>
							<div id="login-box-footer">
								<div class="row">
									<div class="col-xs-12"><?php echo $this->Html->link('Login', 'login') ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- global scripts -->
	<?php echo $this->Html->script('jquery'); ?>
	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->Html->script('jquery.nanoscroller.min'); ?>

	<!-- theme scripts -->
	<?php echo $this->Html->script('scripts'); ?>

	<!-- this page specific scripts -->
	<script>
	$(document).ready(function(){

		var isCheckedPassword = 0;

		$('.password-2').on('blur', function(){
			var password_1 = $('.password-1').val();
			var password_2 = $('.password-2').val();

			if(password_1 !== password_2){
				if(isCheckedPassword) return;
				$('.confirm-password').addClass("form-group has-error");
				$('.confirm-password').after('<div class="form-group has-error"><span class="help-block"><i class="icon-remove-sign">Password is different from above</i></span></div>');
				isCheckedPassword++;
			}

			if(password_1 === password_2){
				if(isCheckedPassword) {
					$('.confirm-password').removeClass("form-group has-error");
					$('.confirm-password').next().remove();
					isCheckedPassword = 0;
				}
			}
		});


	});
	</script>

</body>
</html>