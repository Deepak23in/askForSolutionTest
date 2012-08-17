<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="sidebartitle">',
        'after_title' => '</h2>',
    ));
	
	//Add support for WordPress 3.0's custom menus
	add_action( 'init', 'register_my_menu' );
 
	//Register area for custom menu
	function register_my_menu() {
		register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	}
	
?>