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
						<strong>Raab IT-Systemhaus GmbH & Co. KG</strong></br>
						Gartenstraße 28<br />
						89547 Gerstetten
					</p>
					<p>
						Telefon: 07323 9527 - 0<br />
						Telefax: 07323 9527 - 27
					</p>
					<p>
						E-Mail: Info@Raab-IT.de
					</p>
				</div>
				<div class="cell small-12 medium-4 phones">
					<img src="<?php echo get_template_directory_uri() ?>/img/raabit_icon_telefon_footer.svg" class="phone-icon" />
					<p>
						<strong>Kundenhotline</strong></br>
						089897128937
					</p>
					<p>
						<strong>Bestellservice</strong></br>
						089897128937
					</p>
					<p>
						<strong>Vertrieb</strong></br>	
						089897128937
					</p>
				</div>
				<div class="cell small-12 medium-4 align-self-bottom">
					<p><img src="<?php echo get_template_directory_uri() ?>/img/certified.png" style="float:left; width:50px;     margin: 0 10px 0 0;" /><strong>Wir sind zertifiziert<br />nach DIN EN ISO 9001:2015</strong></p>
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
					<a href="">Impressum</a> | <a href="">Datenschutz</a> | <a href="">AGB</a>
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
