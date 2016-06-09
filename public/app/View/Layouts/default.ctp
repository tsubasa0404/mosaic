<!doctype html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="robots" content="noindex">

	<title>
		<?php if(isset($title_for_layout)): echo $title_for_layout . ' |' ; endif; ?>
		Mangetsu.com
	</title>

	<?php echo $this->Html->meta('icon'); ?>
	<?php echo $this->fetch('meta'); ?>

	<!-- Common CSS -->
	<?php echo $this->fetch('css'); ?>
	<?php
		// echo $this->Html->css('bootstrap-datetimepicker.min', array('inline' => true));
		echo $this->Html->css('bootstrap.min', array( 'inline' => true));
		echo $this->Html->css('font-awesome', array('inline' => true));
		echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('inline' => true));
		echo $this->Html->css('nanoscroller', array('inline' => true));
		echo $this->Html->css('theme_styles', array('inline' => true));
		echo $this->Html->css('datepicker', array('inline' => true));
		echo $this->Html->css('bootstrap-timepicker', array('inline' => true));
		echo $this->Html->css('select2', array('inline' => true));
		echo $this->Html->css('mosaic-css/common', array('inline' => true));
		echo $this->Html->css('mosaic-css/mosaic', array('inline' => true));
		echo $this->Html->css('//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300', array('inline' => true));
	?>

	<!-- page-css array('inline' => false, 'block' => 'page-css') -->
	<?php echo $this->fetch('page-css'); ?>

	<!-- this page specific styles -->
	<!-- <link rel="stylesheet" href="css/libs/daterangepicker.css" type="text/css">
	<link rel="stylesheet" href="css/libs/jquery-jvectormap-1.2.2.css" type="text/css">
	<link rel="stylesheet" href="css/libs/weather-icons.css" type="text/css"> -->

	<style>
		.table-first-none tbody > tr > td:first-child {font-size: 0.875em; font-weight: normal;}
		.table-total tbody tr:last-child {border-top: 3px solid #e7ebee;}
	</style>

	<!-- Favicon -->
	<link type="image/x-icon" href="favicon.png" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body class="theme-blue-gradient  fixed-header pace-done">
	<div class="pace  pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  		<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>
	<div id="theme-wrapper">

		<!-- header -->
		<?php switch ($user['user_role_id']) {
			case 1:
				echo $this->element('admin_header', array(
				'user_img' => $user['user_img'],
				'username' => $user['username']
				));
				break;
			case 2:
				echo $this->element('mangetsu_header', array(
				'user_img' => $user['user_img'],
				'username' => $user['username']
				));
				break;
			case 3:
				echo $this->element('gokuraku_header', array(
				'user_img' => $user['user_img'],
				'username' => $user['username']
				));
				break;
			case 4:
				echo $this->element('employee_header', array(
				'user_img' => $user['user_img'],
				'username' => $user['username'],
				'employee_id' => $user['employee_id']
				));
				break;
			case 5:
				echo $this->element('manager_header', array(
				'user_img' => $user['user_img'],
				'username' => $user['username'],
				));
				break;
			default:
				break;
		} ?>
		<!-- /header -->
		<div id="page-wrapper" class="container">
			<div class="row">
				<!-- sidebar -->
				<?php switch ($user['user_role_id']) {
					case 1:
						echo $this->element('admin_sidebar', array(
						'user_img' => $user['user_img'],
						'username' => $user['username']
						));
						break;
					case 2:
						echo $this->element('mangetsu_sidebar', array(
						'user_img' => $user['user_img'],
						'username' => $user['username']
						));
						break;
					case 3:
						echo $this->element('gokuraku_sidebar', array(
						'user_img' => $user['user_img'],
						'username' => $user['username']
						));
						break;
					case 4:
						echo $this->element('employee_sidebar', array(
						'user_img' => $user['user_img'],
						'username' => $user['username'],
						'employee_id' => $user['employee_id']
						));
					case 5:
						echo $this->element('manager_sidebar', array(
						'user_img' => $user['user_img'],
						'username' => $user['username']
						));
						break;
					default:
						break;
				} ?>
				<!-- /sidebar -->

				<div id="content-wrapper">
					<div class="row" style="opacity: 1;">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">

										<div class="pull-left">
											<ol class="breadcrumb">
												<li><?php echo $this->Html->getCrumbs(' > ', 'Home') ?></li>
											</ol>
											<!-- Contents -->
											<?php echo $this->fetch('content'); ?>
											<!-- /Contents -->
						</div><!-- /col-lg-12 -->
					</div>
											<!-- footer -->
											<?php echo $this->element('footer'); ?>
											<!-- /footer -->
				</div>
				<!-- /content-wrapper -->
			</div>
		</div>
		<!-- /#page-wrapper.container -->
	</div>
	<!-- /#theme-wrapper -->


	<!-- global scripts -->
	<?php
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('jquery.nanoscroller.min');
		echo $this->Html->script('scripts');
		echo $this->Html->script('pace.min');
	?>
	<?php echo $this->fetch('script'); ?>

	<!-- this page specific scripts ##array('inline' => false, 'block' => 'page-js') -->
	<?php echo $this->fetch('page-js'); ?>

	<!-- Form page specific scripts ##array('inline' => false, 'block' => 'form-js') -->
	<?php echo $this->fetch('form-js'); ?>

	<!-- Modal scripts  ##array('inline' => false, 'block' => 'modal-js') -->
	<?php echo $this->fetch('modal-js'); ?>

	<!-- this page specific inline scripts -->
	<?php echo $this->fetch('inline-script'); ?>

	<div class="jvectormap-label"></div>
<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'my-script')); ?>
	$(function(){
		$('.alert').fadeOut(5000);
	});
<?php $this->Html->scriptEnd(); ?>
	<?php echo $this->fetch('my-script'); ?>

</body>
</html>