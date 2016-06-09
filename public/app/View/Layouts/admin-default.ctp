<!doctype html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="robots" content="noindex">

	<title>
		<?php if(isset($title_for_layout)): echo $title_for_layout . '|' ; endif; ?>
		Mangetsu.com
	</title>

	<?php echo $this->Html->meta('icon'); ?>
	<?php echo $this->fetch('meta'); ?>

	<!-- Common CSS -->
	<?php echo $this->fetch('css'); ?>
	<?php
		echo $this->Html->css('bootstrap.min', array( 'inline' => true));
		echo $this->Html->css('font-awesome', array('inline' => true));
		echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('inline' => true));
		echo $this->Html->css('nanoscroller', array('inline' => true));
		echo $this->Html->css('theme_styles', array('inline' => true));
		echo $this->Html->css('datepicker', array('inline' => true));
		echo $this->Html->css('bootstrap-timepicker', array('inline' => true));
		echo $this->Html->css('select2', array('inline' => true));
		echo $this->Html->css('mosaic-css/common', array('inline' => true));
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
	<!--
		<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
		.en-markup-crop-options {
		    top: 18px !important;
		    left: 50% !important;
		    margin-left: -100px !important;
		    width: 200px !important;
		    border: 2px rgba(255,255,255,.38) solid !important;
		    border-radius: 4px !important;
		}

		.en-markup-crop-options div div:first-of-type {
		    margin-left: 0px !important;
		}
		</style>
	-->
</head>

<body class="theme-whbl  fixed-header pace-done">
	<div class="pace  pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  		<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>
	<div id="theme-wrapper">

		<!-- header -->
		<?php echo $this->element('header'); ?>
		<!-- /header -->
		<div id="page-wrapper" class="container">
			<div class="row">
				<!-- sidebar -->
				<?php echo $this->element('sidebar'); ?>
				<!-- /sidebar -->

				<div id="content-wrapper">
					<!-- Contents -->
					<?php echo $this->fetch('content'); ?>
					<!-- /Contents -->

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

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>