<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

add_filter('use_block_editor_for_post', '__return_false');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyDmgWGGIORoCcA9bqHrRe3qozMbtQziD1Q');
}

add_action('acf/init', 'my_acf_init');


// Do NOT include the opening php tag above

add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );
/*
 * Modify TinyMCE editor to remove H1.
 */
function tiny_mce_remove_unused_formats($init) {
	// Add block format elements you want to show in dropdown
	$init['block_formats'] = 'Paragraph=p;Heading 3=h3';
	return $init;
}



	
add_theme_support( 'post-thumbnails' );



function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a href="'. get_permalink($post->ID) . '">weiterlesen ...</a>.';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );