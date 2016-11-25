<?php
/**
 * mountainkick functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mountainkick
 */

if ( ! function_exists( 'mountainkick_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mountainkick_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mountainkick, use a find and replace
	 * to change 'mountainkick' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mountainkick', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'mountainkick' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mountainkick_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mountainkick_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mountainkick_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mountainkick_content_width', 640 );
}
add_action( 'after_setup_theme', 'mountainkick_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mountainkick_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mountainkick' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mountainkick' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Subscribe Widget', 'mountainkick' ),
		'id'            => 'subscribe',
		'description'   => esc_html__( 'Add widgets here.', 'mountainkick' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mountainkick_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mountainkick_scripts() {
	wp_enqueue_style( 'mountainkick-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mountainkick-scripts-js', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );
	wp_enqueue_script( 'mountainkick-main-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'mountainkick-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mountainkick-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mountainkick_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


//Add option page using ACF:
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
/*
*  Change the Options Page menu to 'Theme Options'
*/

if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Theme Options') );
}


// Register post type packages:
add_action( 'init', 'custon_posttype_init' );
function custon_posttype_init() {
	$packagesLabels = array(
		'name'               => __( 'Packages' ),
		'singular_name'      => __( 'Package' ),
		'menu_name'          => __( 'Packages' ),
		'name_admin_bar'     => __( 'Packages' )		
	);

	$packagesArgs = array(
		'labels'             => $packagesLabels,
		'public'             => true,		
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
	);

	$testimonialLabels = array(
		'name'               => __( 'Testimonials' ),
		'singular_name'      => __( 'Testimonial' ),
		'menu_name'          => __( 'Testimonials' ),
		'name_admin_bar'     => __( 'Testimonials' )		
	);

	$testimonialArgs = array(
		'labels'             => $testimonialLabels,
		'public'             => true,		
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
	);

	register_post_type( 'package', $packagesArgs );
	register_post_type( 'testimonial', $testimonialArgs );
}

// register taxonomy for package custom post type:
add_action( 'init', 'create_package_taxonomies', 0 );


function create_package_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => __( 'Categories','mountainkick' ),
		'singular_name'     => __( 'Category','mountainkick' )		
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'trip-category' )
	);	

	register_taxonomy( 'trip-category', array( 'package' ), $args );
	
}

// register taxonomy for testimonial custom post type:
add_action( 'init', 'create_testimonial_taxonomies', 0 );


function create_testimonial_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => __( 'Categories','mountainkick' ),
		'singular_name'     => __( 'Category','mountainkick' )		
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'testimonial-category' )
	);	

	register_taxonomy( 'testimonial-category', array( 'testimonial' ), $args );
	
}


// Add classes to body:
add_filter( 'body_class','add_body_classes' );
function add_body_classes( $classes ) {
	if( !is_page_template('templates/page-home.php') )
    	$classes[] = 'inner';        
    return $classes;     
}


// support svg icon type in WP upload
function svg_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'svg_mime_types' );


//make svg icon display properly in the Media grid
function fix_svg_thumb_display() {
  echo '
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
  ';
}
add_action('admin_head', 'fix_svg_thumb_display');

/* Change Excerpt length */
/*function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/


// Limit the display of the words
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}