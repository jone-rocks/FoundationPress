<?php
/*
Template Name: Kontakt
*/
get_header(); ?>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<img src="<?php echo get_template_directory_uri() ?>/img/full-bg-img.jpg" />
		</div>
	</div>
</div>

<!-- Kontaktformular -->
<div class="grid-container contactform">
	<div class="grid-x grid-padding-y align-center">
		<div class="cell small-8 text-center">
			<h3 class="color-red">H3 Headline - Kontakt</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
		</div>
	</div>
</div>



<!-- Telefonnummern -->
<div class="bg-red">
	<div class="grid-container">
		<div class="grid-x phonenumbers">
			<div class="cell small-4 text-center">
				<strong>Kundenhotline</strong></br>
				089897128937
			</div>
			<div class="cell small-4 text-center">
				<strong>Bestellservice</strong></br>
				089897128937
			</div>
			<div class="cell small-4 text-center">
				<strong>Vertrieb</strong></br>	
				089897128937
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
