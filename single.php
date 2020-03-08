<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<!-- Full width image -->
<?php
$full_bg_img = wp_get_attachment_image_src( 2216, "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg1" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<img src="<?php echo $full_bg_img[0]; ?>" />
			</div>	
		</div>
	</div>
</div>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<?php the_post_navigation(); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
