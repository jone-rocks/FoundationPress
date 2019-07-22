<?php
/*
Template Name: Kontakt
*/
get_header(); ?>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<?php echo wp_get_attachment_image( get_field('contact_header_img'), 'full' ); ?>
		</div>
	</div>
</div>

<!-- Kontaktformular -->
<div class="grid-container contactform">
	<div class="grid-x grid-padding-y align-center">
		<div class="cell small-8 text-center">
			<h1 class="color-red"><?php the_field('headline'); ?></h1>
			<p><?php the_field('text'); ?></p>
		</div>
	</div>
	<div class="grid-x contactform">
			<div class="cell small-4 large-offset-1">
				<?php the_field('adresse'); ?>
			</div>
			<div class="cell small-6">
				<?php the_field('contactform'); ?>
			</div>
		</div>
</div>



<!-- Telefonnummern -->
<div class="bg-red">
	<div class="grid-container">
		<div class="grid-x phonenumbers">
			<div class="cell small-4 text-center">
				<strong><?php the_field('phonenumber1_txt'); ?></strong></br>
				<?php the_field('phonenumber1'); ?>
			</div>
			<div class="cell small-4 text-center">
				<strong><?php the_field('phonenumber2_txt'); ?></strong></br>
				<?php the_field('phonenumber2'); ?>
			</div>
			<div class="cell small-4 text-center">
				<strong><?php the_field('phonenumber3_txt'); ?></strong></br>
				<?php the_field('phonenumber3'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Google Maps -->
<div class="grid-container full">
	<div class="grid-x">
		<div class="cell">
			<?php 
				$location = get_field('map');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>



<?php get_footer();
