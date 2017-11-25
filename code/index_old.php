<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Language" content="en">
	<meta name="description" content="Welcome to the portfolio of Verena Zaiser, Software Developer living in Stuttgart.">
	<meta name="keywords" content="verena zaiser, freelancer programming, software developer, game developer, game programmer, android development, mobile development">
	<meta name="author" content="Verena Zaiser">

	<title>Portfolio of Verena Zaiser</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- Piwik -->
	<script type="text/javascript">
		var _paq = _paq || [];
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="//piwik.verena-zaiser.de/";
			_paq.push(['setTrackerUrl', u+'piwik.php']);
			_paq.push(['setSiteId', 1]);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
	<noscript><p><img src="//piwik.verena-zaiser.de/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->
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

<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<script src="js/circular-progress.min.js" type="text/javascript"></script>
	<script src="js/parsley.min.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script type="text/javascript">
  $('#contactForm').parsley();
</script>
</body>
</html>
