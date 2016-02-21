<?php

/*Load Stylesheet */
function kr8_childtheme() {
	wp_enqueue_style( 'kr8-childtheme-css', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'kr8_childtheme',1000 );


   

    ?>