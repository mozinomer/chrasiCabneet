<?php /*
Template Name: service
*/ ?>
<?php get_header(); ?>

   <!-- Site banner -->
    <section class="cus-site-banner" style="background-image: url(./assets/img/service-banner.png);">
        <div class="container">
            <div class="cus-banner-content">
                <h3>Services</h3>
                <p><a href="./index.html">Home</a> <span class="arrow">>></span> <span>Services</span></p>
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
                                    <a href="<?php the_permalink(); ?>">
                                    <h5>
                                        <?php the_title(); ?>
                                    </h5>
                                    <?php the_excerpt(); ?>
                                        </a>
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

    <!-- See How We Work -->
    <section class="shw-section">
        <div class="container">
            <div class="shw-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-5.png" alt="">
                    <div class="cus-inner-title">
                        <h6><?php the_field('ourprojectsheaidng'); ?></h6>
                        <h3><?php the_field('mainheding'); ?></h3>
                        <p><?php the_field('contenthow'); ?></p>
                    </div>
                </div>

                <div class="shw-area">
                    <?php $i = 1;
                        if( have_rows('repeaterhow') ):
                            while( have_rows('repeaterhow') ) : the_row(); ?>
                                <div class="shw-box">
                                    <h2><?php echo $i; ?></h2>
                                    <h5><?php the_sub_field('howworksheading'); ?></h5>
                                    <p><?php the_sub_field('contenthowworks'); ?></p>
                                </div>
                            <?php $i++; endwhile;
                        endif;
                    ?>

                </div>

            </div>
        </div>
    </section>


<?php get_footer(); ?>