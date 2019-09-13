<?php
/**
 * insart-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package insart-wp
 */
// Отключаем админ панель для всех пользователей
show_admin_bar(false);
// Begin custom post

//include 'inc/custom_fields.php';

function dd($array, $die = false)
{
    echo "<pre>", print_r($array, 1), "</pre>";
    if ($die)
        die();
}

if (function_exists('add_image_size')) {
    add_image_size('img_300_85', 300, 85, false);
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

function custom_post_type()
{
    // Members post type
    $labels = array(
        'name' => 'Member',
        'singular_name' => 'Member',
        'menu_name' => 'Members',
        'parent_item_colon' => 'Parent item',
        'all_items' => 'All members',
        'view_item' => 'View member',
        'add_new_item' => 'Add new member',
        'add_new' => 'Add new',
        'edit_item' => 'Edit member',
        'update_item' => 'Update item',
        'search_items' => 'Search item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
    );
    $args = array(
        'label' => 'Member',
        'description' => 'Member',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'trackbacks'),
//        'taxonomies' => array('archive-page',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        // 'menu_icon' => get_bloginfo('template_url') . '/img/customer_review.png',
        'menu_icon' => 'dashicons-admin-multisite',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        //'show_in_rest' => true, // Important !
    );
//    register_post_type('member', $args);

    // Clients post type
    $labels = array(
        'name' => 'Client',
        'singular_name' => 'Client',
        'menu_name' => 'Clients',
        'parent_item_colon' => 'Parent item',
        'all_items' => 'All Clients',
        'view_item' => 'View Client',
        'add_new_item' => 'Add new Client',
        'add_new' => 'Add new',
        'edit_item' => 'Edit Client',
        'update_item' => 'Update item',
        'search_items' => 'Search item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
    );
    $args = array(
        'label' => 'Client',
        'description' => 'Client',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'trackbacks'),
//        'taxonomies' => array('archive-page',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        // 'menu_icon' => get_bloginfo('template_url') . '/img/customer_review.png',
        'menu_icon' => 'dashicons-admin-multisite',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        //'show_in_rest' => true, // Important !
    );
    register_post_type('client', $args);
}
add_action('init', 'custom_post_type', 0);

// End custom post

if ( ! function_exists( 'insart_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function insart_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on insart-wp, use a find and replace
		 * to change 'insart-wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'insart-wp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'insart-wp' ),
            'menu-2' => esc_html__( 'Primary2', 'insart-wp' ),
            'menu-3' => esc_html__( 'Primary3', 'insart-wp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'insart_wp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'insart_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function insart_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'insart_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'insart_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function insart_wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'insart-wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'insart-wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'insart_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function insart_wp_scripts() {
    
	wp_enqueue_style( 'insart-wp-style', get_stylesheet_uri() );
    wp_enqueue_style( 'insart-wp-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'insart-wp-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'insart-wp-slick', get_template_directory_uri() . '/assets/css/slick.css' );
	if(!is_page_template('template-static-custom.php') && !is_page_template('page_landing.php')){
		wp_enqueue_style( 'insart-wp-style2', get_template_directory_uri() . '/assets/css/style.css' );
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

	//wp_enqueue_script( 'insart-wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insart_wp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * get Redux-options
 */
require get_template_directory() . '/inc/redux-options.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Our insights', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Our Insight', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Our Insight', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Our Insight', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Our_Insights', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Our Insights', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Our Insights', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Our Insights', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Our Insights', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Our Insights', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Our Insights', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Our Insights:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Our Insights found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Our Insights found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'our_insights' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ),
		'taxonomies'          => array('post_tag'),
	);

	register_post_type( 'insights', $args );
}

/**
 * Display Contact Form 7 messages in a popup.
 */
function ContactForm7_popup() {
  $return = <<<EOT
  <script>
    jQuery(".wpcf7-form input[type='submit'], .wpcf7-form button").click(function(event) {
      jQuery( document ).one( "ajaxComplete", function(event, xhr, settings) {
        var data = xhr.responseText;
        var jsonResponse = JSON.parse(data);
        // console.log(jsonResponse);
        if(! jsonResponse.hasOwnProperty('into') || $('.wpcf7' + jsonResponse.into).length === 0) return;
        // alert(jsonResponse.message);
        $.fancybox.open(
          '<div class="message"><div class="result popup__result"><div class="result__succes result__item"><div class="result__wrapper"><div class="result__title"><div class="title title_big"><span>Успех!</span></div><div class="title title_small"><span>Ваша заявка успешно отправлена! </span><br><span>Я свяжусь с вами в ближайшее время.</span></div></div><div class="result__controls"><div data-fancybox-close class="btn btn_bg_pink"><span>Вернуться на сайт</span></div></div></div></div></div></div>',
          {
            smallBtn : true,
            toolbar : false
          }
        );
      });
    });
  </script>
  <style>
    
    
  </style>
EOT;
  echo $return;
}
add_action( 'wp_footer', 'ContactForm7_popup', 20 );

if(is_page_template('template-static-custom.php')){
	remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование 
	remove_filter( 'the_excerpt', 'wpautop' );
}
add_shortcode( 'column', 'column_shortcode' );
add_shortcode( 'clear', 'clear_floats_shortcode' );
add_shortcode( 'row', 'row_shortcode' );

add_filter( 'the_content', 'filter_function_name_11' );
function filter_function_name_11( $content ) {
	if(is_page_template('template-static-custom.php')){
		$content = bfr_clear_br( $content );
	}
	return $content;
}

/**
 * The column shortcode.
 * @param array $atts an array of shortcode attributes
 * @param string $content the content between the shortcode tags
 * @return string
 */
function column_shortcode( $atts, $content = '' ) {

    /* Extract the shortcode attributes. */
    extract( shortcode_atts( array(
      // 'width' => '48%',
      // 'spacing' => '0',
      'class' => 'col-md-6'
        ), $atts ) );

	/* Parse any nested shortcodes and clean up the formatting. */

    $content = bfr_clear_br(parse_shortcode_content( $content ));
	// $content = preg_replace('/<br>/', '',$content);
    /* Assemble the output. */
    // $style = "style='float: left; width: $width; margin-right: $spacing;'";
    // $output = "<div $style class=\"$class\">$content</div>";
    $output = "<div class=\"$class\">$content</div>";

    return str_replace('<br>', '', $output);
}

function row_shortcode( $atts, $content = '' ) {

    /* Extract the shortcode attributes. */
    extract( shortcode_atts( array(
      // 'width' => '48%',
      // 'spacing' => '0',
      'class' => 'row'
        ), $atts ) );

    /* Parse any nested shortcodes and clean up the formatting. */
    $content = parse_shortcode_content( $content );

    /* Assemble the output. */
    // $style = "style='float: left; width: $width; margin-right: $spacing;'";
    // $output = "<div $style class=\"$class\">$content</div>";
    $output = "<div class=\"$class\">$content</div>";

    return $output;
}

/**
 * The float clearing shortcode.
 * @return string
 */
function clear_floats_shortcode() {
    return "<div style='clear: both;'></div>";
}


/**
 * Process the content of a shortcode.
 * Parses any nested shortcodes, then adds paragraphs, then removes
 * the invalid markup wpautop() sometimes adds.
 * @param string $content the content passed by a shortcode
 * @return string
 */
function parse_shortcode_content( $content ) {

    /* Parse nested shortcodes and add formatting. */
    $content = trim( wpautop( do_shortcode( $content ) ) );
    // $content = trim(  do_shortcode( $content ) );

    /* Remove '</p>' from the start of the string. */
    if ( substr( $content, 0, 4 ) == '</p>' )
        $content = substr( $content, 4 );

    /* Remove '<p>' from the end of the string. */
    if ( substr( $content, -3, 3 ) == '<p>' )
        $content = substr( $content, 0, -3 );

    /* Remove any instances of '<p></p>'. */
    $content = str_replace( array( '<p></p>' ), '', $content );

    return $content;
}

function bfr_clear_br($text){
	return str_replace('</div><br>', '</div>', $text);
}

