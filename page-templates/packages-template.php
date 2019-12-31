<?php

/**
 * Template Name: Packages Page
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
       <div class="packages__about">ceremony until the first dance </div>
       <div class="packages__about">200+ images in colour and b&w</div>
       <div class="packages__about">Online gallery</div>
       <div class="packages__about">Customised USB stick</div>
       <div class="packages__about">Consultation before the wedding</div>
       <p class="packages__price">£750</p>
  </div>
</div>
	     
     </div>
     <div class="col-md-4 text-center py-4">  

     <div class="card">
 
  <div class="card-body">
  <h2 class="packages__header text-capitalize">standard</h2>
       <div class="packages__about">Bridal prep until the first dance</div>
       <div class="packages__about">300+ images in colour and b&w</div>
       <div class="packages__about">Online gallery</div>
       <div class="packages__about">Customised USB stick</div>
       <div class="packages__about">Consultation before the wedding</div>
       <p class="packages__price">£1200</p>
  </div>
</div>
       
     </div>
     <div class="col-md-4 text-center py-4">  

     <div class="card">
 
  <div class="card-body">
  <h2 class="packages__header text-capitalize">premium</h2>
       <div class="packages__about">Bridal prep until late </div>
       <div class="packages__about">600+ images in colour and b&w</div>
       <div class="packages__about">Online gallery</div>
       <div class="packages__about">Customised USB stick</div>
       <div class="packages__about">Consultation before the wedding</div>
       <p class="packages__price">£1450</p>
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
