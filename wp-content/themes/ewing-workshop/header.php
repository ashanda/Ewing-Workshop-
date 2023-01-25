<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ewing-workshop
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>        
		<link rel="shortcut icon" type="image/x-icon" href="inc_files/images/favicon.png"/>	
        <link rel="apple-touch-icon" href="inc_files/images/apple-touch-icon.png"/> 
		
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="application-name" content="Ewing Workshop"/>		
		
		<!--styles-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/lightslider/src/css/lightslider.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?=1.00"/>	

		<!--fonts awesome-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc_files/fonts/font-awesome/css/font-awesome.min.css"/>
		
		<!--fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather:wght@300&family=Playfair+Display&family=Special+Elite&display=swap" rel="stylesheet">
		
		<title>Ewing Workshop</title>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<div id="main-wrapper">				
			<div id="header-wrapper">
				<div class="menu-holder">						
					<a href="#" id="menu-button">MENU</a>					
					<div id="menu-wrapper">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'main-menu',
								'container'		 => "ul",
								'container_id'	 => "main-menu",	
							)
						);
						?>
					</div>
				</div>
				<div id="header-inner">
					<div id="contact-details"><a href="tel:<?php the_field('company_phone_number','option');?>"><?php the_field('company_phone_number','option');?></a></div>						
					<a href="<?php echo get_home_url(); ?>" id="main-logo"><img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/logo.png" alt="" width="" height=""/></a>	
					<div class="social-icon">
						<a href="<?php the_field('facebook_link','option');?>"><img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/instagram.png" alt="" width="" height=""/></a>
						<a href="<?php the_field('instagrame_link','option');?>"><img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/fb.png" alt="" width="" height=""/></a>
						<a href="<?php the_field('etsy_link','option');?>"><img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/e.png" alt="" width="" height=""/></a>
					</div>
				</div>
			</div><!--header wrapper end-->

