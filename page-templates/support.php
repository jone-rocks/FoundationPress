<?php
/*
Template Name: Support
*/
get_header(); ?>


<!-- Full width image -->
<?php
$full_bg_img = wp_get_attachment_image_src( get_field('support_header'), "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg1" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<!--<?php echo wp_get_attachment_image( get_field('support_header'), 'full' ); ?>-->
				<img src="<?php echo $full_bg_img[0]; ?>" />
			</div>	
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
			<div class="cell small-12 medium-8 text-center">
				Reaktion unter 2 Stunden <img class="support_availability" src="<?php echo get_template_directory_uri() ?>/img/raabit_support_icon_clock.svg" /> 24 Stunden &mdash; 7 Tage
			</div>
		</div>
	</div>
</div>

<!-- Rufbereitschaft -->
<div class="grid-container rufbereitschaft"><a id="rufbereitschaft"></a>
	<div class="grid-x align-center padding-top-80">
		<div class="cell small-12 medium-8 text-center text-center-mobile">
			<h4 class="headline_middle with-icon" style="background-image: url('<?php the_field('rufbereitschaft_icon'); ?>')"><?php the_field('rufbereitschaft_title'); ?></h4>
			<span class="sexy_line_middle"></span>
			<h3 class="color-red"><?php the_field('rufbereitschaft_headline'); ?></h3>
			<p><?php the_field('rufbereitschaft_text'); ?></p>
		</div>
	</div>
	<div class="grid-x grid-padding-y grid-margin-x check-row first-row">
		<div class="cell small-12 medium-4 medium-offset-2 border-bottom-lightgrey">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken1'); ?>
		</div>
		<div class="cell small-12 medium-4 border-bottom-lightgrey">
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken2'); ?>
		</div>
	</div>
	<div class="grid-x grid-padding-y grid-margin-x check-row">
		<div class="cell small-12 medium-4 medium-offset-2"> <!-- border-bottom bei mobile -->
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken3'); ?>
		</div>
		<div class="cell small-12 medium-4"> <!-- border-bottom bei mobile -->
			<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('rufbereitschaft_haken4'); ?>
		</div>
	</div>
	<div class="grid-x grid-padding-y mail-phone">
		<div class="cell small-6 medium-2 medium-offset-4 text-center border-right">
			<img src="<?php echo get_template_directory_uri() ?>/img/raabit_support_icon_mail.svg" /><br />
			<a href="mailto:info@Raab-IT.de">info@raab-it.de</a>
		</div>
		<div class="cell small-6 medium-2 text-center">
			<img src="<?php echo get_template_directory_uri() ?>/img/raabit_support_icon_phone.svg" /><br />
			08001013398
		</div>
	</div>
</div>

<!-- Klaus Raab -->
<div class="bg-light-gray-gradient">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-padding-collapse align-middle klaus-raab">
			<div class="cell small-12 medium-7">
				<?php echo wp_get_attachment_image( get_field('zitat_bild'), 'full' ); ?>
			</div>
			<div class="cell small-12 medium-5 padding-small quote">
				<p><img src="<?php echo get_template_directory_uri() ?>/img/raabit_icon_zitat.svg" class="quote_icon" />
					<?php the_field('zitat_txt'); ?></p>
				<strong>Klaus Raab, Geschäftsführer</strong>
			</div>
		</div>
	</div>
</div>

<!-- Benutzerservice -->
<div class="bg-light-grey"><a id="benutzerservice"></a>
	<div class="grid-container benutzerservice">
		<div class="grid-x align-center padding-top-80">
			<div class="cell small-12 medium-8 text-center text-center-mobile">
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_field('benutzerservice_icon'); ?>')"><?php the_field('benutzerservice_title'); ?></h4>
				<span class="sexy_line_middle"></span>
				<h3 class="color-red"><?php the_field('benutzerservice_headline'); ?></h3>
				<p><?php the_field('benutzerservice_text'); ?></p>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x check-row first-row">
			<div class="cell small-12 medium-4 medium-offset-2 border-bottom-red">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken1'); ?>
			</div>
			<div class="cell small-12 medium-4 border-bottom-red">
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken2'); ?>
			</div>
		</div>
		<div class="grid-x grid-padding-y grid-margin-x check-row">
			<div class="cell small-12 medium-4 medium-offset-2"> <!-- border-bottom bei mobile -->
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken3'); ?>
			</div>
			<div class="cell small-12 medium-4"> <!-- border-bottom bei mobile -->
				<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" /> <?php the_field('Benutzerservice_haken4'); ?>
			</div>
		</div>
	</div>
</div>


<!-- Full width image -->

<?php
$full_bg_img = wp_get_attachment_image_src( get_field('support_level_optic'), "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg2" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<?php echo wp_get_attachment_image( get_field('support_level_optic'), 'full' ); ?>
			</div>	
		</div>
	</div>
</div>


<!-- Support-Level -->
<div class="grid-container supportlevel"><a id="supportlevels"></a>
	<div class="grid-x align-center padding-top-80">
		<div class="cell small-12 medium-4">
			<h4 class="headline_middle with-icon" style="background-image: url('<?php the_field('support-level_icon'); ?>')"><?php the_field('support-level_title'); ?></h4>
			<span class="sexy_line_middle"></span>
		</div>
		<div class="cell small-0 medium-8">
		</div>
	</div>
	<div class="grid-x align-center padding-bottom-80">
		<div class="cell small-12 medium-4 text-center-mobile">
			<h3 class="color-red"><?php the_field('support-level_headline'); ?></h3>
			<p><?php the_field('support-level_txt'); ?></p>
		</div>
		<?php
		if( have_rows('support-level_accordion') ): ?>
		<div class="cell small-12 medium-8 support-accordion">
			<ul class="accordion" data-accordion data-allow-all-closed="true">
			<?php while ( have_rows('support-level_accordion') ) : the_row(); ?>
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
