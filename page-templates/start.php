<?php
/*
Template Name: Startseite
*/
get_header(); ?>


<!-- Full width image -->
<?php
$full_bg_img = wp_get_attachment_image_src( get_field('support_header'), "full" );
?>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">

		<?php 
			$gallery = get_field('startseite_header_img2');
			$rand = array_rand($gallery, 1);
			if( $gallery ): ?>

			<div class="full_img_bg full_img_bg1" style="background-image: url('<?php echo $gallery[$rand]['url']; ?>')">

				<img src="<?php echo $gallery[$rand]['url']; ?>" />
	
			</div>

			<?php endif; ?>

		</div>
	</div>
</div>

<!-- Dark BG Header -->
<div class="bg-dark-grey">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle small-up-1 medium-up-2 large-up-2 dark-header">
			<div class="cell">
				<h1><?php the_field('startseite_title'); ?></h1>
				<h2><?php the_field('startseite_header'); ?></h2>
			</div>
			<div class="cell">
				<p><?php the_field('startseite_titletext'); ?></p>
			</div>
		</div>
	</div>
</div>

<!-- Stärken und Vorteile -->
<div class="grid-container">
	<div class="grid-x align-center padding-top-80">
		<div class="cell small-8 text-center">
			<h3 class="color-red"><?php the_field('staerken_title'); ?></h3>
			<p><?php the_field('staerken_text'); ?></p>
		</div>
	</div>
	<div class="grid-x staerken padding-bottom-80">
		<div class="cell small-6 medium-3 text-center">
		<?php echo wp_get_attachment_image( get_field('staerken_img_1'), 'full' ); ?><br />
			<?php the_field('staerken_imgtxt_1'); ?>
		</div>
		<div class="cell small-6 medium-3 text-center">
			<?php echo wp_get_attachment_image( get_field('staerken_img_2'), 'full' ); ?><br />
			<?php the_field('staerken_imgtxt_2'); ?>
		</div>
		<div class="cell small-6 medium-3 text-center">
			<?php echo wp_get_attachment_image( get_field('staerken_img_3'), 'full' ); ?><br />	
			<?php the_field('staerken_imgtxt_3'); ?>
		</div>
		<div class="cell small-6 medium-3 text-center">
			<?php echo wp_get_attachment_image( get_field('staerken_img_4'), 'full' ); ?><br />
			<?php the_field('staerken_imgtxt_4'); ?>
		</div>
	</div>
</div>

<!-- Geschäftsführung -->
<div class="grid-container">
	<div class="grid-x geschaeftsfuehrung">
		<div class="cell small-12 medium-5 bg-dark-grey padding-small">
			<h3><?php the_field('geschaeftsfuehrung_header'); ?></h3>
			<p><?php the_field('geschaeftsfuehrung_txt'); ?></p>
		</div>
		<div class="cell small-12 medium-7">
			<?php echo wp_get_attachment_image( get_field('geschaeftsfuehrung_img'), 'full' ); ?>
		</div>
	</div>
</div>

<!-- Referenzen-->
<div class="grid-container">
	<div class="grid-x grid-padding-y align-center padding-top-80">
		<div class="cell small-8 text-center">
			<h3 class="color-red"><?php the_field('referenzen_header'); ?></h3>
			<p><?php the_field('referenzen_txt'); ?></p>
		</div>
	</div>
	<div class="grid-x align-center">
		<div class="cell slick_slider_cell">
			<div class="slider">
			<?php
				if( have_rows('logo_slider') ):
					while ( have_rows('logo_slider') ) : the_row();
					?>
						<div><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php echo wp_get_attachment_image( get_sub_field('logo'), 'full' ); ?></a></div>
					<?php
					endwhile;
				endif;
			?>
			</div>
		</div>
	</div>
</div>

<!-- Leistungen -->
<div class="grid-container">
	<div class="grid-x align-center leistungen-header padding-top-80">
		<div class="cell text-center">
			<h3 class="color-red"><?php the_field('leistungen_header'); ?></h3>
		</div>
	</div>

	<div class="grid-x grid-margin-x align-center grid-margin-y leistungen">
		<?php
			if( have_rows('leistungen_tile') ):
				while ( have_rows('leistungen_tile') ) : the_row();?>
					<div class="cell small-6 medium-4 text-center">

					<a href="<?php the_sub_field('leistunen_link'); ?>" class="leistungen_link">

						<?php 
						$img_src = get_sub_field('leistungen_icon');
						$img_hover = get_sub_field('leistungen_icon_hover');
						?>
						
						<img src="<?php echo $img_src; ?>" data-src="<?php echo $img_src; ?>" data-hover="<?php echo $img_hover; ?>" class="icon-hover" alt="" />

						<?php
						// echo wp_get_attachment_image( get_sub_field('leistungen_icon'), 'full'));
						?><br />

						<?php the_sub_field('leistungen_txt'); ?>
				</a>
					</div>
				<?php endwhile;
			endif;
		?>
	</div>
</div>

<!-- Aktuelles -->
<!--
<div class="bg-light-grey">
	<div class="grid-container">
		<div class="grid-x grid-padding-y align-center">
			<div class="cell text-center">
				<h3 class="color-red">Aktuelles aus dem Newsblog</h3>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-padding-x grid-margin-x grid-margin-y aktuelles">
			<div class="cell small-3 bg-dark-grey">
				<h4>Headline</h4>
				<hr class="bg-red" />
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
				<button>mehr lesen ...</button>
			</div>
			<div class="cell small-3 bg-dark-grey">
				<h4>Headline</h4>
				<hr class="bg-red" />
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
				<button>mehr lesen ...</button>
			</div>
			<div class="cell small-3 bg-dark-grey">
				<h4>Headline</h4>
				<hr class="bg-red" />
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
				<button>mehr lesen ...</button>
			</div>
			<div class="cell small-3 bg-dark-grey">
				<h4>Headline</h4>
				<hr class="bg-red" />
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
				<button>mehr lesen ...</button>
			</div>
		</div>
	</div>
</div>
-->


<?php get_footer();
