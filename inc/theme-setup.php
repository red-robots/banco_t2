<?php 
if ( ! function_exists( 'banco_t2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function banco_t2_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on banco_t2, use a find and replace
   * to change 'banco_t2' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'banco_t2', get_template_directory() . '/languages' );

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
    'primary' => esc_html__( 'Primary', 'banco_t2' ),
    'sitemap' => esc_html__( 'Sitemap', 'banco_t2' ),
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
    

  /*
   * Enable support for Post Formats.
   * See https://developer.wordpress.org/themes/functionality/post-formats/
   */
  // add_theme_support( 'post-formats', array(
  //  'aside',
  //  'image',
  //  'video',
  //  'quote',
  //  'link',
  // ) );

  // Set up the WordPress core custom background feature.
//  add_theme_support( 'custom-background', apply_filters( 'banco_t2_custom_background_args', array(
//    'default-color' => 'ffffff',
//    'default-image' => '',
//  ) ) );
    

  // Add theme support for Custom Logo.
  add_theme_support( 'custom-logo', array(
    'width'       => 250,
    'height'      => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ) );
    

    
}
endif;
add_action( 'after_setup_theme', 'banco_t2_setup' );

add_action( 'after_setup_theme', 'remove_option_customizer', 11 ); 
function remove_option_customizer() {
    // This will remove support for post thumbnails on ALL Post Types
    remove_theme_support( 'custom-header' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function banco_t2_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'banco_t2_content_width', 640 );
}
add_action( 'after_setup_theme', 'banco_t2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function banco_t2_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'banco_t2' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'banco_t2_widgets_init' );