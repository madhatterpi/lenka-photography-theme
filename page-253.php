<?php

/**
 * 
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
   <div class="row">
   <?php 
			$packages_image = get_field('packages_image');
   
			?>

        <div class="col contact-image" style="background-image: url('<?php echo $packages_image ?>')">
        </div>
				</div>
        <div class="row">
          <div class="col-md-8 mx-auto pt-5">
          <p class="text-center">Cupcake ipsum dolor. Sit amet pudding tart muffin. Apple pie candy bonbon marzipan candy canes pie cake cake icing. Pudding cupcake cookie cotton candy cupcake pie cupcake. Sesame snaps liquorice cake.</p>
          </div>
        </div>

   <div class="row packages__outer py-4 mx-auto">

     <div class="col-md-4 text-center py-4"> 
       
     <div class="card">
 
  <div class="card-body">
  <h2 class="packages__header text-capitalize">basic </h2>
       <div class="packages__about">1 hour session on a location</div>
       <div class="packages__about">5 digital images colour and b&w</div>
       <p class="packages__price">£150</p>
  </div>
</div>
	     
     </div>
     <div class="col-md-4 text-center py-4">  

     <div class="card">
 
  <div class="card-body">
  <h2 class="packages__header text-capitalize">standard</h2>
       <div class="packages__about">1 hour session on a location</div>
       <div class="packages__about">10 digital images colour and b&w</div>
       <div class="packages__about">5 prints 5x7</div>
       <p class="packages__price">£250</p>
  </div>
</div>
       
     </div>
     <div class="col-md-4 text-center py-4">  

     <div class="card">
 
  <div class="card-body">
  <h2 class="packages__header text-capitalize">premium</h2>
       <div class="packages__about">1 hour session on a location</div>
       <div class="packages__about">Online gallery</div>
       <div class="packages__about">Usb stick</div>
       <div class="packages__about">30 prints 5x7</div>
       <p class="packages__price">£350</p>
  </div>
</div>
       
     </div>
   </div>

  <div class="row ">
  <div class="col-md-6 mx-auto text-center">
 
  <?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'loop-templates/content', 'page' ); ?>



<?php endwhile; // end of the loop. ?>
	
  </div>

	
  </div>

</div>



<?php get_footer(); ?>
