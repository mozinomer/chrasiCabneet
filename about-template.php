<?php /*
Template Name: About
*/ ?>
<?php get_header(); ?>

    <!-- Site banner -->
    <section class="cus-site-banner" style="background-image: url(<?php the_field('bannerbackground'); ?>);">
        <div class="container">
            <div class="cus-banner-content">
                <h3>About Us</h3>
                <p><a href="<?php site_url(); ?>">Home</a> <span class="arrow">>></span> <span>About Us</span></p>
            </div>
        </div>
    </section>

    <!-- A Reflection Of You -->
    <section class="roy-section">
        <div class="container">
            <div class="roy-content">

                <div class="site-cus-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text-8.png" alt="">
                    <div class="cus-inner-title">
                        <h6>Welcome to JC Cabinets!</h6>
                        <h3><?php the_field('headingaboutus'); ?></h3>
                    </div>
                </div>

                <div class="about-desc">
                    <p><?php the_field('contentaboutpage'); ?></p>
                    <a class="banner-btn" href="<?php the_field('buttonurlaboutpage'); ?>"><?php the_field('buttonurltext'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>

            </div>
            <!-- Big Image Section -->
            <div class="bis-section" style="background-image: url(<?php the_field('backgroundImage'); ?>);"></div>
        </div>
        <div class="left-contact">
            <a href="">Contact Us</a>
        </div>
    </section>

    <!-- Get In touch -->
    <section class="git-section">
        <div class="container">
            <div class="git-content">
                <div class="git-box">
                    <h3>Get In Touch</h3>
                    <p>For more information, feel free to contact us.<br/> Call today for a free estimate or for a free drawing!</p>
                </div>
                <div class="git-box">
                    <a href="http://wp.cmswebdeveloper.com/jc-cabinets/get-in-touch/" class="git-btn">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>