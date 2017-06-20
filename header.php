</!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php print $title; ?></title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Custom CSS -->
		<link href="css/vendor/custom.css" rel="stylesheet">
	</head>

	<body>

	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
          		</button>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li<?php if ($title == "Piemonte") { print ' class="active"';}?>><a href="index.php">Home</a></li>
					<li<?php if ($title == "Plpi") { print ' class="active"';}?>><a href="alpi.php">Alpi</a></li>
					<li<?php if ($title == "Novara") { print ' class="active"';}?>><a href="novara.php">Novara</a></li>
					<li<?php if ($title == "Lago Maggiore") { print ' class="active"';}?>><a href="lago_maggiore.php">Lago Maggiore</a></li>
				</ul>
			</div><!-- div navbar -->
		</div><!-- div container -->
    </nav>
    <div class="container" style="padding-top: 20px; padding-left: 10px">