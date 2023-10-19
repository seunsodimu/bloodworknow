<!DOCTYPE html>
<html lang="es" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->
	 
	 <meta charset="utf-8">
	 
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	 <link rel="icon" type="../image/png" href="../images/favicon.png">
	
     <title><?php echo $title; ?></title>
    
     <meta name="description" content="<?php echo $metadescription; ?>">
    
     <meta name="keywords" content="<?php echo $metakeywords; ?>">
    
     <meta name="author" content="#">


 
	 <!-- Mobile Specific Metas
    
     ================================================== -->
    
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    
     <meta name="format-detection" content="telephone=no">

	 
	 <!-- Web Font
	 ============================================= -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
	
	
	<!-- CSS
    
     ================================================== -->
	 
	 
	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" id="color" href="../css/blue.css">
    
	
	<!-- Medicom Style
	============================================= -->
    <link rel="stylesheet" href="../css/medicom.css">

	
	<!-- This page
	============================================= -->
    <link href="../css/revolution_style.css" rel="stylesheet">
	<link href="../css/settings.css" rel="stylesheet">
	
	
	<!-- Bootstrap
	============================================= -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	
	
	<!-- Header Scripts
    
    ================================================== -->
	
	<script src="../js/modernizr-2.6.2.min.js"></script>
	
	
	</head>
    <body class="fixed-header lang-es">
		
		
		
    
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
    
		
		<!-- Header
		============================================= -->
		<header id="header" class="medicom-header medical-nav">
		
			<!-- Top Row
			============================================= -->
			<div class="colourfull-row"></div>
        <div class="top-sec">
				<div class="top-sec-detail" id="top-sec-detail">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<ul class="contact-info">
                                    <li><i class="fa fa-mobile"></i> <a href="tel:8773706907">(877) 370-6907</a></li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:info@bloodworknow.com">info@BloodWorkNow</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="social2">
									<li><a href="https://www.facebook.com/mybloodworknow/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/BloodWorkNow1"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/bloodworknow/"><i class="fa fa-instagram"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<a href="#." class="toggle-btn" id="toggle-btn"><i class="fa fa-plus"></i></a>
			</div>
			<div class="container">
				
				
				<!-- Primary Navigation
				============================================= -->
				<nav class="navbar navbar-default" role="navigation">
				
					<!-- Brand and toggle get grouped for better mobile display
					============================================= -->
					
					<div class="navbar-header">
						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						
						<a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt="" title=""></a>
					
					</div>
				
					
					<div class="collapse navbar-collapse navbar-right" id="primary-nav">
						
						<ul class="nav navbar-nav">
							
							<li class="<?php if($page=='home'){echo 'active';} ?>">
								<a href="/">Inicio</a>						
								
							</li>
							
							<li class="dropdown <?php if($page=='howitworks'){echo 'active';} ?>">
								
								<a href="howitworks" class="dropdown-toggle" data-toggle="dropdown">Cómo funciona</a>
								<ul class="dropdown-menu"> 
									<li><a href="howitworks">Cómo funciona</a></li>                                                                                          
									<li><a href="about">Sobre nosotras</a></li>
									<li><a href="faq">Preguntas frecuentes</a></li>
									<li><a href="https://shop.bloodworknow.com/es/blogs/news">Noticias e información</a></li>
									
								</ul>
							</li>
						  
							<li class="<?php if($page=='findtests'){echo 'active';} ?>">
								<a href="https://shop.bloodworknow.com/es">Encontrar pruebas</a>
								
							</li>
                            <li class="<?php if($page=='nearestlab'){echo 'active';} ?>">
								<a href="https://shop.bloodworknow.com/apps/store-locator"> Ubicación del laboratorio</a>
							</li>
							<li class="<?php if($page=='contact'){echo 'active';} ?>">
								<a href="contact">Contacta con nosotros</a>
								
							</li>
							
						</ul>
						
					</div>
					
				</nav>

			</div>

    </header>