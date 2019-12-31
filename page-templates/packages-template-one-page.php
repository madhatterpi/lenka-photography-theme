<?php

/**
 * Template Name: Packages One Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
    // Post Content here
    the_content();
		//
	} // end while
} // end if
?>


</div>



<?php get_footer(); ?>
