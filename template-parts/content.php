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

<div class="grid-container post-overview" id="post-<?php the_ID(); ?>">
	<div class="grid-x align-center">
		<div class="cell small-12 medium-8">
		

		
<div class="post-thumbnail">
			<?php

if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>
</div>

<?php

			the_title( '<h3 class="entry-title color-red">', '</h3>' );
	?>
			
			<div class="single_metadata"><?php the_time('d. F Y'); ?>  <?php the_category(', '); ?></div>


	<div class="entry-content">
		<?php the_excerpt	(); ?>
	</div>


		</div>
	</div>
</div>
