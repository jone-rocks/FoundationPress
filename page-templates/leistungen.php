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
	<?php if( have_rows('leistungen') ): 
	while( have_rows('leistungen') ): the_row(); ?>

	<div class="bg-dark-grey">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle small-up-1 medium-up-2 large-up-2 dark-header">
				<div class="cell">
					<h1><?php the_field('leistungen_title'); ?></h1>
					<h2><?php the_field('leistungen_title2'); ?></h2>
				</div>
				<div class="cell">
					<p><?php the_field('leistungen_titletext'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- Gebaeudetechnik -->
<?php if( have_rows('gebaeudetechnik') ): 
while( have_rows('gebaeudetechnik') ): the_row(); ?>
	<div class="grid-container">
		<div class="grid-x grid-padding-x gebaeudetechnik grid-padding-x padding-x-80">
			<div class="cell small-7">
				<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			</div>
			<div class="cell small-5 list">
				<ul>
					<?php
					if( have_rows('haken') ):
						while ( have_rows('haken') ) : the_row();
						?><li><img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" />  <?php
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
<div class="bg-light-grey">
	<div class="grid-container full">
		<div class="grid-x align-middle telekommunikation">
			<div class="cell small-6">
				<img src="https://picsum.photos/1000/500" />
			</div>
			<div class="cell small-6 telekommunikation-text">
				<h3 class="color-red">Telekommunikation</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy t dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
			</div>
		</div>
	</div>
</div>


<!-- Netzwerk -->
<?php if( have_rows('netzwerk') ): 
while( have_rows('netzwerk') ): the_row(); ?>

	<div class="bg-dark-grey">
		<div class="grid-container netzwerk padding-x-80 netzwerk">
			<div class="grid-x text-center">
				<div class="cell small-8">
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				</div>
			</div>
			<div class="grid-x grid-margin-x align-center">
				<div class="cell">
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<div class="grid-x grid-margin-x check-row">
				<div class="cell small-4 large-offset-2 border-bottom-red">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> <?php the_sub_field('haken1'); ?>
				</div>
				<div class="cell small-4  border-bottom-red">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> <?php the_sub_field('haken2'); ?>
				</div>
			</div>
			<div class="grid-x grid-margin-x check-row">
				<div class="cell small-4 large-offset-2">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> <?php the_sub_field('haken3'); ?>
				</div>
				<div class="cell small-4">
					<img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" /> <?php the_sub_field('haken3'); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Jochen Raab -->
<div class="bg-light-gray-gradient">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle klaus-raab">
			<div class="cell small-7">
				<?php echo wp_get_attachment_image( get_field('zitat_bild'), 'full' ); ?>
			</div>
			<div class="cell small-5 padding-small quote">
				<p><?php the_field('leistungen_title'); ?></p>
				<strong>Jochen Raab, Geschäftsführer</strong>
			</div>
		</div>
	</div>
</div>


<!-- Serversysteme -->
<?php if( have_rows('serversysteme') ): 
while( have_rows('serversysteme') ): the_row(); ?>

	<div class="bg-light-grey">
		<div class="grid-container padding-x-80">
			<div class="grid-x align-center">
				<div class="cell small-8 text-center">
					<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<div class="grid-x staerken">
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_field('img_1'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_1'); ?>
				</div>
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_field('img_2'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_2'); ?>
				</div>
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_field('img_3'), 'full' ); ?><br />	
					<?php the_sub_field('imgtxt_3'); ?>
				</div>
				<div class="cell small-3 text-center">
					<?php echo wp_get_attachment_image( get_field('img_4'), 'full' ); ?><br />
					<?php the_sub_field('imgtxt_4'); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- Systemintegration -->
<?php if( have_rows('gebaeudetechnik') ): 
while( have_rows('gebaeudetechnik') ): the_row(); ?>
	<div class="grid-container padding-x-80 gebaeudetechnik">
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-7">
				<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			</div>
			<div class="cell small-5 list">
				<ul>
					<?php
					if( have_rows('haken') ):
						while ( have_rows('haken') ) : the_row();
						?><li><img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" />  <?php
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
	<div class="bg-dark-grey">
		<div class="grid-container padding-x-80 software">
			<div class="grid-x align-center">
				<div class="cell small-8 text-justify">
					<h3 class="color-red text-center"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- IT-Security -->
<?php if( have_rows('it-security') ): 
while( have_rows('it-security') ): the_row(); ?>
	<div class="grid-container padding-x-80 it-security">
		<div class="grid-x grid-padding-x headline">
			<div class="cell small-7">
				<h3 class="color-red"><?php the_sub_field('headline'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			</div>
			<div class="cell small-5 list">
				<ul>
					<?php
					if( have_rows('haken') ):
						while ( have_rows('haken') ) : the_row();
						?>
						<li><img class="check" src="<?php echo get_template_directory_uri() ?>/img/haken_rot_auf_weiß.png" />  <?php the_sub_field('haken_value');?></li>
						
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
	<div class="bg-light-grey">
		<div class="grid-container padding-x-80 software">
			<div class="grid-x align-center">
				<div class="cell small-8 text-justify">
					<h3 class="color-red text-center"><?php the_sub_field('headline'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
