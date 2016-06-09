<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'Mangetsu');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="robots" content="noindex">

	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>

	<!-- CSS -->
	<?php
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome');
		echo $this->Html->css('nanoscroller');
		echo $this->Html->css('theme_styles');
	?>

		<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<?php echo $this->Html->meta('icon'); ?>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

	<?php
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
	?>
</head>
<body>

			<?php echo $this->fetch('content'); ?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

