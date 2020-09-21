<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css">
<?php wp_head(); ?>
</head>
<body class="home">

    <header>
        <div class="container-fluid">
            <div class="header-content">
                <div class="header-logo">
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                        ?>
                    </a>
                </div>
                <div class="header-menu">
                    <div class="header-menu-items">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </div>
                    <div class="search-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.png" alt="">
                    </div>
                    <div class="mobile-bar">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>

            </div>
        </div>
    </header>
        <!-- Search Bar -->
    <div class="searchbar-area">
        <div class="container">
            <?php get_search_form(); ?>
        </div>
    </div>
