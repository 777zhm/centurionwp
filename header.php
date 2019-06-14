<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="description" content="centurion group">
	
	<title><?php echo "centurion group"; ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="burger_open_box d-lg-none col-md-1 col-sm-3 col-3 text-center">
				<span class="burger_open d-lg-none" id="burger_open">&#9776;</span>
			</div>
			<div class="logotype col-lg-1 col-md-2 col-sm-6 col-6 text-center">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
			</div>
			<div class="main_menu col-lg-7 d-none d-lg-block text-center">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
			<div class="header_contacts col-lg-3 d-none d-lg-block text-center">
				<a href="tel:<?php the_field('admin_tel_1', 'theme_settings'); ?>"><?php the_field('admin_tel_1', 'theme_settings'); ?></a>
				<a href="mailto:<?php the_field('admin_email', 'theme_settings'); ?>"><?php the_field('admin_email', 'theme_settings'); ?></a>
			</div>

			<div class="lang_menu col-lg-1 col-md-1 col-sm-3 col-3 text-center">
				<?php wp_nav_menu( array('theme_location' => 'lang_menu') ); ?>
			</div>
		</div>
	</div>
	<div id="burger_nav" class="burger_nav">
		<span class="burger_close" id="burger_close">&times;</span>
		<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
	</div>
</header>

<main id="main" class="main" role="main">