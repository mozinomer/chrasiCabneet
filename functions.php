<?php 

function theme_prefix_setup() {
    
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true,
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}
add_theme_support( 'post-thumbnails' );
// Our custom post type function
function services() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor')
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'services' );
// Our custom post type function
function projects() {
 
    register_post_type( 'projects',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'projects' ),
                'singular_name' => __( 'Project' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => true,
            'supports' => array('title', 'thumbnail')
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'projects' );



function themes_taxonomy() {
    register_taxonomy(
        'themes_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'projects',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'categories', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'project',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'themes_taxonomy');

/*Contact form 7 remove span*/

add_filter('wpcf7_form_elements', function($content) {

    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);



    $content = str_replace('<br />', '', $content);

        

    return $content;

});
