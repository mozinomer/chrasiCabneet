<?php
/*
 Template Name: Contact Us 
 */

get_header(); ?>


        <!-- Site banner -->
    <section class="cus-site-banner" style="background-image: url(<?php the_field('contcat_page_banner'); ?>);">
        <div class="container">
            <div class="cus-banner-content">
                <h3><?php the_title(); ?></h3>
                <p><a href="<?php echo esc_url(home_url()); ?>">Home</a> <span class="arrow">>></span> <span><?php the_title(); ?></span></p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="cis-section">
        <div class="container">
            <div class="cis-content">
                
                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/text-10.png" alt="">
                    <div class="cus-inner-title">
                        <h6><?php the_field('contact_us_heading'); ?></h6>
                        <h3><?php the_field('contact_us_text'); ?></h3>
                        <p><?php the_field('contac_content'); ?></p>
                    </div>
                </div>

                <div class="cis-contact-box">
                    
                    <div class="cis-box">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-phone.png" alt="">
                        <h4>Call Us</h4>
                        <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a>
                        <a href="tel:<?php the_field('alternative_number'); ?>"><?php the_field('alternative_number'); ?></a>
                    </div>
                    <div class="cis-box">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-pin.png" alt="">
                        <h4>Email Us</h4>
                        <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                    </div>
                    <div class="cis-box">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-plane.png" alt="">
                        <h4>Locate Us</h4>
                        <p><?php the_field('location'); ?></p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Google Map Section -->
    <div class="gms-section">
        <iframe src="<?php the_field('google_map'); ?>"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <!-- Contact Us Page -->
    <section class="cup-section">
        <div class="container">
            <div class="cup-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/text-11.png" alt="">
                    <div class="cus-inner-title">
                        <h6>Contact Form</h6>
                        <h3><?php the_field('contact_form_heading'); ?></h3>
                    </div>
                </div>

                <div class="cup-form">
                    <?php
                           echo do_shortcode('[contact-form-7 id="143" title="Contact"]');
                              ?>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>