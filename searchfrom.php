<?php

/**

 * Template for displaying search forms in nest-step

 *

 * @package WordPress

 * @subpackage next-step

 * @since 1.0

 * @version 1.0

 */



?>



                

  

<form  method="get" class="serachform" id="serachform" action="<?php echo esc_url( home_url('/') ); ?>" autocomplete="off">

<input  type="text" name="s" class="search-bar" id="searchInput" onkeyup="fetchResults()" placeholder="Search.." >

         <?php if ('any' != $post_type ) { ?>

         	
		<button type="submit" value="<?php echo  esc_attr( $post_type ); ?>" class="search-bar-btn">Search</button>


										
       <?php  } ?>    

       <div id="datafetch">

       	

       </div>      



</form>



