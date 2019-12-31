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
<div class="container-fluid center">

    <div class="row p-0 justify-content-center">
        <?php 
        $contact_background_image = get_field('contact_background_image');
        ?>
        <div class="col-lg-6 contact-details" style=" background-image: url('<?php echo $contact_background_image ?>') ">
            <div class="contact-detials__overlay"></div>
            <div class="container ">
                <div class="row contact-block__inner">
                    <div class="col-md-8 mx-auto contact-details__col">
                        <!-- <h1 class="contact-detials__header">Contact us</h1> -->
                    <h3><?php the_field('contact_header');?></h3>
            <p><?php the_field('contact_copy');?></p>
            <h3 class="pt-3"><?php the_field('contact_second_header');?></h3>
            <p><a class="font-sans-serif"
                    href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
            <p><a class="font-sans-serif" href="tel:<?php the_field('contact_number'); ?>"><?php the_field('contact_number'); ?></a></p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6">
            <div class="container contact-block__inner">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                    <?php the_field('contact_form_shortcode');?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
</div>

    <?php get_footer();?>