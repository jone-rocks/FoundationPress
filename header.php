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

	<div class="contact-icons">
		<span class="phone"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_phone.svg" /></span>
		<span class="mail"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_mail.svg" /></span>
		<span class="newsletter"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_newsletter.svg" /></span>
	</div>

	<header class="site-header" role="banner">

		<div class="top-bar-additional">
			<?php wp_nav_menu( array ('menu' => 'top-bar-additional', 'menu_class' => 'menu' , 'container' => '', 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',) ) ?>
		</div>

		<!-- Mobile -->
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<!-- Desktop -->
		<div class="top-bar-container" data-sticky-container>
			<div class="sticky" id="example2" data-sticky data-top-anchor="example2:top" data-options="anchor: page; marginTop: 0; stickyOn: small;" style="width:100%; z-index: 9999">
				<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>" data-options="sticky_on: large">
					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/raabit_logo_header.svg" class="logo_nonsticky" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/raabit_logo_haken_header.svg" class="logo_sticky" />
						</div>
					</div>
					<div class="top-bar-right">
						<?php wp_nav_menu( array ('menu' => 'nav', 'menu_class' => 'dropdown menu' , 'container' => '', 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',) ) ?>
					</div>
				</nav>
			</div>
		</div>


	</header>
