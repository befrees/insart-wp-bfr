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

add_filter( 'big_image_size_threshold', '__return_false' );
// Begin custom post

//include 'inc/custom_fields.php';

function dd($array, $die = false)
{
    echo "<pre>", print_r($array, 1), "</pre>";
    if ($die)
        die();
}


function bfr_reset_svg($svg)
{

    $pattern = ['/<\?xml.+\?>/', '/\s(?:fill|title|style|viewBox)=\".+?\"/is', '/<svg/'];
    $width = preg_match("/width=\"(.+?)\"/",$svg,$regs_w);
    $height = preg_match("/height=\"(.+?)\"/",$svg,$regs_h);

    $viewbox = ' viewBox="0 0 ' . $regs_w[1] . ' ' . $regs_h[1] . '" ';
    $replacement = ['', '', '<svg ' . $viewbox];
    $out = preg_replace($pattern, $replacement, $svg);
    return $out;
}

function bfr_get_svg($path)
{
    $svg = file_get_contents($path);
    return bfr_reset_svg($svg);
}

//add_action('wp', 'bfr_check_dc_cookie');

add_filter( 'template_include', 'bfr_check_dc_cookie' );

function bfr_check_dc_cookie($original_template)
{
    global $post;
    if(is_page_template('page_landing_dc_thank.php') || is_page_template('page_landing_custom_thank.php')){
        if(!isset($_COOKIE['dc']) || empty($_COOKIE['dc'])){
            if($post->post_parent){
                $link = get_permalink($post->post_parent);
                wp_redirect($link);
                die();
            }
            
            return get_query_template( '404' );
        }
    }
    return $original_template;

}

if (function_exists('add_image_size')) {
    add_image_size('img_300_85', 300, 85, false);
    add_image_size('img_395_240', 395, 240, true);
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

    
	$labels = array(
		'name' => 'Company',
		'singular_name' => 'Company',
		'menu_name' => 'Company',
		'parent_item_colon' => 'Company',
		'all_items' => 'All Companies',
		'view_item' => 'Company',
		'add_new_item' => 'Add new Company',
		'add_new' => 'Add new',
		'edit_item' => 'Edit Company',
		'update_item' => 'Update Company',
		'search_items' => 'Find by Company',
		'not_found' => 'Не найдено',
		'not_found_in_trash' => 'Не найдено в мусоре',
	);
	$args = array(
		'label' => 'Companies',
		'description' => 'Companies',
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt',  'custom-fields', 'page-attributes'),
		'taxonomies' => array('type','api-tags'),
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
	);
    register_post_type('company', $args);
    
}
add_action('init', 'custom_post_type', 0);


add_action('init', 'create_type');

function create_type() {
    // заголовки
    $labels3 = array(
        'name' => __('Type'),
        'singular_name' => __('Type'),
        'all_items' => __('All types'),
        'parent_item' => __('Parent Type'),
        'parent_item_colon' => __('Parent Type:'),
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => __('Add New Type'),
        'new_item_name' => __('New Type Name'),
        'menu_name' => __('Type'),
    );
    // параметры
    $args3 = array(
        'label' => __('Type'), // определяется параметром $labels->name
        'labels' => $labels3,
        'public' => true,
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
//        'show_tagcloud' => true, // равен аргументу show_ui
        'hierarchical' => true,
        'tax_position' => true,
//    'update_count_callback' => '',
        'rewrite' => array('slug' => 'api'),
//    'query_var'             => '',
//        'capabilities' => array(),
//        'meta_box_cb' => 'post_categories_meta_box', // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
       'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
//        '_builtin' => true,
//        'show_in_quick_edit' => true, // по умолчанию значение show_ui
    );
    register_taxonomy('type', array( 'company'), $args3);
}

add_action('init', 'create_tags_api');

function create_tags_api() {
    // заголовки
    $labels3 = array(
        'name' => __('Tags'),
        'singular_name' => __('Tags'),
        'all_items' => __('All tags'),
        'parent_item' => __('Parent tags'),
        'parent_item_colon' => __('Parent tags:'),
        'edit_item' => 'Edit tags',
        'update_item' => 'Update tags',
        'add_new_item' => __('Add New tags'),
        'new_item_name' => __('New tags Name'),
        'menu_name' => __('Tags'),
    );
    // параметры
    $args3 = array(
        'label' => __('Tags'), // определяется параметром $labels->name
        'labels' => $labels3,
        'public' => true,
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
       'show_tagcloud' => true, // равен аргументу show_ui
        'hierarchical' => false,
//    'update_count_callback' => '',
        'rewrite' => array('slug' => 'api-tags'),
//    'query_var'             => '',
//        'capabilities' => array(),
//        'meta_box_cb' => 'post_categories_meta_box', // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
       'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
//        '_builtin' => true,
//        'show_in_quick_edit' => true, // по умолчанию значение show_ui
    );
    register_taxonomy('api-tags', array( 'company'), $args3);
}

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
	if( !is_page_template('template-static-custom.php')
        && !is_page_template('page_landing.php')
            && !is_page_template('page_landing_custom_thank.php' )){
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

// filter emails

add_filter( 'wpcf7_validate_email', 'bfr_custom_form_validation', 10, 2 );
add_filter( 'wpcf7_validate_email*', 'bfr_custom_form_validation', 10, 2 );

function bfr_custom_form_validation ($result, $tag){

    $tag_name = $tag->name;
    $name =  $tag_name;

    if( empty( $name ) ) {
        $name = "invalid_required";
    }
    if ( 'email' == $tag->basetype ) {

        $value = isset( $_POST[$tag_name] )
            ? trim( wp_unslash( strtr( (string) $_POST[$tag_name], "\n", " " ) ) )
            : '';
        $s = preg_match('/(\S+)@(gmail.com|yahoo.com|outlook.com|aol.com|icloud.com|msn.com|hotmail.com)/is', $value, $m);

        if($s){
            $result->invalidate( $tag, 'Please, enter your Business Email' );
        }
        if ( $tag->is_required() && '' == $value ) {
            $result->invalidate( $tag, wpcf7_get_message( $name ) );
        } elseif ( '' != $value && ! wpcf7_is_email( $value ) ) {
            $result->invalidate( $tag, wpcf7_get_message( $name ) );
        }
    }
    return $result;
}

///  Admin columns
function bfr_AddPostsColumn($cols, $post_type){
    
    if($post_type == 'page'){
                $cols['template_type'] = 'Template';
            }
            return $cols;
}
function bfr_AddPagesColumn($cols){
    
    $cols['template_type'] = 'Template';            
    return $cols;
}
function bfr_AddTplValue($column_name, $post_id) {
        
    if ( 'template_type' == $column_name ) {
        // thumbnail of Wtemplate_type 2.9
    $template_type = get_field('template_type', $post_id);
    //    dd($comp);
        if ( isset($template_type) && $template_type) { 
            echo $template_type;
        }
         else {
             echo __('-- None --'); 
        }
    }
}
add_filter( 'manage_posts_columns', 'bfr_AddPostsColumn', 10, 2);
add_filter( 'manage_pages_columns', 'bfr_AddPagesColumn', 10);
add_action( 'manage_pages_custom_column', 'bfr_AddTplValue', 10, 2 );

/////////////////////////////////////////////////////////////////


function hex2rgb($hex){
    return list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
}

function hex2rgba($hex, $a='1'){
    $out_arr = list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    return 'rgba('. implode(',', $out_arr) .', '. $a .')';
}

function get_esc_var($var=array()){
    if(!$var) return $var;
    $out = array();
    foreach($var as $k=>$v){
        if((int)$v)
            $out[$k] = (int) $v;
    }
    return $out;
}


/////////////////////////// Картинки в категориях //////////////////////////////////////////


add_action( 'type_edit_form_fields', 'mayak_update_category_image' , 10, 2 ); 
add_action( 'category_edit_form_fields', 'mayak_update_category_image' , 10, 2 ); 
function mayak_update_category_image ( $term, $taxonomy ) { 

  // wp_enqueue_editor();
  wp_enqueue_media();

?>
 <style>
 img{border:3px solid #ccc;}
 .term-group-wrap p{float:left;}
 .term-group-wrap input{font-size:18px;font-weight:bold;width:40px;}
 #bitton_images{font-size:18px;}
 #bitton_images_remove{font-size:18px;margin:5px 5px 0 0;}
 </style>
 <tr class="form-field term-group-wrap">
   <th scope="row">
     <label for="id-cat-images">Изображение</label>
   </th>
   <td>
     <p><input type="button" class="button bitton_images" id="bitton_images" name="bitton_images" value="+" /></br>
     <input type="button" class="button bitton_images_remove" id="bitton_images_remove" name="bitton_images_remove" value="&ndash;" /></p>
     <?php $id_images = get_term_meta ( $term -> term_id, 'id-cat-images', true ); ?>
     <input type="hidden" id="id-cat-images" name="id-cat-images" value="<?php echo $id_images; ?>">
     <div id="cat-image-miniature">
       <?php if (empty($id_images )) { ?>
       <img src="/wp-includes/images/crystal/default.png" alt="Zaglushka" width="84" height="89"/>
       <?php } else {?>
         <?php echo wp_get_attachment_image ( $id_images, 'thumbnail' ); ?>
       <?php } ?>
     </div>
   </td>
 </tr>
<?php
}


if(preg_match("#tag_ID=([0-9.]+)#", $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']))
add_action( 'admin_footer', 'mayak_loader'  );
function mayak_loader() {

?>
 <script>
   jQuery(window).load( function($) {
     function mayak_image_upload(button_class) {
      console.log(wp);
       var mm = true,
       _orig_send_attachment = wp.media.editor.send.attachment;
       jQuery('body').on('click', button_class, function(e) {
         var mb = '#'+jQuery(this).attr('id');
         var mt = jQuery(mb);
         mm = true;
         wp.media.editor.send.attachment = function(props, attachment){
           if (mm) {
             jQuery('#id-cat-images').val(attachment.id);
             jQuery('#cat-image-miniature').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
             jQuery('#cat-image-miniature .custom_media_image').attr('src',attachment.sizes.thumbnail.url).css('display','block');
           } else {
             return _orig_send_attachment.apply( mb, [props, attachment] );
           }
          }
       wp.media.editor.open(mt);
       return false;
     });
   }
   mayak_image_upload('.bitton_images.button'); 
   jQuery('body').on('click','.bitton_images_remove',function(){
     jQuery('#id-cat-images').val('');
     jQuery('#cat-image-miniature').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
   });
   jQuery(document).ajaxComplete(function(event, xhr, settings) {
     var mk = settings.data.split('&');
     if( jQuery.inArray('action=add-tag', mk) !== -1 ){
       var mh = xhr.responseXML;
       $mr = jQuery(mh).find('term_id').text();
       if($mr!=""){
         jQuery('#cat-image-miniature').html('');
       }
     }
   });
 });
</script>
<?php } 


add_action( 'edited_type','mayak_updated_category_image' , 10, 2 );
add_action( 'edited_category','mayak_updated_category_image' , 10, 2 );

function mayak_updated_category_image ( $term_id, $tt_id ) {
 if( isset( $_POST['id-cat-images'] ) && '' !== $_POST['id-cat-images'] ){
   $image = $_POST['id-cat-images'];
   update_term_meta ( $term_id, 'id-cat-images', $image );
 } else {
   update_term_meta ( $term_id, 'id-cat-images', '' );
 }
}

// color


add_action( 'type_edit_form_fields', 'mayak_update_category_color' , 10, 2 ); 
add_action( 'edited_type','mayak_updated_category_color' , 10, 2 );

function mayak_update_category_color($term, $taxonomy ){

  wp_enqueue_script( 'wp-color-picker' );
wp_enqueue_style( 'wp-color-picker' );

?>
 <script>
   jQuery(document).ready(function($){
$('input[name*="color"]').wpColorPicker();
});
 </script>
 <tr class="form-field term-group-wrap">
   <th scope="row">
     <label for="color">Color</label>
   </th>
   <td>
     
     <?php $id_color = get_term_meta ( $term -> term_id, 'color', true ); ?>
     <input type="text" id="color" name="color" value="<?php echo $id_color; ?>">
     
   </td>
 </tr>
<?php
}


function mayak_updated_category_color ( $term_id, $tt_id ) {
 if( isset( $_POST['color'] ) && '' !== $_POST['color'] ){
   $image = $_POST['color'];
   update_term_meta ( $term_id, 'color', $image );
 } else {
   update_term_meta ( $term_id, 'color', '' );
 }
}
