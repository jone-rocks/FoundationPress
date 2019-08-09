<?php
/*
Template Name: Leistungen
*/
get_header(); ?>

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<?php echo wp_get_attachment_image( get_field('leistungen_header'), 'full' ); ?>
		</div>
	</div>
</div>

<!-- Dark BG Header -->
<?php if( have_rows('title') ): 
	while( have_rows('title') ): the_row(); ?>

	<div class="bg-dark-grey"><a id="consulting"></a>
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle small-up-1 medium-up-2 large-up-2 dark-header">
				<div class="cell">
					<h1><?php the_sub_field('header'); ?></h1>
					<h2><?php the_sub_field('subheader'); ?></h2>
				</div>
				<div class="cell">
					<h4 class="headline_left with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_left_white"></span>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- Gebaeudetechnik -->
<?php if( have_rows('gebaeudetechnik') ): 
while( have_rows('gebaeudetechnik') ): the_row(); ?>
	<div class="grid-container"><a id="gebaeudetechnik"></a>
		<div class="grid-x grid-padding-x grid-padding-x padding-top-80">
			<div class="cell small-12 medium-7">
				<h4 class="headline_left with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
				<span class="sexy_line_left"></span>
			</div>
			<div class="cell small-5">
			</div>
		</div>
		<div class="grid-x grid-padding-x gebaeudetechnik grid-padding-x padding-bottom-80">
			<div class="cell small-12 medium-7">
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


<!-- Telekommunikation -->
<?php if( have_rows('telekommunikation') ): 
while( have_rows('telekommunikation') ): the_row(); ?>
	<div class="bg-light-grey"><a id="telekommunikation"></a>
		<div class="grid-container full telekommunikation">
			<div class="grid-x align-middle">
				<div class="cell small-12 medium-6">
					<?php echo wp_get_attachment_image( get_sub_field('img'), 'full' ); ?>
				</div>
				<div class="cell small-12 medium-6 telekommunikation-text">
					<h4 class="headline_left with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_left"></span>
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('txt'); ?></p>
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
			<div class="grid-x text-center">
				<div class="cell">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle_white"></span>
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				</div>
			</div>
			<div class="grid-x grid-margin-x align-center">
				<div class="cell">
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<div class="grid-x grid-margin-x check-row first-row">
				<div class="cell small-12 medium-4 medium-offset-2 border-bottom-white">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung_white.svg" /> <?php the_sub_field('haken1'); ?>
				</div>
				<div class="cell small-12 medium-4 border-bottom-white">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung_white.svg" /> <?php the_sub_field('haken2'); ?>
				</div>
			</div>
			<div class="grid-x grid-margin-x check-row">
				<div class="cell small-12 medium-4 large-offset-2">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/raabit_haken_aufzaehlung_white.svg" /> <?php the_sub_field('haken3'); ?>
				</div>
				<div class="cell small-12 medium-4">
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
		<div class="grid-container padding-x-80">
			<div class="grid-x align-center">
				<div class="cell small-12 medium-8 text-center">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle"></span>
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<div class="grid-x serversysteme">
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_1'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_1'); ?>
				</div>
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_2'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_2'); ?>
				</div>
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_3'), 'full' ); ?><br />	
					<?php the_sub_field('imgtxt_3'); ?>
				</div>
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_sub_field('img_4'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_4'); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Systemintegration -->
<?php if( have_rows('systemintegration') ): 
while( have_rows('systemintegration') ): the_row(); ?>
	<div class="grid-container padding-x-80 systemintegration"><a id="systemintegration"></a>
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-12 medium-7">
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
				<span class="sexy_line_left"></span>
			</div>
			<div class="cell small-0 medium-5">
			</div>
		</div>
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-12 medium-7">
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

<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<?php echo wp_get_attachment_image( get_field('divider_img_1'), 'full' ); ?>
		</div>
	</div>
</div>

<!-- Software -->
<?php if( have_rows('software') ): 
while( have_rows('software') ): the_row(); ?>
	<div class="bg-dark-grey"><a id="software"></a>
		<div class="grid-container padding-x-80 software">
			<div class="grid-x align-center">
				<div class="cell small-8 text-center">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle_white"></span>
					<h3 class="color-red text-center"><?php the_sub_field('headline'); ?></h3>
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
	<div class="grid-container padding-x-80 it-security"><a id="it-security"></a>
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-12 medium-7">
				<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
				<span class="sexy_line_left"></span>
			</div>
			<div class="cell small-0 medium-5">
			</div>
		</div>
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-7">
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



<!-- Full width image -->
<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<?php echo wp_get_attachment_image( get_field('divider_img_2'), 'full' ); ?>
		</div>
	</div>
</div>

<!-- Hosting und Domain -->
<?php if( have_rows('hosting_domain') ): 
while( have_rows('hosting_domain') ): the_row(); ?>
	<div class="bg-light-grey"><a id="hosting_domain"></a>
		<div class="grid-container padding-x-80 software">
			<div class="grid-x align-center">
				<div class="cell small-8 text-center">
					<h4 class="headline_middle with-icon" style="background-image: url('<?php the_sub_field('icon'); ?>')"><?php the_sub_field('title'); ?></h4>
					<span class="sexy_line_middle"></span>
					<h3 class="color-red text-center"><?php the_sub_field('headline'); ?></h3>
					<p class="text-justify"><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
