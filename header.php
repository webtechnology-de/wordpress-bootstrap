<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- Add Your favicon here -->
		<!--<link rel="icon" href="img/favicon.ico">-->

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- Bootstrap core CSS -->
		<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

		<link href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

	</head>
	
	<body id="page-top">

	<div class="navbar-wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="200px"></img>
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="page-scroll" href="#page-top">Home</a></li>
						<li><a class="page-scroll" href="#features">L&ouml;sungen</a></li>
						<li><a class="page-scroll" href="#bintelligence">Business Intelligence</a></li>
						<li><a class="page-scroll" href="#biweb">BI4web</a></li>
						<li><a class="page-scroll" href="#contact">Kontakt</a></li>
						<li><a class="page-scroll" href="#impressum">Impressum</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div id="inSlider" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#inSlider" data-slide-to="0" class="active"></li>
			<li data-target="#inSlider" data-slide-to="1"></li>
			<li data-target="#inSlider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h1>Business Intelligence</h1>

						<p>Mittelstands-L&ouml;sungen f&uuml;r
							<br/>Ihre individuellen Anforderungen.</p>
					</div>
					<div class="carousel-image">

						<?php
						$post_thumbnail_id = get_post_thumbnail_id();
						$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, array(100,100));
						if( $featured_src ) {
							?>
							<img src="<?php echo $featured_src[0]; ?>" width="<?php echo $featured_src[1]; ?>" height="<?php echo $featured_src[2]; ?>">
						<?php } ?>
						<img src="<?php bloginfo('template_url'); ?>/img/laptop.png" alt="laptop"/>
					</div>
				</div>
				<!-- Set background for slide in css -->
				<div class="header-back one"></div>

			</div>
			<div class="item">
				<div class="container">
					<div class="carousel-caption">
						<h1>Internet of Things</h1>

						<p>Intelligente Produkte.
							<br/>Daten aus der ganzen Welt.</p>
					</div>
				</div>
				<!-- Set background for slide in css -->
				<div class="header-back two"></div>
			</div>
			<div class="item">
				<div class="container">
					<div class="carousel-caption blank">
						<h1>Kompetente Beratung und
							<br/> Softwareentwicklung.</h1>

						<p>Individuelle Software und
							<br/>intuitive Apps für komplexe Aufgaben.</p>
					</div>
				</div>
				<!-- Set background for slide in css -->
				<div class="header-back three"></div>
			</div>
		</div>
		<a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">zurück</span>
		</a>
		<a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">vor</span>
		</a>
	</div>

