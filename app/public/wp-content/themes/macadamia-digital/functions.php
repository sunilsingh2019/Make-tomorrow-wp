<?php
/**
 * Macadamia Digital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Macadamia_Digital
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'macadamia_digital_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function macadamia_digital_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Macadamia Digital, use a find and replace
		 * to change 'macadamia-digital' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'macadamia-digital', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'macadamia-digital' ),
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
				'macadamia_digital_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'macadamia_digital_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function macadamia_digital_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'macadamia_digital_content_width', 640 );
}
add_action( 'after_setup_theme', 'macadamia_digital_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function macadamia_digital_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'macadamia-digital' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'macadamia-digital' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'macadamia_digital_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function macadamia_digital_scripts() {
	wp_enqueue_style( 'macadamia-digital-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'macadamia-digital-style', 'rtl', 'replace' );

	wp_enqueue_script( 'macadamia-digital-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'macadamia_digital_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));
    }
}


function project_post_type() {
	register_post_type( 'projects',
	  array(
		'labels' => array(
		  'name' => __( 'Projects' ),
		  'singular_name' => __( 'Projects' )
		),
		'public' => true,
		'has_archive' => false,
		'supports'  => array( 'title', 'thumbnail','editor', ),
		 'public'                => true,
		  'show_ui'               => true,
		  'show_in_menu'          => true,
		  'menu_position'         => 5,
		  'menu_icon'             => 'dashicons-dashboard',
		  'show_in_admin_bar'     => true,
		  'show_in_nav_menus'     => true,
		  'can_export'            => true,
		  'has_archive'           => false,
		  'exclude_from_search'   => false,
		  'publicly_queryable'    => true,
	  )
	);
  }
  add_action( 'init', 'project_post_type' );



  function stuffs_things_post_type() {
	register_post_type( 'stuff-things',
	  array(
		'labels' => array(
		  'name' => __( 'Stuff & Things' ),
		  'singular_name' => __( 'Stuff & Thing' )
		),
		'public' => true,
		'has_archive' => false,
		'supports'  => array( 'title', 'thumbnail','editor', ),
		 'public'                => true,
		  'show_ui'               => true,
		  'show_in_menu'          => true,
		  'menu_position'         => 5,
		  'menu_icon'             => 'dashicons-dashboard',
		  'show_in_admin_bar'     => true,
		  'show_in_nav_menus'     => true,
		  'can_export'            => true,
		  'has_archive'           => false,
		  'exclude_from_search'   => false,
		  'publicly_queryable'    => true,
	  )
	);
  }
  add_action( 'init', 'stuffs_things_post_type' );