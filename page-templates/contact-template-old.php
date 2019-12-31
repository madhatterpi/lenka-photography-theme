<?php

/**
 * Template Name: Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();?>
<div class="container center">

    <div class="row">
        <div class="col-md-6 text-center my-5 mx-auto">
            
            <header>
                <h1 class="page-header page-header--no-margin"><?php the_title()?></h1>
            </header><!-- .entry-header -->

        </div>
    </div>
    <?php if ( get_field('contact_background_image') ) {
        $contact_background_image = get_field('contact_background_image'); ?>

        <div class="row">
          <div class="col contact-image" style="background-image: url('<?php echo $contact_background_image ?>')"></div>
        </div>
    <?php
    } ?>


    <div class="row px-2 py-4 justify-content-center">
        <div class="col-lg-5 contact-details py-4">
            <h3><?php the_field('contact_header');?></h3>
            <p><?php the_field('contact_copy');?></p>
            <p>Email: <a class="text-underline"
                    href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
            <p>Tel: <a class="text-underline" href="tel:<?php the_field('contact_number'); ?>"><?php the_field('contact_number'); ?></a></p>
        </div>
        <div class="col-lg-5">
            <?php the_field('contact_form_shortcode');?>
        </div>
    </div>

</div>
</div>

    <?php get_footer();?>