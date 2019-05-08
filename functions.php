<?php
/**
 * influen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package influen
 */

if ( ! function_exists( 'influen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function influen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on influen, use a find and replace
		 * to change 'influen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'influen', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'influen' ),
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
		add_theme_support( 'custom-background', apply_filters( 'influen_custom_background_args', array(
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

		add_image_size('client', 128, 80, true);
	}
endif;


add_action( 'after_setup_theme', 'influen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function influen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'influen_content_width', 640 );
}
add_action( 'after_setup_theme', 'influen_content_width', 0 );


/** Influen theme settings field name */
defined('CS_OPTION') || define('CS_OPTION', '_influen_options');

/** Influen version */
define('INFLUEN_VERSION', '1.0.0');

/**
 * Directory paths
 *******************************************************************/

/** Influen root directory path */
define('INFLUEN_ROOT', trailingslashit(get_template_directory()));

/** Influen includes directory path */
define('INFLUEN_INCLUDES_DIR', trailingslashit(INFLUEN_ROOT . 'inc'));

define('INFLUEN_ADMIN_DIR', trailingslashit(INFLUEN_ROOT . 'admin'));

/** Influen vendors directory path */
define('INFLUEN_VENDORS_DIR', trailingslashit(INFLUEN_ROOT . 'vendors'));


/**
 * Directory uri
 *******************************************************************/

/** Influen root uri */
define('INFLUEN_URI', trailingslashit(get_template_directory_uri()));

/** Influen assets uri */
define('INFLUEN_ASSETS_URI', trailingslashit(INFLUEN_URI . 'assets'));

/** Influen js uri */
define('INFLUEN_JS_URI', trailingslashit(INFLUEN_ASSETS_URI . 'js'));

/** Influen css uri */
define('INFLUEN_CSS_URI', trailingslashit(INFLUEN_ASSETS_URI . 'css'));

/** Influen vendor assets uri */
define('INFLUEN_VENDOR_ASSETS_URI', trailingslashit(INFLUEN_ASSETS_URI . 'vendor'));

/** Styles Enqueue*/
require INFLUEN_INCLUDES_DIR . 'class.styles.php';

/** Scripts Enqueue*/
require INFLUEN_INCLUDES_DIR . 'class.scripts.php';

/** fonts Enqueue*/
require INFLUEN_INCLUDES_DIR . 'class.fonts.php';

/** Theme Option*/
require INFLUEN_INCLUDES_DIR . 'class.theme-options.php';

/** Metabox Option*/
require INFLUEN_INCLUDES_DIR . 'class.metabox.php';


/** Sidebar*/
require INFLUEN_INCLUDES_DIR . 'class.sidebars.php';


/** helper*/
require INFLUEN_INCLUDES_DIR . 'functions.helper.php';

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

