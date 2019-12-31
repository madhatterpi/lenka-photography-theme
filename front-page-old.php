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

<div class="wrapper" id="page-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

			<main class="site-main" id="main">

			<div class="parallax parallax-one">
  <div class="flex parallax__inner">
<h1 class="main-heading">Lenka Mikulova</h1>
    <span class="sub-heading text-uppercase">bristol photographer</span>
  </div>
</div>

<div id="about-scroll" class="top">
  <div class="row h-100 mx-auto">
    <div class="col-md-6 image image-one">
     
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center home-block">
      <div  class="about">
        <h2>About me</h2>
      <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
    <p>This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.</p>
        <a class="book text-uppercase" href="#">find out more</a>
      </div>
      
    </div>
  </div>
</div>


<div class="container-fluid section">
  <h2 class="page-header page-header--small">Explore my work</h2>
<div class="row my-4">
	<div class="col-md-6 col-lg-3 home-cat__image">
<a class="home-cat href=" href="<?php echo get_home_url() ?>/weddings">
<img src="" alt="">
	<span class="home-cat__link centered-container">Weddings</a>
</span>
	</div>
	<div class="col-md-6 col-lg-3 home-cat__image">
<a class="home-cat href=" href="<?php echo get_home_url() ?>/portraits">
<img src="" alt="">
	<span class="home-cat__link centered-container">Portraits</span>
</a>
	</div>
	<div class="col-md-6 col-lg-3 home-cat__image">
<a class="home-cat" href="<?php echo get_home_url() ?>/family">
<img src="" alt="">
	<span class="home-cat__link centered-container">Family</span>
</a>
</div>
	<div class="col-md-6 col-lg-3 home-cat__image">
<a class="home-cat" href="<?php echo get_home_url() ?>/nude">
<img src="" alt="">
	<span class="home-cat__link centered-container">Nude</span>
</a>
	</div>
</div>
</div>


<div class="container-fluid slider section">
<div class="row my-4 ">
  <div class="col-md-6 mx-auto">
    <h2 class="slider-header page-header page-header--small">testamonials</h2>
  <div class="my-slider">
  <div>
  <img class="slider__avatar" src="http://localhost/lenka-photography/wp-content/uploads/2019/03/avatar-crop.jpg" alt="">
    <p class="slider__text">Mauris suscipit feugiat ante quis pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus non pharetra arcu. Quisque vitae molestie ex. In placerat dolor magna, non pretium elit pellentesque id. Maecenas at neque blandit, commodo augue in.  </p>
    <span class="slider__author">Emma Louise</span>
  </div>
  <div>
  <img class="slider__avatar" src="http://localhost/lenka-photography/wp-content/uploads/2019/03/avatar-crop.jpg" alt="">
  <p>Mauris suscipit feugiat ante quis pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus non pharetra arcu. Quisque vitae molestie ex. In placerat dolor magna, non pretium elit pellentesque id. Maecenas at neque blandit, commodo augue in.  </p>
  <span class="slider__author">Emma Louise</span>
  </div>
  <div>
  <img class="slider__avatar" src="http://localhost/lenka-photography/wp-content/uploads/2019/03/avatar-crop.jpg" alt="">
  <p>Mauris suscipit feugiat ante quis pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus non pharetra arcu. Quisque vitae molestie ex. In placerat dolor magna, non pretium elit pellentesque id. Maecenas at neque blandit, commodo augue in.  </p>
  <span class="slider__author">Emma Louise</span>
  </div>

  </div>
</div>
  </div>
</div>


<div id="contact-scroll" class="top" style="">
  <div class="row h-100 mx-auto">
  <div class="col-md-6 image image-two order-md-2">
     
     </div>

    <div class="col-md-6 d-flex justify-content-center align-items-center home-block order-md-1">
      <div  class="about">
        <h2>Let's talk</h2>
      <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
    <p>This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.</p>
    <a class="book text-uppercase" href="#">my packages</a>
        
      </div>
      
    </div>
   
    
  </div>
</div>


<div class="parallax parallax--small parallax-two">
  <div class="flex flex--alt parallax__inner">
  </div>
</div>



			</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
