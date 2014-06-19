<!DOCTYPE html>
<!--[if lt IE 7 ]> <html dir="ltr" lang="sv-SE" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="sv-SE" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="sv-SE" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" lang="sv-SE" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="sv-SE"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/> <!-- We hate IE -->
    
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width, minimal-ui"/> <!-- iPhone, iPod, iPad -->
   	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- iPhone, iPod, iPad -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black" /> <!-- iPhone, iPod, iPad -->
    
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <!--[if lt IE 9]> <script src="<?php echo XC1_THEME_JS_URI;?>/html5.js"></script> <![endif]-->
	
	<link rel="stylesheet" href="<?php echo XC1_THEME_CSS_URI;?>/style.css" type="text/css" media="screen" /> <!-- Style CSS -->  
	
	<!--[if IE]><link rel="stylesheet" href="<?php echo XC1_THEME_CSS_URI;?>/ie.css" type="text/css" media="screen" /><![endif]-->
	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <link rel="shortcut icon" type="image/png" href="<?php echo XC1_THEME_IMAGES_URI; ?>/xc1-favicon.png" />
    
    <link rel="apple-touch-icon" href="<?php echo XC1_THEME_IMAGES_URI; ?>/touch-icon-iphone.png" />

	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo XC1_THEME_IMAGES_URI; ?>/touch-icon-ipad.png" />
	
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo XC1_THEME_IMAGES_URI; ?>/touch-icon-iphone-retina.png" />
	
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo XC1_THEME_IMAGES_URI; ?>/touch-icon-ipad-retina.png" />
    
    <?php wp_head(); ?>   
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
	
	<div id="container">

		<header>
			<img src="<?php echo XC1_THEME_IMAGES_URI; ?>/gul.gif">
			<h1>Korv med M00se</h1>
			<div class="logo">
				<img src="<?php echo XC1_THEME_IMAGES_URI; ?>/skull.png">
			</div>
		</header>	