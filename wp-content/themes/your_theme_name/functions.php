<?php 

/* =========

	Load classes

============ */

require_once( 'classes/TemplateParts.php' );

/* =========

	ENQUEUE SCRIPTS

============ */

add_action( 'wp_enqueue_scripts', 'nakedPress_enqueuer' );


/* =========

	SCRIPTS

============ */

// First get rid of the standard Wordpress jQuery and let Google host your jQuery
// Be sure to load the latest version

function modify_jquery() {

	if (!is_admin()) {
	    wp_deregister_script('jquery');
	    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
	    wp_enqueue_script('jquery');
	}

}

add_action('init', 'modify_jquery');



// Load scripts and styles using the enqueuer. You can add your own style or script by copying the lines.

function nakedPress_enqueuer() {

	wp_register_script( 'mainJS', get_template_directory_uri().'/assets/js/main.js', array( 'jquery' ) );
	wp_enqueue_script( 'mainJS' );

	wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'screen' );

}	


/* =========

	Custom images sizes

============ */

add_image_size( 'two-to-one', 800, 400, true );