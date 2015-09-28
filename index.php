<!DOCTYPE html>
<html ng-app>
	<head>
		<title>UFRGSMUN 2015</title>
		<meta name="viewport" content="width=device-width initial-scale=1">
		<meta charset="utf-8">
		<meta property="og:title" content="UFRGSMUN 2015" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="UFRGSMUN is an academic simulation where the participants act as representatives of the worlds's nations in one of the many organs to be simulated." />
		<meta property="og:url" content="http://www.ufrgs.br/ufrgsmun/2015/index.php" />
		<meta property="og:image" content="http://www.ufrgs.br/ufrgsmun/2015/images/logo_full.png" />
		<link rel="icon" href="images/favicon.png" />
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="css/normalize.css">
		<link type="text/css" rel="stylesheet" href="css/mainNew.css">
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>

	<body>
		<div class="container-fluid">



			<!-- Menu -->
			<?php include 'header.php'; ?>
			<!-- Fim Menu -->


			<?php

			$page = (isset($_GET['page']))? $_GET['page'] : '';

			switch ($page) {
				case '':
					require 'home.php';
					break;

				case 'about':
					require 'about/index.php';
					break;

				case 'committees':
					require 'committees/index.php';
					break;

				case 'apply':
					require 'apply/index.php';
					break;

				case 'preparation':
					require 'preparation/index.php';
					break;

				case 'conference':
					require 'conference/index.php';
					break;

				default:
					require '404.php';
					break;
			}

			?>

			<?php include 'footer.php';?>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<!--<script type="text/javascript">
			if ((window.location.href == 'http://localhost/ufrgsmun2015/') || (window.location.href == 'http://localhost/ufrgsmun2015/index.php')) {
				document.getElementById('nav-header').style.setProperty('background', 'transparent');
			}
		</script>-->
	</body>

</html>
