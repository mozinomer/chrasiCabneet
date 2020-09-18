
    <!-- Search Bar -->
    <div class="searchbar-area">
        <div class="container">
            <form action="">
                <input class="search-bar" type="text" placeholder="Search">
                <button type="submit" class="search-bar-btn">Search</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                
                <div class="col-30 item-1">
                    <div class="footer-logo">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                        ?>
                    </div>
                    <p><?php the_field('intro_text', 'options'); ?></p>
                    <ul class="footer-social-link">
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
                </div>
                <div class="col-15 item-2">
                    <h6>Quick Links</h6>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class'=> 'foo-menu' ) ); ?>
                </div>
                <div class="col-15 item-3">
                    <h6>Opening Hours</h6>
                    <ul class="time-menu">
                		<?php
							if( have_rows('weekdays', 'options') ):
							    while( have_rows('weekdays', 'options') ) : the_row(); ?>
							    	<li>
							    		<p>
									        <?php the_sub_field('daysofweek', 'options'); ?>	
							    		</p>
							    	</li>
							    <?php endwhile;
							endif;
						?>
                        
                    </ul>
                </div>
                <div class="col-15 item-4">
                    <h6>Contact Information</h6>
                    <ul class="contact-menu">
                        <li>
                        	<img src="./assets/img/phone.png" alt="">
                        	<p> 
                        		<a href="tel:<?php the_field('companyNumber1', 'options'); ?>"><?php the_field('companyNumber1', 'options'); ?></a> 
                        		<span>|</span> 
                        		<a href="tel:<?php the_field('companyNumber2', 'options'); ?>"><?php the_field('companyNumber2', 'options'); ?></a>
	                        </p>
	                    </li>
                        <li>
                        	<img src="./assets/img/mail.png" alt="">
	                        <a href="<?php the_field('emailadress', 'options'); ?>"> <?php the_field('emailadress', 'options'); ?></a>
	                    </li>
                        <li>
                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="">
	                        <p> <?php the_field('adress', 'options'); ?></p>
	                    </li>
                    </ul>
                </div>

            </div>
            
        </div>
        <div class="copyright-content">
            <div class="container">
                <p>&copy; Copyrights JC Cabinets 2020. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
	    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>
<?php wp_footer(); ?>
</html>