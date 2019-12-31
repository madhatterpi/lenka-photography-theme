<?php

/**
 * Template Name: Gallery Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<div class="container container--lg center">

  <div class="row">
    <div class="col-md-6 text-center my-6 mx-auto col-max-width-620">  
    <header>
      <h1 class="page-header"><?php the_title() ?></h1>
	  </header>
    
    <?php if( get_field("gallery_intro_text") ) {
      echo the_field("gallery_intro_text");
    } ?>

	</div>
   </div>

  <div class="row ">
  <div class="col mx-auto">
 
  <?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'loop-templates/content', 'page' ); ?>



<?php endwhile; // end of the loop. ?>
	
  </div>

	

    
  </div>
</div>



<?php get_footer(); ?>
