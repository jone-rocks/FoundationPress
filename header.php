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
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	
	<?php $kontakt_icons = get_field('kontakt_icons', 'option');	

		if( $kontakt_icons ):  

			while( have_rows('hero') ): the_row(); ?>
				<div class="contact-icons">
					<a href="tel:<?php get_sub_field('telefon') ?>"><span class="phone"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_phone.svg" /></span></a>
					<a href="mailto:<?php get_sub_field('mail') ?>"><span class="mail"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_mail.svg" /></span></a>
					<a href="<?php get_sub_field('newsletter') ?>"><span class="newsletter"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_newsletter.svg" /></span></a>
					<a href="" data-toggle="360-modal"><span class="360"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_360.svg" /></span></a>
				</div>

			<?php endwhile; ?>
			
		<?php endif; ?>


		<div class="reveal" id="360-modal" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
		<iframe onload="iFrameHeight(this)" name="" src="<?php get_sub_field('google_360') ?>" width="100%" height="450" scrolling="auto" frameborder="0" title="view 360 grad" class="wrapper">
	Keine IFrames</iframe>
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>




		
<!--
	<div class="contact-icons">
		<span class="phone"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_phone.svg" /></span>
		<span class="mail"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_mail.svg" /></span>
		<span class="newsletter"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_newsletter.svg" /></span>
		<span class="newsletter"><img src="<?php echo get_template_directory_uri() ?>/img/raabit_sidebar_icon_360.svg" /></span>
	</div>
-->
	<header class="site-header" role="banner">

		<div class="top-bar-additional">
			<?php wp_nav_menu( array ('menu' => 'top-bar-additional', 'menu_class' => 'menu' , 'container' => '', 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',) ) ?>
		</div>

		<!-- Mobile -->
		<!--<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>
		-->
		<div data-sticky-container>
			<div class="sticky" id="example2" data-sticky data-top-anchor="example2:top" data-options="anchor: page; marginTop: 0; stickyOn: small;" style="width:100%; z-index: 9999">
				<div class="navtext-container">
					<img src="<?php echo get_template_directory_uri(); ?>/img/raabit_logo_header.svg" />
				</div>
				<input type="checkbox" class="mobmen-btn" id="mobmen-btn">
				<label for="mobmen-btn" class="mobmen-icon"><span class="navicon"></span></label>
				<ul class="mobmen">
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				</ul>
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
						<?php foundationpress_top_bar_r(); ?>
						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</nav>
			</div>
		</div>


	</header>
