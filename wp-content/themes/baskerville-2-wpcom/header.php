<?php

/**
 * This template is used for the website header
 *
 * @package Baskerville 2
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e('Skip to content', 'baskerville-2'); ?></a>

	<header class="header section small-padding bg-dark bg-image" style="background-image: url(<?php if ('' !== get_header_image()) {
																									echo esc_url(get_header_image());
																								} ?>);" role="banner">

		<!-- Boyón de Whatsapp  <img class="btn-whatsapp" src="https://clientes.dongee.com/whatsapp.png" target="_blank" rel="noopener" width="64" height="64" alt="Whatsapp" onclick="window.location.href='https://wa.me/5493425387363?text=¡Hola!%20Estoy%20interesadx%20en%20tu%20revista'">	-->


		<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			<div class="cover"></div>
		</a>

		<a href="#search-container" class="screen-reader-text search-toggle"><?php esc_html_e('Search', 'baskerville-2'); ?></a>
		<div class="header-search-block bg-graphite hidden" id="search-container">
			<?php get_search_form(); ?>
		</div> <!-- /header-search-block -->

		<div class="header-inner section-inner">

			<div class="header-banner">
				<article class="header-banner-image">
					<img src="http://localhost/wordpress/wp-content/uploads/2024/03/Mecha-Corta-Banner-home-02-1024x173-1.jpg">
				</article>
			</div>

			<?php the_custom_logo(); ?>

		

			<?php baskerville_2_social_menu(); ?>

		</div> <!-- /header-inner -->
	</header> <!-- /header -->

	<div class="navigation section no-padding bg-dark">
		<nav id="site-navigation" class="navigation-inner section-inner clear" role="navigation">
			<button class="nav-toggle fleft" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'baskerville-2'); ?></button>
			<div class="main-navigation">
				<?php
				wp_nav_menu(array(
					'container'      => '',
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				));
				?>
			</div>

			<a class="search-toggle search-icon fright" href="#"><?php esc_html_e('Open Search', 'baskerville-2'); ?></a>
		</nav> <!-- /navigation-inner -->
	</div> <!-- /navigation -->