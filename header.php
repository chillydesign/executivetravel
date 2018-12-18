<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
				<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
				<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
				<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
				<link rel="manifest" href="/site.webmanifest">
				<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#00476e">
				<meta name="msapplication-TileColor" content="#00476e">
				<meta name="theme-color" content="#00476e">

				<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Source+Sans+Pro:400,400i,700,900,900i" rel="stylesheet">



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>


        <header class="header" id="header">
            <!-- <div class="container"></div> -->
                <a href="<?php echo home_url(); ?>" class="branding"><?php bloginfo('name'); ?></a>
                <a href="#" id="menu_button" >Menu</a>






        </header>

            <nav id="navigation_menu" role="navigation">
                 <?php chilly_nav('primary-navigation'); ?>
            </nav>
