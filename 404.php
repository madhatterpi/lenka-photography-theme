<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						
			<div class="row">
    <div class="col-md-6 text-center my-5 mx-auto">  

    <header>
      <h1 class="page-header page-header--no-margin"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>
	  </header><!-- .entry-header -->
  
	</div>
   </div>

						<div class="page-content">
							<div class="row">
								<div class="col-md-6 text-center mx-auto py-4">
								<p class="pb-3"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'understrap' ); ?></p>
<div class="lost-links pb-3">
	<a href="<?php echo get_home_url(); ?>/home">Home</a>
	<a href="<?php echo get_home_url(); ?>/about">About</a>
	<a href="<?php echo get_home_url(); ?>/contact">Contact</a>
</div>
								</div>
							</div>
							

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
