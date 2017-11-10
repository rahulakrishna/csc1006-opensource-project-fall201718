<!DOCTYPE html>
<html>
	<head>
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="bower_components/materialize/dist/css/materialize.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	</head>

	<body>
		<!-- Dropdown Structure -->
		<nav>
			<div class="nav-wrapper blue">
				<a href="#!" class="brand-logo">BookMyTrain</a>
				<!-- activate side-bav in mobile view -->
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">

					<!-- Dropdown Trigger -->
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav" id="mobile-demo">

				</ul>
			</div>
		</nav>

		<div class="container">
			<br><br><br>
			<div class="row">
				<div class="col s4 push-s4 card">
					<div class="card-content row">
						<div class="card-title center">Welcome to BookMyTrain</div>
						<div class="col s12">
							<a href="login.php" class="btn blue col s12">Login</a><br><br>
							<a href="signup.php" class="btn blue col s12">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="bower_components/materialize/dist/js/materialize.js"></script>
	</body>
</html>