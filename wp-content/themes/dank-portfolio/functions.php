<?php
/**
 * @package Dank Portfolio Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package @package Dank Portfolio
 */

if ( ! function_exists( 'dank_portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dank_portfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on X Portfolio, use a find and replace
	 * to change 'dank-portfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dank-portfolio', get_template_directory() . '/languages' );

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

	add_image_size( 'dank-portfolio-thumb', 560, 560, TRUE );
	add_image_size( 'dank-portfolio-preview', 640, 540 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main' => esc_html__( 'Main Menu', 'dank-portfolio' ),
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
	add_theme_support( 'custom-background', apply_filters( 'dank_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

     add_theme_support( 'custom-logo' );

         // Custom Site Logo
         add_theme_support( 'site-logo', array(
        'header-text' => array(
            'site-title',
            'tagline',
        ),
        'size' => 'medium',
    ) );

	// Add Jetpack Infinite Scroll support
	add_theme_support( 'infinite-scroll', array(
		'type'           => 'click',
		'footer'		 => false,
		'footer_widgets' => false,
		'container'      => 'posts',
		'render'         => false,
		'posts_per_page' => false,
	) );
}
endif;
add_action( 'after_setup_theme', 'dank_portfolio_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dank_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dank_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'dank_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dank_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dank-portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dank-portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dank_portfolio_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function dank_portfolio_scripts() {
	wp_enqueue_style( 'dank-portfolio-grid', get_template_directory_uri() . '/css/grid.css');

	wp_enqueue_style( 'dank-portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'smoothstate', get_template_directory_uri() . '/js/smoothstate.js', array('jquery'), '209981215', true );

	wp_enqueue_script( 'dank-portfolio-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery','masonry'), '201599', true );

	wp_enqueue_script( 'dank-portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dank_portfolio_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function dank_portfolio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'dank_portfolio_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
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

