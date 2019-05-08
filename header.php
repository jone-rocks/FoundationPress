<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">
		<!-- Mobile -->
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>title-bar-left
				</span>
			</div>
		</div>

		<!-- Desktop -->
		<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<img class="logo" src="<?php echo get_template_directory_uri() ?>/img/raab_logo.png" alt="">
				</div>
			</div>
			<div class="top-bar-right">
				<ul class="dropdown menu" data-dropdown-menu>
					<li>
						<a href="#">Item 1</a>
						<ul class="menu">
						<li><a href="#">Item 1A</a></li>
						<!-- ... -->
						</ul>
					</li>
					<li><a href="#">Item 2</a></li>
					<li><a href="#">Item 3</a></li>
					<li><a href="#">Item 4</a></li>
				</ul>
			</div>
		</nav>

	</header>
