<?php
/*
Template Name: Leistungen
*/
get_header(); ?>


<!-- Full width image -->
<?php
$full_bg_img = wp_get_attachment_image_src( get_field('leistungen_header'), "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg1" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<?php echo wp_get_attachment_image( get_field('leistungen_header'), 'full' ); ?>
			</div>	
		</div>
	</div>
</div>

<!-- Dark BG Header -->
<?php if( have_rows('title') ): 
	while( have_rows('title') ): the_row(); ?>

	<div class="bg-dark-grey">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle small-up-1 medium-up-2 large-up-2 dark-header">
				<div class="cell">
					<h1><?php the_sub_field('header'); ?></h1>
					<h2><?php the_sub_field('subheader'); ?></h2>
				</div>
				<div class="cell">
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Consulting -->
<?php if( have_rows('consulting') ): 
while( have_rows('consulting') ): the_row(); ?>
	<div class="bg-ultralight-grey"><a id="consulting"></a>
		<div class="grid-container align-center consulting-container">
			<div class="grid-x grid-padding-x grid-padding-x align-center padding-top-80">
				<div class="cell small-12 medium-8 text-center">
					
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
						<span class="sexy_line_middle"></span>
				</div>
				<div class="cell small-5">
				</div>
			</div>

			<div class="grid-x align-center grid-padding-x medium-padding-collapse consulting padding-bottom-80">
				<div class="cell small-12 medium-8 text-center text-center-mobile">
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

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

<!-- Gebaeudetechnik -->
<?php if( have_rows('gebaeudetechnik') ): 
while( have_rows('gebaeudetechnik') ): the_row(); ?>
	<div class="grid-container align-center gebaeudetechnik-container"><a id="servicedesk"></a>
		<div class="grid-x grid-padding-x align-center grid-padding-x padding-top-80">
			<div class="cell small-12 medium-8 text-center text-center-mobile">
				
			<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle"></span>
			</div>
			<div class="cell small-5">
			</div>
		</div>

		<div class="grid-x align-center grid-padding-x medium-padding-collapse gebaeudetechnik padding-bottom-80">
			<div class="cell small-12 medium-8 text-center text-center-mobile">
				<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Telekommunikation -->
<?php if( have_rows('telekommunikation') ): 
while( have_rows('telekommunikation') ): the_row(); ?>
	<div class="bg-light-grey"><a id="facilitytelefonie"></a>
		<div class="grid-container full telekommunikation">
			<div class="grid-x align-middle medium-padding-collapse">
				<div class="cell small-12 medium-6 align-self-stretch background-img" style="background-image:url('<?php the_sub_field('img'); ?>')">
				</div>
				<div class="cell small-12 medium-6 telekommunikation-text text-center-mobile">
					<h4 class="headline_left with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_left"></span>
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('txt'); ?></p>
					<div class="cell small-12 medium-5 list">
						<ul>
							<?php
							if( have_rows('haken') ):
								while ( have_rows('haken') ) : the_row();
								?><li><img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" />  <?php
									the_sub_field('haken_value');?>
									</li><?php
								endwhile;
							else :
							endif;
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>



<!-- Netzwerk -->
<?php if( have_rows('netzwerk') ): 
while( have_rows('netzwerk') ): the_row(); ?>

	<div class="bg-dark-grey"><a id="netzwerk"></a>
		<div class="grid-container padding-x-80 netzwerk">
			<div class="grid-x text-center align-center grid-padding-x medium-padding-collapse">
				<div class="cell small-12 medium-8 text-center">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle_white"></span>
					<h3 class="color-white"><?php the_sub_field('headline'); ?></h3>
				</div>
			</div>
			<div class="grid-x align-center grid-padding-x medium-padding-collapse">
				<div class="cell small-12 medium-8 text-center text-center-mobile">
					<p class="text-justify"><?php the_sub_field('text'); ?></p>
				</div>
			</div>

			<div class="grid-x grid-margin-x check-row first-row grid-padding-x medium-padding-collapse">
				<div class="cell small-12 medium-3 medium-offset-2">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung_white.svg" /> <?php the_sub_field('haken1'); ?>
				</div>
				<div class="cell small-12 medium-3">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung_white.svg" /> <?php the_sub_field('haken2'); ?>
				</div>
				<div class="cell small-12 medium-3">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung_white.svg" /> <?php the_sub_field('haken3'); ?>
				</div>
			</div>

		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Jochen Raab -->
<div class="bg-light-gray-gradient">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-padding-collapse align-middle klaus-raab">
			<div class="cell small-12 medium-7">
				<?php echo wp_get_attachment_image( get_field('zitat_bild'), 'full' ); ?>
			</div>
			<div class="cell small-12 medium-5 padding-small quote">
				<p><img src="<?php echo get_template_directory_uri() ?>/img/raabit_icon_zitat.svg" class="quote_icon" />
					<?php the_field('zitat_txt'); ?></p>
				<strong>Jochen Raab, Geschäftsführer</strong>
			</div>
		</div>
	</div>
</div>


<!-- Serversysteme -->
<?php if( have_rows('serversysteme') ): 
while( have_rows('serversysteme') ): the_row(); ?>

	<div class="bg-light-grey"><a id="serversysteme"></a>
		<div class="grid-container padding-x-80 grid-padding-x">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-8 text-center text-center-mobile">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle"></span>
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<div class="grid-x serversysteme grid-padding-x medium-padding-collapse">
				<div class="cell small-6 medium-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_1'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_1'); ?>
				</div>
				<div class="cell small-6 medium-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_2'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_2'); ?>
				</div>
				<div class="cell small-6 medium-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_3'), 'full' ); ?><br />	
					<?php the_sub_field('imgtxt_3'); ?>
				</div>
				<div class="cell small-6 medium-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_4'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_4'); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- Full width image -->

<?php
$full_bg_img = wp_get_attachment_image_src( get_field('divider_img_1'), "full" );
?>

<a id="systemintegration"></a><div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg2" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<?php echo wp_get_attachment_image( get_field('divider_img_1'), 'full' ); ?>
			</div>	
		</div>
	</div>
</div>


<!-- Systemintegration -->
<?php if( have_rows('systemintegration') ): 
while( have_rows('systemintegration') ): the_row(); ?>
	<div class="grid-container padding-x-80 systemintegration">
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-12 medium-7">
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
				<span class="sexy_line_left"></span>
			</div>
			<div class="cell small-0 medium-5">
			</div>
		</div>
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-7 text text-center-mobile">
				<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			</div>
			<div class="cell small-12 medium-5 list">
				<ul>
					<?php
					if( have_rows('haken') ):
						while ( have_rows('haken') ) : the_row();
						?><li><img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" />  <?php
							the_sub_field('haken_value');?>
							</li><?php
						endwhile;
					else :
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- Software -->
<?php if( have_rows('software') ): 
while( have_rows('software') ): the_row(); ?>
	<div class="bg-dark-grey"><a id="software"></a>
		<div class="grid-container padding-x-80 software">
			<div class="grid-x align-center grid-padding-x medium-padding-collapse">
				<div class="cell small-12 medium-8 text-center text-center-mobile">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle_white"></span>
					<h3 class="color-whtie text-center"><?php the_sub_field('headline'); ?></h3>
					<p class="text-justify"><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- IT-Security -->
<?php if( have_rows('it-security') ): 
while( have_rows('it-security') ): the_row(); ?>
	<a id="it-security"></a>
	<div class="grid-container padding-x-80 it-security">
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-12 medium-7">
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
				<span class="sexy_line_left"></span>
			</div>
			<div class="cell small-0 medium-5">
			</div>
		</div>
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-7 text text-center-mobile">
				<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			</div>
			<div class="cell small-12 medium-5 list">
				<ul>
					<?php
					if( have_rows('haken') ):
						while ( have_rows('haken') ) : the_row();
						?>
						<li><img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung.svg" />  <?php the_sub_field('haken_value');?></li>
						
						<?php
						endwhile;
					else :
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- IT-Oursourcing -->
<?php if( have_rows('it-outsourcing') ): 
while( have_rows('it-outsourcing') ): the_row(); ?>
	<div class="bg-light-grey"><a id="it-outsourcing"></a>
		<div class="grid-container align-center it-outsourcing-container">
			<div class="grid-x grid-padding-x align-center grid-padding-x padding-top-80">
				<div class="cell small-12 medium-8 text-center text-center-mobile">
					
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
						<span class="sexy_line_middle"></span>
				</div>
				<div class="cell small-5">
				</div>
			</div>

			<div class="grid-x align-center grid-padding-x medium-padding-collapse it-outsourcing padding-bottom-80">
				<div class="cell small-12 medium-8 text-center text-center-mobile">
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Full width image -->

<?php
$full_bg_img = wp_get_attachment_image_src( get_field('divider_img_2'), "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg3" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<?php echo wp_get_attachment_image( get_field('divider_img_2'), 'full' ); ?>
			</div>	
		</div>
	</div>
</div>

<!-- Hosting und Domain -->
<?php if( have_rows('hosting_domain') ): 
while( have_rows('hosting_domain') ): the_row(); ?>
		<div class="grid-container padding-x-80 cloud"><a id="cloud"></a>
			<div class="grid-x align-center grid-padding-x medium-padding-collapse">
				<div class="cell small-12 medium-8 text-center">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle"></span>
					<h3 class="color-red text-center"><?php the_sub_field('headline'); ?></h3>
					<p class="text-center"><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
