<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cube - Bootstrap Admin Template</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />

	<!-- RTL support - for demo only -->
	<script src="js/demo-rtl.js"></script>
	<!--
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl">
	-->

	<!-- libraries -->
	<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css" />

	<!-- this page specific styles -->

	<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body id="login-page-full">
	<div id="login-full-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="login-box">
						<div class="row">
							<div class="col-xs-12">
								<header id="login-header">
									<div id="login-logo">
										<img src="img/logo.png" alt=""/>
									</div>
								</header>
								<div id="login-box-inner">
								<form role="form" action="registration.html">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" type="text" placeholder="User Name">
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" placeholder="Enter password">
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
										<input type="password" class="form-control" placeholder="Re-enter password">
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
										<select class="form-control">
											<option value="1">Admin</option>
											<option value="2">Mangetsu Manager</option>
											<option value="3">Gokuraku</option>
											<option value="4">Investor</option>
											<option value="5">Staff Members</option>
											<option value="6">Sample User</option>
										</select>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<button type="submit" class="btn btn-success col-xs-12">Register</button>
										</div>
									</div>
								</form>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- global scripts -->
	<script src="js/demo-skin-changer.js"></script> <!-- only for demo -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.nanoscroller.min.js"></script>

	<script src="js/demo.js"></script> <!-- only for demo -->

	<!-- this page specific scripts -->


	<!-- theme scripts -->
	<script src="js/scripts.js"></script>

	<!-- this page specific inline scripts -->

</body>
</html>