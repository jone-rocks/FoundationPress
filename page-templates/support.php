<?php
/*
Template Name: Support
*/
get_header(); ?>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<?php echo wp_get_attachment_image( get_field('support_header'), 'full' ); ?>
		</div>
	</div>
</div>

<!-- Dark BG Header -->
<div class="bg-dark-grey">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle small-up-1 medium-up-2 large-up-2 dark-header">
			<div class="cell">
				<h1><?php the_field('support_title'); ?></h1>
				<h2><?php the_field('support_title2'); ?></h2>
			</div>
			<div class="cell">
				<p><?php the_field('support_titletext'); ?></p>
			</div>
		</div>
	</div>
</div>

<!-- 24/7 -->
<div class="bg-red">
	<div class="grid-container">
		<div class="grid-x align-center s24-7">
			<div class="cell small-8 text-center">
				Reaktion unter 2 Stunden <img class="support_availability" src="<?php echo get_template_directory_uri() ?>/img/stopwatch.png" /> 24 Stunden - 7 Tage
			</div>
		</div>
	</div>
</div>

<!-- Rufbereitschaft -->
<div class="grid-container rufbereitschaft">
	<div class="grid-x align-center padding-x-80">
		<div class="cell small-8 text-center">
			<h3 class="color-red"><?php the_field('rufbereitschaft_headline'); ?></h3>
			<p><?php the_field('rufbereitschaft_text'); ?></p>
		</div>
	</div>
	<div class="grid-x grid-padding-y grid-margin-x check-row">
		<div class="cell small-4 large-offset-2 border-bottom-lightgrey">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken1'); ?>
		</div>
		<div class="cell small-4 border-bottom-lightgrey">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken2'); ?>
		</div>
	</div>
	<div class="grid-x grid-padding-y grid-margin-x check-row">
		<div class="cell small-4 large-offset-2">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken3'); ?>
		</div>
		<div class="cell small-4">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken4'); ?>
		</div>
	</div>
	<div class="grid-x grid-padding-y mail-phone">
		<div class="cell small-2 large-offset-4 text-center border-right">
			<img src="<?php echo get_template_directory_uri() ?>/img/mail-icon.png" /><br />
			<a href="mailto:info@Raab-IT.de">info@raab-it.de</a>
		</div>
		<div class="cell small-2 text-center">
			<img src="<?php echo get_template_directory_uri() ?>/img/phone-icon.png" /><br />
			<a href="call:+498001013398">08001013398</a>
		</div>
	</div>
</div>

<!-- Klaus Raab -->
<div class="bg-light-gray-gradient">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle klaus-raab">
			<div class="cell small-7">
				<?php echo wp_get_attachment_image( get_field('zitat_bild'), 'full' ); ?>
			</div>
			<div class="cell small-5 padding-small quote">
				<p><img src="<?php echo get_template_directory_uri() ?>/img/raabit_icon_zitat.svg" class="quote_icon" />
					<?php the_field('zitat_txt'); ?></p>
				<strong>Klaus Raab, Geschäftsführer</strong>
			</div>
		</div>
	</div>
</div>

<!-- Benutzerservice -->
<div class="bg-light-grey">
	<div class="grid-container benutzerservice">
		<div class="grid-x align-center padding-x-80">
			<div class="cell small-8 text-center">
				<h3 class="color-red"><?php the_field('benutzerservice_headline'); ?></h3>
				<p><?php the_field('benutzerservice_text'); ?></p>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x check-row">
			<div class="cell small-4 large-offset-2 border-bottom-red">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken1'); ?>
			</div>
			<div class="cell small-4  border-bottom-red">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken2'); ?>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x check-row">
			<div class="cell small-4 large-offset-2">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken3'); ?>
			</div>
			<div class="cell small-4">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken4'); ?>
			</div>
		</div>
	</div>
</div>



<!-- Support-Level -->
<div class="grid-container supportlevel">
	<div class="grid-x align-center padding-x-80">
		<div class="cell small-4">
			<h3 class="color-red"><?php the_field('support-level_headline'); ?></h3>
			<p><?php the_field('support-level_txt'); ?></p>
		</div>
		<?php
		if( have_rows('support-level_accordion') ): ?>
			<div class="cell small-8 support-accordion">
				<ul class="accordion" data-accordion>
					
					<?php
			while ( have_rows('support-level_accordion') ) : the_row(); ?>
				
				<li class="accordion-item" data-accordion-item>
					<a href="#" class="accordion-title"><span class="accordion-circle"></span><?php the_sub_field('support-level_accordion_title'); ?></a>
					<div class="accordion-content" data-tab-content>
						<p><?php the_sub_field('support-level_accordion_txt'); ?></p>
					</div>
				</li>
			<?php endwhile; ?>
				</ul>
			</div>
			<?php
		else :
		endif;
		?>
		
	</div>
</div>

<?php get_footer();
