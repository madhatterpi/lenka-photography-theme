<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

			<main class="site-main rrr" id="main">
			<?php
      // vars
      $hero = get_field('hero_section');	

      if( $hero ): ?>

			<div class="parallax parallax-one" style="background-image: url('<?php echo $hero['hero_image']; ?>');">
  <div class="flex parallax__inner">
<h1 class="main-heading"><?php echo $hero['hero_header']; ?></h1>
    <span class="sub-heading text-uppercase"><?php echo $hero['hero_subheader']; ?></span>
    <?php endif; ?>
  </div>
</div>

<!-- Categories -->
<div class="container-fluid section section--top-padding">
  <div class="row">
    <div class="col-md-11 mx-auto">
    <?php
		
    // vars
    $intro = get_field('intro_section'); 
    ?>	
    <h2 class="page-header page-header--small"><?php echo $intro['intro_header']; ?></h2>
    <p class="text-center mx-auto intro-text-max-width"><?php echo $intro['intro_text']; ?></p>

    <?php if( have_rows('category_section') ): ?>

    <div class="row home-cat__row">

	<?php while( have_rows('category_section') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$link = get_sub_field('link');

		?>

<div class="col-sm-6 col-lg-3 home-cat__image" style=" background-image: url('<?php echo $image; ?>')">
<a class="home-cat href=" href="<?php echo $link; ?>">
	<span class="home-cat__link centered-container"><?php echo $title; ?></span></a>

	</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>

    </div>
  </div>
  
</div>

<!-- About Section -->
<div id="about-scroll" class="top">
<?php
      // vars
      $about = get_field('about_section');	

      if( $about ): ?>
  <div class="row h-100 mx-auto">
    <div class="col-md-6 image image-one" style="background-image: url('<?php echo $about['about_image']; ?>');">
     
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center home-block">
      <div  class="about">
        <h2><?php echo $about['about_header']; ?></h2>
        <?php echo $about['about_text']; ?>
      
        <a class="book text-uppercase" href="<?php echo $about['about_link_url']; ?>"><?php echo $about['about_link']; ?></a>
      </div>
      
    </div>
  </div>
  <?php endif; ?>
</div>

<!-- 
---- Portfolio 
-->
<div class="row section section--max-height section--gallery">
    <div class="col-md-11 mx-auto col--home">
    <h2 class="slider-header page-header page-header--small page-header--extra-margin"><?php the_field('portfolio_header') ?></h2>
    
    <?php

    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;

?>


    </div>
  </div>


<!-- Testamonials -->
<?php if( have_rows('testimonials') ): ?>

<div class="container-fluid slider section section--testamonial">
  <div class="row my-4 ">
    <div class="col-md-6 mx-auto">
    <h2 class="slider-header page-header page-header--small">testimonials</h2>
      <div class="my-slider">

	<?php while( have_rows('testimonials') ): the_row(); 

		// vars
		$avatar = get_sub_field('avatar');
		$text = get_sub_field('text');
		$name = get_sub_field('name');

		?>

     <div>
       <img class="slider__avatar" src="<?php echo $avatar; ?>" alt="">
       <p class="slider__text"><?php echo $text; ?></p>
       <span class="slider__author"><?php echo $name; ?></span>
     </div>

	<?php endwhile; ?>
      </div>
	  </div>
  </div>
</div>

<?php endif; ?>

<div id="contact-scroll" class="top" style="">
  <div class="row h-100 mx-auto">
  <?php
      // vars
      $bottom = get_field('bottom_section');	

      if( $bottom ): ?>
  <div class="col-md-6 image image-two order-md-2" style="background-image: url('<?php echo $bottom['bottom_image']; ?>');">
     
     </div>

    <div class="col-md-6 d-flex justify-content-center align-items-center home-block order-md-1">
    
      <div  class="about">
        <h2><?php echo $bottom['bottom_header']; ?></h2>
        <?php echo $bottom['bottom_text']; ?>
        <a class="book text-uppercase" href="<?php echo $bottom['bottom_link_url']; ?>"><?php echo $bottom['bottom_link']; ?></a>
        
      </div>
      <?php endif; ?>
    </div>
   
    
  </div>
</div>


<div class="parallax parallax--small parallax-two" style="background-image: url('<?php echo get_field("footer_parallax"); ?>');">
  <div class="flex flex--alt parallax__inner">
  </div>
</div>



			</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
