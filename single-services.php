<?php
/*
 Template Name: Services detail Template
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="cus-site-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/cabinet-banner.png);">
        <div class="container">
            <div class="cus-banner-content">
                <h3><?php the_title(); ?></h3>
                <p><a href="<?php echo esc_url(home_url()); ?>">Home</a> <span class="arrow">>></span> <a href="./index.html">Services </a> <span class="arrow">>></span> <span><?php the_title(); ?></span></p>
            </div>
        </div>
    </section>

    <!-- Custom Cabinets -->
    <section class="ccs-section">
        <div class="container">
            <div class="ccs-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/text-9.png" alt="">
                    <div class="cus-inner-title">
                        <h6>Top Services</h6>
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>

                <div class="css-content-box">
                    <?php the_content(); ?>
                </div>

            </div>

            <div class="ccs-slider">
                <?php if( have_rows('gallery_images') ): ?>
                <div class="owl-carousel owl-theme">
                    <?php 
                           while ( have_rows('gallery_images') ) : the_row();
                         ?>
                    <div class="item">
                        <img src="<?php the_sub_field('gallery_image'); ?>" alt="">
                    </div>
                    <?php
                          endwhile;
                          ?>
                          </div>
                          <?php
                      else :
                        ?>
                          <div class="item">
                            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                        <img src="<?php echo $backgroundImg[0]; ?>" alt="">
                    </div>
                    <?php
                      endif;
                      ?>
                

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

<?php endwhile; ?> 

<?php get_footer(); ?>