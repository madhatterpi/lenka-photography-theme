<?php

/**
 * Template Name: Packages Single Column Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<div class="container center">

  <div class="row">
    <div class="col-md-6 text-center my-5 mx-auto">  

    <header>
      <h1 class="page-header page-header--no-margin"><?php the_title() ?></h1>
	  </header><!-- .entry-header -->
  
	</div>
   </div>
   <?php 
      $packages_single_column_image= get_field('packages_single_column_image');
      
      if($packages_single_column_image) { ?>

         <div class="row">
          <div class="col contact-image"         style="background-image: url('<?php echo         $packages_single_column_image ?>')">
          </div>
        </div>

      <?php }    
   
      ?>
      
      <?php if( have_rows('packages_single_column_row') ): ?>

	<?php while( have_rows('packages_single_column_row') ): the_row(); 

		// vars
		$header = get_sub_field('package_s_header');
		$details = get_sub_field('package_s_details');
		$price = get_sub_field('package_s_price');

    ?>
    
    <div class="row packages__outer py-4 packages-s__row mx-auto">

      <div class="col text-center py-4">
        <h2 class="packages-s__header"><?php echo $header ?></h2> 
        <?php echo $details ?>
        <p class="packages-s__price"> £<?php echo $price ?> </p>
      </div> 

    </div>

	<?php endwhile; ?>

<?php endif; ?>

  <div class="row ">
  <div class="col mx-auto">
 
  <?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'loop-templates/content', 'page' ); ?>



<?php endwhile; // end of the loop. ?>
	
  </div>

	


</div>

</div>



<?php get_footer(); ?>
