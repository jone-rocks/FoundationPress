<?php
/*
Template Name: Karriere
*/
get_header(); ?>


<!-- Full width image -->
<?php
$full_bg_img = wp_get_attachment_image_src( get_field('karriere_header'), "full" );
?>

<div class="grid-container full start-img">
	<div class="grid-x">
		<div class="cell">
			<div class="full_img_bg full_img_bg1" style="background-image: url('<?php echo $full_bg_img[0]; ?>')">
				<?php echo wp_get_attachment_image( get_field('karriere_header'), 'full' ); ?>
			</div>	
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
						<p><?php the_sub_field('text'); ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>



<!-- Stellenangebote -->
<div class="grid-container stellenangebote">
	<div class="grid-x align-center padding-x-80">
		<?php
		if( have_rows('stellenangebote') ): ?>
		<div class="cell small-12 medium-8 stellenangebot-accordion">
			<h3 class="color-red"><?php the_field('title_stellenangebote'); ?></h3>
			<ul class="accordion" data-accordion data-allow-all-closed="true">
			<?php while ( have_rows('stellenangebote') ) : the_row(); ?>
				<li class="accordion-item" data-accordion-item>
					<a href="#" class="accordion-title"><span class="accordion-circle"></span><?php the_sub_field('stelle'); ?></a>
					<div class="accordion-content" data-tab-content>
						<p><?php the_sub_field('stellenbeschreibung'); ?></p>
						<p>&nbsp;</p>
						<p class="bewerbungs-wrapper"><a data-toggle="bewerbung" class="bewerbung">Jetzt bewerben</a></p>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<p><?php the_field('erwartungen'); ?></p>
		</div>
		<?php
		else :
		endif;
		?>
		<div class="cell small-12 medium-4 karriere_ansprechpartner">
			<h3 class="color-red"><?php the_field('ansprechpartner_header'); ?></h3>
			<?php echo wp_get_attachment_image( get_field('ansprechpartner_img'), 'full' ); ?><br />
			<strong>Klaus Raab, Geschäftsführer</strong>
			<p><?php the_field('ansprechpartner_kontaktinformationen'); ?></p>
		</div>
		
	</div>
</div>

<?php get_footer();
