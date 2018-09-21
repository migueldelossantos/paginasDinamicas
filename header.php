<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div  class="container-fluid">
		<!-- Init Header -->
		<header class="container">
			<div class="row hidden-xs">
				<div class="col-md-2 ">
					<?php the_custom_logo(); ?>
				</div>
				<div class="col-md-8 text-center">
					<h1><a id="nombre-uni" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h3><a><?php bloginfo('description'); ?></a></h3>
					<p id="slogan"><?php echo get_theme_mod('slogan_setting');?></p>
				</div>
				<div class="col-md-2">
					
				</div>
			</div>
		</header>
		<!-- End Header -->

		<nav class="navbar navbar-expand-md">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<a class="navbar-toggler" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			 	<span class="oi oi-menu"></span>
			</button>
			<?php wp_nav_menu(
				array(
					'menu' => 'nav_menu',
					'container_id' => 'navbarHeader',
					'container_class' => 'collapse navbar-collapse',
					'menu_class' => 'navbar-nav'
				)); 
			?>
		</nav>
			
		