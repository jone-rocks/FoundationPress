<?php
/*
Template Name: Support
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
		<div class="grid-x grid-padding-y small-up-1 medium-up-2 large-up-2">
			<div class="cell">
				<h1>Headline 1</h1>
				<h2>Headline 2</h2>
			</div>
			<div class="cell">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
	</div>
</div>

<!-- 24/7 -->
<div class="bg-red">
	<div class="grid-container">
		<div class="grid-x grid-padding-y align-center">
			<div class="cell small-8 text-center">
				Reaktion unter 2 Stunden <img class="support_availability" src="<?php echo get_template_directory_uri() ?>/img/stopwatch.png" /> 24 Stunden - 7 Tage
			</div>
		</div>
	</div>
</div>

<!-- Rufbereitschaft -->
<div class="grid-container rufbereitschaft">
	<div class="grid-x grid-padding-y align-center">
		<div class="cell small-8 text-center">
			<h3 class="color-red">H3 Headline - Rufbereitschaft</h3>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
		</div>
	</div>
	<div class="grid-x grid-padding-y grid-margin-x check-row">
		<div class="cell small-4 large-offset-2 border-bottom-lightgrey">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> Lorem ipsum dolor sit amet
		</div>
		<div class="cell small-4 border-bottom-lightgrey">
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
	<div class="grid-x grid-padding-y mail-phone">
		<div class="cell small-2 large-offset-4 text-center border-right">
			<img class="check" src="http://cdn.onlinewebfonts.com/svg/img_132401.png" /><br />
			<a href="mailto:info@Raab-IT.de">info@Raab-IT.de</a>
		</div>
		<div class="cell small-2 text-center">
			<img class="check" src="http://cdn.onlinewebfonts.com/svg/img_132401.png" /><br />
			<a href="call:+498001013398">08001013398</a>
		</div>
	</div>
</div>

<!-- Benutzerservice -->
<div class="bg-light-grey">
	<div class="grid-container benutzerservice">
		<div class="grid-x grid-padding-y align-center">
			<div class="cell small-8 text-center">
				<h3 class="color-red">H3 Headline - Rufbereitschaft</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
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

<?php get_footer();
