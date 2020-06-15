<?php


/**
 * Enqueue scripts and styles.
 */
function insart_wp_scripts() {
    
	wp_enqueue_style( 'insart-wp-style', get_stylesheet_uri() );
    wp_enqueue_style( 'insart-wp-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'insart-wp-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'insart-wp-slick', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'select2-min', get_template_directory_uri() . '/css/select2.min.css' );
	if( !is_page_template('template-static-custom.php')
        && !is_page_template('page_landing.php')
            && !is_page_template('page_landing_custom_thank.php' )){
		wp_enqueue_style( 'insart-wp-style2', get_template_directory_uri() . '/assets/css/style.css', [], time() );
    	wp_enqueue_style( 'insart-wp-media', get_template_directory_uri() . '/assets/css/media.css' );
	}
    if(is_page_template('page_landing.php')){
        wp_enqueue_style( 'style-land-style', get_template_directory_uri() . '/css/style.css', array(), time() );
        wp_enqueue_style( 'style-land', get_template_directory_uri() . '/css/land.css', array(), time() );
        // echo '';
    }

    
   wp_enqueue_script( 'insart-wp-jquery-2.1.4.min', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', array(), '1.0', true );
    wp_enqueue_script( 'insart-wp-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '1.0', true );
    wp_enqueue_script( 'insart-wp-slick.min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true );
    
    wp_enqueue_script( 'insart-pagination', get_template_directory_uri() . '/js/pagination.min.js', array(), '1.0', true );
    wp_enqueue_script( 'insart-accordion', get_template_directory_uri() . '/js/accordion.js', array(), '1.0', true );
    wp_enqueue_script( 'select2-min', get_template_directory_uri() . '/js/select2.min.js', array(), '1.0', true );
    
    wp_enqueue_script( 'insart-wp-scripts', get_template_directory_uri() . '/js/script.js', array('jquery','jquery-ui-autocomplete', 'wp-api'), '1.0', true );

	//wp_enqueue_script( 'insart-wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insart_wp_scripts' );
