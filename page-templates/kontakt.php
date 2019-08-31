<?php
/*
Template Name: Kontakt
*/
get_header(); ?>


<!-- Full width image -->
<?php
$full_bg_img = wp_get_attachment_image_src( get_field('contact_header_img'), "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg1" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<?php echo wp_get_attachment_image( get_field('contact_header_img'), 'full' ); ?>
			</div>	
		</div>
	</div>
</div>

<!-- Kontaktformular -->
<div class="grid-container contactform">
	<div class="grid-x grid-padding-y grid-padding-x align-center">
		<div class="cell small-12 medium-8 text-center">
			<h1 class="color-red"><?php the_field('headline'); ?></h1>
			<p><?php the_field('text'); ?></p>
		</div>
	</div>
	<div class="grid-x grid-padding-x contactform_info">
		<div class="cell small-12 medium-4 large-offset-1">
			<span style="background-image: url('<?php the_field('adresse_icon'); ?>')"><?php the_field('adresse'); ?></span>
			<span style="background-image: url('<?php the_field('telefon_fax_icon'); ?>')"><?php the_field('telefon_fax'); ?></span>
			<span style="background-image: url('<?php the_field('email_icon'); ?>')"><?php the_field('email'); ?></span>
		</div>
		<div class="cell small-12 medium-6">
			<?php the_field('contactform'); ?>
		</div>
	</div>
</div>



<!-- Telefonnummern -->
<div class="bg-red">
	<div class="grid-container">
		<div class="grid-x phonenumbers">
			<div class="cell small-12 medium-4 text-center">
				<strong><?php the_field('phonenumber1_txt'); ?></strong></br>
				<?php the_field('phonenumber1'); ?>
			</div>
			<div class="cell small-12 medium-4 text-center">
				<strong><?php the_field('phonenumber2_txt'); ?></strong></br>
				<?php the_field('phonenumber2'); ?>
			</div>
			<div class="cell small-12 medium-4 text-center">
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
