<?php /*
Template Name: galery
*/ ?>
<?php get_header(); ?>

    <!-- Site banner -->
    <section class="cus-site-banner" style="background-image: url(./assets/img/gallery-banner.png);">
        <div class="container">
            <div class="cus-banner-content">
                <h3>Gallery</h3>
                <p><a href="./index.html">Home</a> <span class="arrow">>></span> <span>Gallery</span></p>
            </div>
        </div>
    </section>

    <!-- Our Specializations -->
    <section class="gos-section">
        <div class="container">
            <div class="gos-content">

                <div class="site-cus-title">
                    <img src="./assets/img/text-4.png" alt="">
                    <div class="cus-inner-title">
                        <h6>Our projects</h6>
                        <h3>Our Specializations</h3>
                        <p>Visit our Gallery to get a feel for the style that our clients love. If you don't see what you're looking for, get in touch and we'll be happy to help.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
<ul class="nav nav-tabs" role="tablist">
<?php
$args=array(
  'public'   => true,
  '_builtin' => false
);
$output = 'names'; // or objects
$operator = 'and';
$taxonomies=get_taxonomies($args,$output,$operator); 
if  ($taxonomies) {
  foreach ($taxonomies  as $taxonomy ) {
	    $terms = get_terms($taxonomy);
	    	$s = 1;
	        foreach ( $terms as $term) { 

			    	if ($s === 1 ) {
			    		$classs = 'active';
			    	} else {
			    		$classs = '';
			    	}
	        	?>
		        <li class="nav-item">
		        	<a href="#<?php echo $term->slug; ?>" role="tab" data-toggle="tab">   
			        	<?php echo $term->name; ?> 
			        </a>
		        </li>

		       <?php 
		       $s++;
            }
  	}
}

echo '</ul>';

echo '<div class="tab-content">';
foreach($taxonomies as $category) { 
	$terms = get_terms($category);
	$s = 1;
	foreach ( $terms as $term) { 
		
	    echo '<div class="tab-pane" id="' . $term->slug.'">';
	    $the_query = new WP_Query(array(
	        'post_type' => 'projects',
	        'posts_per_page' => 100,
	        'category_name' => $term->slug
	    ));

	    while ( $the_query->have_posts() ) : 
	    $the_query->the_post();
	    echo '<h1>';
	        the_title();
	    echo '</h1>';
	    endwhile; 
		echo '</div>';
		$s = ++;
    }
} 
?>  
<!-- $args=array(
  'public'   => true,
  '_builtin' => false
);
$output = 'names'; // or objects
$operator = 'and';
$categories = get_taxonomies($args,$output,$operator);
foreach($categories as $category) { 
    echo 
        '<li>
            <a href="#'.$category->slug.'" role="tab" data-toggle="tab">    
                '.$category->name.'
            </a>
        </li>';
} -->
    <!-- Gallery Page Tabing -->


    <div class="load-more">
        <a class="banner-btn" href="">Load More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>
<?php get_footer(); ?>