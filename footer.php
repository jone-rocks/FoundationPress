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
				<div class="cell small-4">
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
				<div class="cell small-4">
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
				<div class="cell small-4 align-self-bottom">
					<p><img src="<?php echo get_template_directory_uri() ?>/img/certified.png" style="float:left; width:50px;     margin: 0 10px 0 0;" /><strong>Wir sind zertifiziert<br />nach DIN EN ISO 9001:2015</strong></p>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-red">
		<div class="grid-container">
			<div class="grid-x subfooter">
				<div class="cell small-6">
					Copyright Raab IT-Systemhaus GmbH & Co. KG
				</div>
				<div class="cell small-6 text-right">	
					<a href="">Impressum</a> | <a href="">Datenschutz</a> | <a href="">AGB</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
