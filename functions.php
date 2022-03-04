<?php
/**
 * Empty Wp Theme's functions and definitions
 *
 * @package empty_wp_theme
 * @since empty_wp_theme 1.0
 */

// Change to update version for caching
if ( ! defined( 'EMPTY_WP_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'EMPTY_WP_THEME_VERSION', '1.0.0' );
}
 
if ( ! function_exists( 'empty_wp_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function empty_wp_theme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'empty-wp-theme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     * 
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-spacing' );

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
	 */
	add_theme_support( 'custom-logo' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'empty-wp-theme' ),
        'secondary' => __( 'Footer Menu', 'empty-wp-theme' )
    ) );


    /**
     * Block Specific. Will/can be replaced by theme.json
     * 
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
     */
    add_theme_support( 'align-wide' ); // Add wide and full width alignments.

    /**
    * Add support custom font sizes.
    *
    * Add the line below to disable the custom color picker in the editor.
    * add_theme_support( 'disable-custom-font-sizes' );
    */  
    add_theme_support( 'disable-custom-font-sizes' );
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => __( 'Paragraph', 'empty-wp-theme' ),
                'shortName' => __( 'P', 'empty-wp-theme' ),
                'size'      => 18,
                'slug'      => 'paragraph',
            ),
            array(
                'name'      => __( 'Heading 1', 'empty-wp-theme' ),
                'shortName' => __( 'h1', 'empty-wp-theme' ),
                'size'      => 'clamp(2.5em,4vw,4em)',
                'slug'      => 'h1',
            ),
            array(
                'name'      => __( 'Heading 2', 'empty-wp-theme' ),
                'shortName' => __( 'h2', 'empty-wp-theme' ),
                'size'      => 'clamp(1.666em,3vw,2.8em)',
                'slug'      => 'h2',
            ),
            array(
                'name'      => __( 'Heading 3', 'empty-wp-theme' ),
                'shortName' => __( 'h3', 'empty-wp-theme' ),
                'size'      => 'clamp(1.5em,2.7vw,2.25em)',
                'slug'      => 'h3',
            ),
            array(
                'name'      => __( 'Heading 4', 'empty-wp-theme' ),
                'shortName' => __( 'h4', 'empty-wp-theme' ),
                'size'      => 'clamp(1em,2vw,1.5em)',
                'slug'      => 'h4',
            ),
            array(
                'name'      => __( 'Heading 5', 'empty-wp-theme' ),
                'shortName' => __( 'h5', 'empty-wp-theme' ),
                'size'      => 19,
                'slug'      => 'h5',
            ),
            array(
                'name'      => __( 'Heading 6', 'empty-wp-theme' ),
                'shortName' => __( 'h6', 'empty-wp-theme' ),
                'size'      => 17,
                'slug'      => 'h6',
            ),
        )
    );


    add_theme_support( 'disable-custom-gradients' );
    add_theme_support( 'custom-line-height' );

    /* Disables default Patterns */
    remove_theme_support( 'core-block-patterns' );

    /* Add Styling to block content */
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-styles.css' );

 
}
endif; // empty_wp_theme_setup
add_action( 'after_setup_theme', 'empty_wp_theme_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function empty_wp_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'empty-wp-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'empty-wp-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'empty_wp_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function empty_wp_theme_scripts() {

	wp_enqueue_style( 'empty_wp_global-theme-styles', get_template_directory_uri() . '/assets/css/global.css', array(), EMPTY_WP_THEME_VERSION );

	wp_enqueue_style( 'empty_wp_theme-style', get_stylesheet_uri(), array(), EMPTY_WP_THEME_VERSION );

    wp_enqueue_script( 'empty_wp_theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), EMPTY_WP_THEME_VERSION, true );

	wp_enqueue_script( 'empty_wp_theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), EMPTY_WP_THEME_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'empty_wp_theme_scripts' );

/**
 * JS to control gutenberg editor.
 */
function editor_assets() {
    wp_enqueue_script(
        'remove-block-styles',
        get_template_directory_uri() . '/assets/js/blocks/block-styles.js',
        array ( 'wp-blocks', 'wp-edit-post' ),
        EMPTY_WP_THEME_VERSION
    );
}
add_action( 'enqueue_block_editor_assets', 'editor_assets' );

