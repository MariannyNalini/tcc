<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    
    
    <?php
        if ( is_home() ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/plugins/animations.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sections/home.css" media="screen" />
    <?} else{?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sections/interna.css" media="screen" />
		<?}?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

    <!-- wrapper -->
		
	<!-- header -->
	<header class="header clear" role="banner">
      <?php
        
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $eh_sobre = strpos($actual_link ,"sobre");
        
       
        if ( is_home() ) { 
          require 'header-tree.php';
        }else if ($eh_sobre == 0) {
          require 'nav.php';
        }
      ?>
	</header>
	<!-- /header -->
