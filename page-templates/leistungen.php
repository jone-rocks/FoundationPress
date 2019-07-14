<?php
/*
Template Name: Leistungen
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

<!-- Dark BG Header -->
<div class="bg-dark-grey">
	<div class="grid-container">
		<div class="grid-x grid-padding-y grid-padding-x align-middle small-up-1 medium-up-2 large-up-2 dark-header">
			<div class="cell">
				<h1>Lorem Ipsum</h1>
				<h2>Lorem Ipsum</h2>
			</div>
			<div class="cell">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
	</div>
</div>

<!-- Gebaeudetechnik -->
<div class="grid-container">
	<div class="grid-x grid-padding-y grid-padding-x">
		<div class="cell small-7">
			<h3 class="color-red">Gebäudetechnik</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
		</div>
		<div class="cell small-5">
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
		</div>
	</div>
</div>

<!-- Telekommunikation -->
<div class="bg-light-grey">
	<div class="grid-container full">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell small-6">
				<img src="https://picsum.photos/1000/500" />
			</div>
			<div class="cell small-6">
				<h3 class="color-red">Telekommunikation</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
	</div>
</div>

<!-- Netzwerk -->
<div class="bg-dark-grey">
	<div class="grid-container netzwerk">
		<div class="grid-x text-center">
			<div class="cell">
				<h3 class="color-red">Gebäudetechnik</h3>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x align-center">
			<div class="cell small-4">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
			</div>
			<div class="cell small-4">
				<p>no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x check-row">
			<div class="cell small-4 large-offset-2 border-bottom-red">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> Lorem ipsum dolor sit amet
			</div>
			<div class="cell small-4  border-bottom-red">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> consetetur sadipscing elitr
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x check-row">
			<div class="cell small-4 large-offset-2">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> sed diam nonumy eirmod tempor
			</div>
			<div class="cell small-4">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> eirmod tempor invidunt ut labore e
			</div>
		</div>
	</div>
</div>

<!-- Jochen Raab -->
<div class="bg-light-grey">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle klaus-raab">
			<div class="cell small-7">
				<img src="<?php echo get_template_directory_uri() ?>/img/jochen-raab.png" />
			</div>
			<div class="cell small-5 padding-small quote">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
				<strong>Klaus Raab, Geschäftsführer</strong>
			</div>
		</div>
	</div>
</div>

<!-- Serversysteme -->
<div class="grid-container">
	<div class="grid-x grid-padding-y align-center headline">
		<div class="cell small-8 text-center">
			<h3 class="color-red">Serversysteme</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
		</div>
	</div>
	<div class="grid-x grid-padding-y staerken">
		<div class="cell small-3 text-center">
			<img src="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/3.0.1/air.svg" width="60px" /><br />
			Installation
		</div>
		<div class="cell small-3 text-center">
			<?php echo wp_get_attachment_image( get_field('startseite_header_img'), 'full' ); ?><br />
			Betreuung
		</div>
		<div class="cell small-3 text-center">
			<?php echo wp_get_attachment_image( get_field('startseite_header_img'), 'full' ); ?><br />	
			Fernwartung
		</div>
		<div class="cell small-3 text-center">
			<?php echo wp_get_attachment_image( get_field('startseite_header_img'), 'full' ); ?><br />
			Rufbereitschaft
		</div>
	</div>
</div>

<!-- Systemintegration -->
<div class="grid-container">
	<div class="grid-x grid-padding-y grid-padding-x headline">
		<div class="cell small-7">
			<h3 class="color-red">Systemintegration</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
		</div>
		<div class="cell small-5">
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
		</div>
	</div>
</div>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<img src="<?php echo get_template_directory_uri() ?>/img/full-bg-img.jpg" />
		</div>
	</div>
</div>

<!-- Software -->
<div class="bg-dark-grey">
	<div class="grid-container software">
		<div class="grid-x text-center">
			<div class="cell">
				<h3 class="color-red">Software</h3>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x align-center">
			<div class="cell small-4">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
			</div>
			<div class="cell small-4">
				<p>no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
	</div>
</div>


<!-- IT-Security -->
<div class="grid-container">
	<div class="grid-x grid-padding-y grid-padding-x">
		<div class="cell small-7">
			<h3 class="color-red">IT-Security</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
		</div>
		<div class="cell small-5">
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
		</div>
	</div>
</div>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<img src="<?php echo get_template_directory_uri() ?>/img/full-bg-img.jpg" />
		</div>
	</div>
</div>

<!-- Hosting und Domain -->
<div class="bg-light-grey">
	<div class="grid-container software">
		<div class="grid-x text-center">
			<div class="cell">
				<h3 class="color-red">Hosting und Domain</h3>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x align-center">
			<div class="cell small-4">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
			</div>
			<div class="cell small-4">
				<p>no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
