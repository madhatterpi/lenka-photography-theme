<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>




	<footer class="footer">

	<a href="#" id="back-to-top" title="Back to top">&uarr;</a>

		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="footer__inner">

					<!-- <div class="footer__note">
				<h3 class="text-uppercase">enquire about availability</h3>
				</div> -->

			<div class="footer__details">

				<div class="footer-details-block">
					<div class="footer-details-block__legal">
					    <p><a href="<?php echo get_home_url(); ?>/privacy policy">privacy policy</a></p>
					</div>
				</div>

				<div class="footer-details-block">
					<div class="footer-details-block__contact">
						<p><span class="footer-contact-us"><?php pll_e( "contact me at" ); ?></span> <a class="text-underline" href="mailto:photo@lenkamikulova.com?Subject=Photography%20Enquiry">photo@lenkamikulova.com</a></p>
					</div>
				</div>

				<div class="footer-details-block">
					<div class="footer-details-block__social">
						<a href="https://www.facebook.com/Lenka-Mikulova-Photographer-649006628544261/"><i class="footer-icon fab fa-facebook-f"></i></a>
						<a href="https://www.instagram.com/lenkahamerska"><i class="footer-icon fab fa-instagram"></i></a>
						<a href="#"><i class="footer-icon fab fa-pinterest-p"></i></a>
					</div>
				</div>

			</div>

			<div class="footer__bottom">
					<p>Lenka Mikulova &copy; <?php echo date("Y"); ?> Web design by <a target="_blank" href="https://www.peterbateman.co.uk">Peter Bateman</a></p>
				</div>

					</div> <!--footer__inner -->

				</div>
			</div>
		</div>



	</footer><!-- #colophon -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer();?>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>

