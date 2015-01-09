<?php
/**
 * UGOKIE functions and definitions
 *
 * @package UGOKIE
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ugokie_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ugokie_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on UGOKIE, use a find and replace
	 * to change 'ugokie' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ugokie', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ugokie' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ugokie_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ugokie_setup
add_action( 'after_setup_theme', 'ugokie_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ugokie_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ugokie' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ugokie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ugokie_scripts() {
	wp_enqueue_style( 'ugokie-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ugokie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ugokie-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ugokie_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_theme_support( 'post-thumbnails' );

/**
 *PHP include
*/
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
 
add_shortcode('myphp', 'Include_my_php');

/**
 *CustumPost
*/
add_action( 'init', 'register_cpt_performance' );

function register_cpt_performance() {

    $labels = array( 
        'name' => _x( 'performances', 'performance' ),
        'singular_name' => _x( 'performance', 'performance' ),
        'add_new' => _x( '新規作成', 'performance' ),
        'add_new_item' => _x( '新しい実績を追加', 'performance' ),
        'edit_item' => _x( '実績を編集', 'performance' ),
        'new_item' => _x( '新しい実績', 'performance' ),
        'view_item' => _x( '実績を見る', 'performance' ),
        'search_items' => _x( '実績を検索', 'performance' ),
        'not_found' => _x( '実績が見つかりません', 'performance' ),
        'not_found_in_trash' => _x( 'ゴミ箱に実績はありません', 'performance' ),
        'parent_item_colon' => _x( '親実績', 'performance' ),
        'menu_name' => _x( '実績', 'performance' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => '実績',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'performance', $args );
}

/**
 *年別表示
*/
function get_archives_by_fiscal_year( $args = '' ) {
    global $wpdb, $wp_locale;
    $defaults = array (
        'post_type' => 'post',
        'limit' => '',
        'format' => 'html',
        'before' => '',
        'after' => '',
        'show_post_count' => false,
        'echo' => 1
    );
    $r = wp_parse_args( $args, $defaults );
    extract ( $r, EXTR_SKIP );
    if ( '' != $limit ) {
        $limit = absint( $limit );
        $limit = ' LIMIT ' . $limit;
    }
    $arcresults = (array) $wpdb->get_results(
        "SELECT YEAR(ADDDATE(post_date, INTERVAL -3 MONTH)) AS `year`, COUNT(ID) AS `posts`
        FROM $wpdb->posts
        WHERE post_type = '$post_type' AND post_status = 'publish'
        GROUP BY YEAR(ADDDATE(post_date))
        ORDER BY post_date DESC
        $limit"
    );
    return $arcresults;
}