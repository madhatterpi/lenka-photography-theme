<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<div class="container center">

  <div class="row">
    <div class="col-md-6 text-center my-5 mx-auto">
    <header>
      <h1 class="page-header page-header--no-margin"><?php the_title()?></h1>
	  </header><!-- .entry-header -->
	</div>
   </div>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php while (have_posts()): the_post();?>

					<div class="row">
						<div class="col contact-image">

						</div>
					</div>

			          <div class="row px-2 py-4">
					  <div class="col-lg-6 contact-details py-4">
						<h3>Get in touch</h3>
						<p>Bookings for 2020 are open now. If you would like to find out about availability send me a message with the date and location of your wedding and let me know how did you hear about me. Thank you!</p>
						<p>Email: <a class="text-underline" href="mailto:photo@lenkamikulova.com?Subject=Photography%20Enquiry">photo@lenkamikulova.com</a></p>
						<p>Tel: <a class="text-underline" href="tel:+7464837281">07464 837281</a></p>
	                  </div>
	                  <div class="col-lg-6">
	                  	<?php get_template_part('loop-templates/content', 'page');?>
	                  </div>
					  </div>



						<?php
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
    ?>

					<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();?>
