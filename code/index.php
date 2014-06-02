<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<title>Portfolio of Verena Zaiser</title>

	<link rel="stylesheet" type="text/css" href="//bootswatch.com/superhero/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrapValidator.min.css"/>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- header -->
	<div id="header" title="sitename"> 
		<h1>Portfolio of Verena Zaiser</h1>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav" id="navigation">
						<li><a href="#page-home">home</a></li>
						<li><a href="#page-about" class="animateskillmeters">about</a></li>
						<li><a href="#page-projects">projects</a></li>
						<li><a href="#page-contact">contact</a></li>
						<li><a href="#page-impressum">impressum</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div> 
	<!-- navigation -->

	<div id="content">
		<div id="page-home" class="page">
			<div class="container">
				<?php include("content/home.html") ?>
			</div>
		</div>

		<div id="page-about" class="page">
			<div class="container">
				<h1 class="h1-content">about</h1>
				<?php include("content/about.html") ?>
			</div>
		</div>

		<div id="page-projects" class="page">
			<div class="container">
				<h1 class="h1-content">projects</h1>
				<?php include("content/projects.html") ?>
			</div>
		</div>	

		<div id="page-contact" class="page">
			<div class="container">
				<h1 class="h1-content">contact</h1>
				<?php include("content/contact.html") ?>
			</div>
		</div>

		<div id="page-impressum" class="page">
			<div class="container">
			<h1 class="h1-content">impressum</h1>
				<?php include("content/impressum.html") ?>
			</div>
		</div>
	</div> <!-- pagewrap end -->

	<script src="js/circular-progress.min.js"></script>
	<script src="js/custom.js" type="text/javascript"></script>

</body>
</html>