<?php

/**
 * Template Name: About Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<div class="container-fluid center">

<div class="row">
    <div class="col-md-6 text-center my-6 mx-auto">  

    <header>
      <h1 class="page-header page-header--no-margin"><?php the_title() ?></h1>
    </header>
    
	</div>
   </div>

<div class="row row-padding-lr">
				<div class="col-md-10 col-lg-8 col-xl-6 about-column">
					<img class="about-image" src="<?php the_field("about_image") ?>" alt="">
				</div>
				<div class="col-md-10 col-lg-8 col-xl-5 about-column about-column--text">
          <?php the_field("about_copy") ?>
				</div>
			</div>

 
  <?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'loop-templates/content', 'page' ); ?>



<?php endwhile; // end of the loop. ?>
	
  </div>

	

    
  </div>
</div>



<?php get_footer(); ?>
