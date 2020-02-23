<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="grid-container" id="post-<?php the_ID(); ?>">
	<div class="grid-x align-center padding-top-80">
		<div class="cell small-12 medium-8 text-center text-center-mobile">
			
			<?php
		if ( is_single() ) {
			the_title( '<h3 class="entry-title color-red">', '</h3>' );
		}
	?>
			
			
		<?php foundationpress_entry_meta(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>






		</div>
	</div>
</div>
