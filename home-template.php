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
            <a href="">Contact Us</a>
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
                    <h6>Our projects</h6>
                    <h3>Our Specializations</h3>
                    <p>Visit our Gallery to get a feel for the style that our clients love. If you don't see what you're looking for, get in touch and we'll be happy to help.</p>
                </div>
            </div>

            <!-- Our Project Gallery -->
            <div class="opg-gallery">
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-1.png" alt="">
                </div>
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-2.png" alt="">
                </div>
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-3.png" alt="">
                </div>
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-4.png" alt="">
                </div>
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-5.png" alt="">
                </div>
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-6.png" alt="">
                </div>
                <div class="opg-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-7.png" alt="">
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-thumb.png" alt="">
        <div class="vs-overlay">
            <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
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
                        <h6>Our testimonials</h6>
                        <h3>What Clients Say</h3>
                    </div>
                </div>

                <div class="ots-slider">
                    
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="ots-slide-box">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labor dolore magna aliquyam erat,sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                                <div class="ots-box-name">
                                    <h5>Joe Jordan</h5>
                                    <p>United States Of America</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ots-slide-box">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labor dolore magna aliquyam erat,sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                                <div class="ots-box-name">
                                    <h5>Joe Jordan</h5>
                                    <p>United States Of America</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ots-slide-box">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labor dolore magna aliquyam erat,sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                                <div class="ots-box-name">
                                    <h5>Joe Jordan</h5>
                                    <p>United States Of America</p>
                                </div>
                            </div>
                        </div>
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
                        <h6>Our Team</h6>
                        <h3>Teamwork Makes Dream Work</h3>
                    </div>
                </div>

                <div class="tmd-member">
                    <div class="tmd-box">
                        <div class="tmd-box-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member-1.png" alt="">
                            <div class="tmd-overlay">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tmd-box-name">
                            <h5>Larry Dean</h5>
                            <p>Designer</p>
                        </div>
                    </div>
                    <div class="tmd-box">
                        <div class="tmd-box-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member-2.png" alt="">
                            <div class="tmd-overlay">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tmd-box-name">
                            <h5>Andreea Grand</h5>
                            <p>Designer</p>
                        </div>
                    </div>
                    <div class="tmd-box">
                        <div class="tmd-box-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member-3.png" alt="">
                            <div class="tmd-overlay">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tmd-box-name">
                            <h5>Lori Foster</h5>
                            <p>Designer</p>
                        </div>
                    </div>
                    <div class="tmd-box">
                        <div class="tmd-box-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member-4.png" alt="">
                            <div class="tmd-overlay">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tmd-box-name">
                            <h5>Jose Rivera</h5>
                            <p>Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>


<?php get_footer(); ?>