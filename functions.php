<?php
/**
 * Birgunj Report functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Birgunj_Report
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function birgunj_report_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Birgunj Report, use a find and replace
		* to change 'birgunj-report' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'birgunj-report', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'birgunj-report' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'birgunj_report_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'birgunj_report_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function birgunj_report_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'birgunj_report_content_width', 640 );
}
add_action( 'after_setup_theme', 'birgunj_report_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function birgunj_report_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'birgunj-report' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'birgunj-report' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'birgunj_report_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function birgunj_report_scripts() {
	wp_enqueue_style( 'birgunj-report-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'birgunj-report-style', 'rtl', 'replace' );

	// CSS 
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', array(), '1.0.0' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', array(), '1.0.0' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	// JS 
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array(), '1.0.0', 'true' );
	wp_enqueue_script('fontawesome', get_template_directory_uri() . '/assets/fontawesome/js/all.js', array(), '1.0.0', 'true' );
	wp_enqueue_script('time', get_template_directory_uri() . '/assets/js/time.js', array(), '1.0.0', 'true' );
	wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '1.0.0', 'true' );

	wp_enqueue_script( 'birgunj-report-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'birgunj_report_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * upload_max_size
 */
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );


add_filter( 'nav_menu_css_class', 'menu_item_classes', 10, 4 );

function menu_item_classes( $classes, $item, $args, $depth ) {

    unset($classes);

    $classes[] = 'nav-item';

    return $classes;
}


function add_nav_link_class($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'menu-1') {
        $atts['class'] = 'nav-link'; 
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 3);

 
/**
 *
 * Mithila Code Creation Function Hook
 * WordPress Callback
 *
 */
require_once get_theme_file_path() .'/inc/mithilacodecreation/mithilacodecreation-framework.php';
