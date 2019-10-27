<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="bg-dark-grey">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 medium-4 adress">
					<p>
						<strong>Raab IT Systemhaus</strong></br>
						Gartenstraße 28<br />
						89547 Gerstetten
					</p>
					<p>
						Telefon: 07323 9527 0<br />
						Telefax: 07323 9527 27
					</p>
					<p>
						E-Mail: info@raab-it.de
					</p>
				</div>
				<div class="cell small-12 medium-4 phones">
					
					<p>
						<img src="<?php echo get_template_directory_uri() ?>/img/raabit_icon_telefon_footer.svg" class="phone-icon" />
						<strong>Team Vertrieb</strong></br>
						07323 9527 0
					</p>
					
					<p>
						<img src="<?php echo get_template_directory_uri() ?>/img/raabit_icon_telefon_footer.svg" class="phone-icon" />
						<strong>Team Service</strong></br>
						07323 9527 20
					</p>
				</div>
				<div class="cell small-12 medium-4 align-self-bottom certified">
					<p><img src="<?php echo get_template_directory_uri() ?>/img/raabit_din_zertifiziert_icon_footer.svg" /><strong>Wir sind zertifiziert<br />nach DIN EN ISO 9001:2015</strong></p>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-red">
		<div class="grid-container">
			<div class="grid-x subfooter">
				<div class="cell small-12 medium-6">
					Copyright Raab IT-Systemhaus GmbH & Co. KG
				</div>
				<div class="cell small-12 medium-6 text-right">	
					<a data-toggle="impressum">Impressum</a> | <a data-toggle="datenschutz">Datenschutz</a> | <a data-toggle="agb">AGB</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<script>


$(document).ready(function(){
    $('.slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
			{
				breakpoint: 500,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]  
    });
})(jQuery);

</script>

<?php wp_footer(); ?>
</body>
</html>
