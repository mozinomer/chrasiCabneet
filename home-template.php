<?php /*
Template Name: Snarfer
*/ ?>
<?php get_header(); ?>


    <div class="left-bar">
        <div class="left-bar-content">
            <ul class="left-bar-icon">
                <li>
                    <a href="<?php the_field('facebook', 'options'); ?>">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('twitter', 'options'); ?>">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('linkedin', 'options'); ?>">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('instagram', 'options'); ?>">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php the_field('youtube', 'options'); ?>">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <div class="contact-links">
                <a href="<?php the_field('emailadress', 'options'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>  <?php the_field('emailadress', 'options'); ?></a>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i> 
                    <a href="tel:<?php the_field('companyNumber1', 'options'); ?>"><?php the_field('companyNumber1', 'options'); ?></a>
                    / 
                    <a href="tel:<?php the_field('companyNumber2', 'options'); ?>"><?php the_field('companyNumber2', 'options'); ?></a>
                </p>
            </div>
        </div>
    </div>

    <!-- Main Banner Section -->
    <section class="mbs-section">
        <div class="mbs-cotnent">
            <div class="mbs-text">
                <img class="back-text" src="<?php echo get_template_directory_uri(); ?>/assets/img/text-1.png" alt="">
                <div class="mbs-inner-text">
                    <h4><?php the_field('subheadingbanner'); ?></h4>
                    <h1><?php the_field('headingbanner'); ?></h1>
                    <h2><?php the_field('headingbanner2'); ?></h2>
                    <p><?php the_field('headingbannercontent'); ?></p>
                    <a class="banner-btn" href="<?php the_field('headingbannerbuttonurl'); ?>"><?php the_field('headingbannerbuttontext'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="mbs-img">
                
                <div class="owl-carousel owl-theme">
                    <?php
                        if( have_rows('bannerslider') ):
                            while( have_rows('bannerslider') ) : the_row(); ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('bannersliderimage'); ?>" alt="">
                                </div>
                            <?php endwhile;
                        endif;
                    ?>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Our Specializations -->
    <section class="osz-section">
        <div class="container">
            <div class="osz-content">
                
                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-2.png" alt="">
                    <div class="cus-inner-title">
                        <h6><?php the_field('heading2', 7); ?></h6>
                        <h3><?php the_field('subheading2', 7); ?></h3>
                    </div>
                </div>

                <div class="osz-images-box">
                    <?php
                        $args = array(  
                            'post_type' => 'services',
                            'posts_per_page' => 4,
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post();  ?>
                             <div class="single-osz">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                <div class="osz-overlay">
                                    <h5>
                                        <?php the_title(); ?>
                                    </h5>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); 
                    ?>  
                </div>
                
            </div>
        </div>

        <div class="left-contact">
            <a href="<?php the_field('contact_us_button_link', 7); ?>">Contact Us</a>
        </div>
    </section>

    <!-- Get To Know Us -->
    <section class="gtk-section">
        <div class="container">
            <div class="gtk-content">
                <div class="gtk-img">
                    <div class="gtk-img-1">
                        <img src="<?php the_field('image_1'); ?>" alt="">
                    </div>
                    <div class="gtk-img-2">
                        <img src="<?php the_field('image_2'); ?>" alt="">
                    </div>
                    <div class="gtk-img-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ab-3.png" alt="">
                    </div>
                </div>
                <div class="gtk-text">
                    <div class="site-cus-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-3.png" alt="">
                        <div class="cus-inner-title">
                            <h6><?php the_field('headingabu'); ?></h6>
                            <h3>Get To Know Us</h3>
                        </div>
                    </div>
                    
                    <p><?php the_field('contentabu'); ?></p>
                    <a href="<?php the_field('button_urlabou'); ?>" class="banner-btn">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our projects -->
    <section class="ops-section">
        <div class="ops-content">
            
            <div class="site-cus-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-4.png" alt="">
                <div class="cus-inner-title">
                    <h6><?php the_field('specialization_heading', 7); ?></h6>
                    <h3><?php the_field('specializations_text', 7); ?></h3>
                </div>
            </div>

            <!-- Our Project Gallery -->
            <div class="opg-gallery">
                <?php if( have_rows('specializations') ):
                           while ( have_rows('specializations') ) : the_row();
                         ?>
                <div class="opg-item">
                    <img src="<?php the_sub_field('specialization_image'); ?>" alt="">
                </div>
                <?php
                          endwhile;
                      else :
                          echo " No Data found";
                      endif;
                      ?>
                
            </div>
            <div class="opg-gallery-slider">
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <?php if( have_rows('specializations') ):
                           while ( have_rows('specializations') ) : the_row();
                         ?>
                        <div class="item">
                            <div class="opg-item">
                                <img src="<?php the_sub_field('specialization_image'); ?>" alt="">
                            </div>
                        </div>
                        <?php
                          endwhile;
                      else :
                          echo " No Data found";
                      endif;
                      ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- See How We Work -->
    <section class="shw-section">
        <div class="container">
            <div class="shw-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-5.png" alt="">
                    <div class="cus-inner-title">
                        <h6><?php the_field('ourprojectsheaidng', 9); ?></h6>
                        <h3><?php the_field('mainheding', 9); ?></h3>
                        <p><?php the_field('contenthow', 9); ?></p>
                    </div>
                </div>

                <div class="shw-area">
                    <?php $i = 1;
                        if( have_rows('repeaterhow', 9) ):
                            while( have_rows('repeaterhow', 9) ) : the_row(); ?>
                                <div class="shw-box">
                                    <h2><?php echo $i; ?></h2>
                                    <h5><?php the_sub_field('howworksheading', 9); ?></h5>
                                    <p><?php the_sub_field('contenthowworks', 9); ?></p>
                                </div>
                            <?php $i++; endwhile;
                        endif;
                    ?>

                </div>

            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="vs-section">
        <img src="<?php the_field('video_image', 7); ?>" alt="">
        <div class="vs-overlay">
            <a data-fancybox href="<?php the_field('video_link', 7); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-btn.png" alt="">
            </a>
        </div>
        
    </section>

    <!-- Our testimonials -->
    <section class="ots-section">
        <div class="container">
            <div class="ots-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-6.png" alt="">
                    <div class="cus-inner-title">
                        <h6><?php the_field('testimonial_heading', 7); ?></h6>
                        <h3><?php the_field('testimonial_text', 7); ?></h3>
                    </div>
                </div>

                <div class="ots-slider">
                    
                    <div class="owl-carousel owl-theme">
                        <?php if( have_rows('testimonials') ):
                           while ( have_rows('testimonials') ) : the_row();
                         ?>
                        <div class="item">
                            <div class="ots-slide-box">
                                <p><?php the_sub_field('client_quote'); ?></p>
                                <div class="ots-box-name">
                                    <h5><?php the_sub_field('client_name'); ?></h5>
                                    <p><?php the_sub_field('client_location'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                          endwhile;
                      else :
                          echo " No Data found";
                      endif;
                      ?>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

    <!-- Teamwork Makes Dream Work -->
    <Section class="tmd-section">
        <div class="container">
            <div class="tmd-content">
                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-7.png" alt="">
                    <div class="cus-inner-title">
                        <h6><?php the_field('team_heading', 7); ?></h6>
                        <h3><?php the_field('team_subheading', 7); ?></h3>
                    </div>
                </div>

                <div class="tmd-member">
                    <?php if( have_rows('teams') ):
                           while ( have_rows('teams') ) : the_row();
                         ?>
                    <div class="tmd-box">
                        <div class="tmd-box-img">
                            <img src="<?php the_sub_field('member_image'); ?>" alt="">
                            <div class="tmd-overlay">
                                <ul>
                                    <li><a href="<?php the_sub_field('member_facebook_link'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php the_sub_field('member_twitter_link'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php the_sub_field('member_linkdin_link'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tmd-box-name">
                            <h5><?php the_sub_field('member_name'); ?></h5>
                            <p><?php the_sub_field('member_designation'); ?></p>
                        </div>
                    </div>
                    <?php
                          endwhile;
                      else :
                          echo " No Data found";
                      endif;
                      ?>
                </div>
            </div>
        </div>
    </Section>


<?php get_footer(); ?>