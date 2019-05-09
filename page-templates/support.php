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

<?php get_footer();
