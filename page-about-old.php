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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="container container--lg center">

  <div class="row">
    <div class="col-md-6 text-center my-5 mx-auto">  
    <header>
      <h1 class="page-header page-header--no-margin"><?php the_title() ?></h1>
	  </header><!-- .entry-header -->
	</div>
   </div>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">

			<div class="row about-row justify-content-center">
				<div class="col-md-5 my-4">
					<img class="about-image" src="http://localhost/lenka-photography/wp-content/uploads/2019/02/gallery-item7.jpg" alt="">
				</div>
				<div class="col-md-5 my-4">
					<h2>Photography Title</h2>
					<p>Caramels chocolate cake jujubes soufflé muffin. Pudding sweet bear claw. Fruitcake sweet cotton candy apple pie biscuit. Powder dessert chocolate bar caramels croissant.</p>
					<p>Gingerbread caramels sugar plum bear claw toffee muffin dragée. Cake fruitcake ice cream gingerbread chupa chups sesame snaps gummies. Icing candy canes croissant candy canes liquorice danish jelly beans danish bonbon.</p>
					<p>Brownie oat cake pudding. Macaroon jelly brownie caramels sesame snaps apple pie chupa chups gummi bears. Jelly-o biscuit donut jujubes danish gummi bears. Dragée carrot cake marshmallow dessert cheesecake jujubes.</p>
				</div>
			</div>

			

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
