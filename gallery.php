<?php
/*
 Template Name: gellary
 */

get_header(); ?>


    <!-- Site banner -->
    <section class="cus-site-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img/gallery-banner.png);">
        <div class="container">
            <div class="cus-banner-content">
                <h3><?php the_title(); ?></h3>
                <p><a href="<?php echo esc_url(home_url()); ?>"><?php the_title(); ?></a> <span class="arrow">>></span> <span>Gallery</span></p>
            </div>
        </div>
    </section>

    <!-- Our Specializations -->
    <section class="gos-section">
        <div class="container">
            <div class="gos-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/text-4.png" alt="">
                    <div class="cus-inner-title">
                        <h6>Our projects</h6>
                        <h3>Our Specializations</h3>
                        <p>Visit our Gallery to get a feel for the style that our clients love. If you don't see what you're looking for, get in touch and we'll be happy to help.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Gallery Page Tabing -->
    <section class="gpt-section">
        <div class="gpt-content">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
            	
                <li class="nav-item">
                    <a class="nav-link active" id="item1-tab" data-toggle="tab" href="#item1" role="tab" aria-controls="item1" aria-selected="true">All</a>
                </li>
                <?php  $termchildren = get_terms('themes_categories'); ?>
            	<?php foreach($termchildren as $category) { ?>
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo $category->slug; ?>" data-toggle="tab" href="#<?php echo $category->slug; ?>" role="tab" aria-controls="item2" aria-selected="false"><?php echo $category->name; ?></a>
                </li>
                <?php } ?>
            </ul>
            <div class="tab-content" id="myTabContent">
            	<div class="tab-pane fade active show" id="item1" role="tabpanel" aria-labelledby="item1-tab">
            		
                    <!-- Our Project Gallery -->
                    <div class="opg-gallery">
                    	<?php $args = array( 'post_type' => 'projects', 'order' => 'ASC', 'posts_per_page' => -1); 
                                $the_query = new WP_Query( $args ); ?>
                                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="opg-item">
                        	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $backgroundImg[0]; ?>" alt="">
                        </div>
                        <?php  wp_reset_query(); endwhile; endif;  ?>
                    </div>
                </div>
            	<?php  $termchildren = get_terms('themes_categories'); ?>
            	<?php foreach($termchildren as $category) { ?>
            		       
                <div class="tab-pane fade" id="<?php echo $category->slug; ?>" role="tabpanel" aria-labelledby="<?php echo $category->slug; ?>">
                    <!-- Our Project Gallery -->
                    <div class="opg-gallery">
                    	<?php  $args = array( 'post_type' => 'projects', 'order' => 'ASC', 'posts_per_page' => -1); 
                                $the_query = new WP_Query( $args ); ?>
                    	<?php  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="opg-item">
                        	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $backgroundImg[0]; ?>" alt="">
                        </div>
                        <?php  wp_reset_query(); endwhile;   ?>
                    </div>
                </div>
            <?php } ?>
            </div>

        </div>
    </section>

    <div class="load-more">
        <a class="banner-btn" href="">Load More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>

<?php get_footer(); ?>