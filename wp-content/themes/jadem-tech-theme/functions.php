<?php
/**
 * jadem-tech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jadem-tech
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'jadem_tech_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jadem_tech_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jadem-tech, use a find and replace
		 * to change 'jadem-tech' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jadem-tech', get_template_directory() . '/languages' );

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
				'main-menu' => esc_html__( 'Primary', 'jadem-tech' ),
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
				'jadem_tech_custom_background_args',
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
add_action( 'after_setup_theme', 'jadem_tech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jadem_tech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jadem_tech_content_width', 640 );
}
add_action( 'after_setup_theme', 'jadem_tech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jadem_tech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jadem-tech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jadem-tech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jadem_tech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jadem_tech_scripts() {
	// wp_enqueue_style( 'jadem-tech-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'jadem-tech-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'jadem-tech-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	// Enqueue CSS
	wp_register_style('jadem-tech-font-awesome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('jadem-tech-font-awesome');

	wp_register_style('jadem-tech-slick-css', get_template_directory_uri() . '/css/slick.css', array(), _S_VERSION);
	wp_enqueue_style('jadem-tech-slick-css');

	wp_register_style('jadem-tech-slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', array(), _S_VERSION);
	wp_enqueue_style('jadem-tech-slick-theme-css');
	
	wp_register_style('jadem-tech-css', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);
	wp_enqueue_style('jadem-tech-css');

	// Enqueue Script
	wp_register_script('jquery-3.6', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), false, true);
	wp_enqueue_script('jquery-3.6');

	wp_register_script('jadem-tech-js', get_template_directory_uri() . '/js/script.js', ['jquery-3.6'], false, true);
	wp_enqueue_script('jadem-tech-js');

	wp_register_script('jadem-tech-slick', get_template_directory_uri() . '/js/slick.min.js', ['jquery-3.6'], false, true);
	wp_enqueue_script('jadem-tech-slick');


}
add_action( 'wp_enqueue_scripts', 'jadem_tech_scripts' );

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

// ====================== Product Custom post type ===================================
function create_product_post_type()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Products', //Tên post type dạng số nhiều
        'singular_name' => 'Product' //Tên post type dạng số ít
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type for product', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            // 'author',
            'thumbnail',
            'comments',
            // 'trackbacks',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        // 'taxonomies' => array( 'loai_san_pham' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-cart', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );


    register_post_type('product', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'create_product_post_type');

// ==========================Create Category Product Taxonomy =============================
function create_category_taxonomy() {
	/* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
	 */
	$labels = array(
		'name' => 'Product Category',
		'singular' => 'Product Category',
		'menu_name' => 'Category'
	);


	/* Biến $args khai báo các tham số trong custom taxonomy cần tạo
	 */
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);


	/* Hàm register_taxonomy để khởi tạo taxonomy
	 */
	register_taxonomy('product_category', 'product', $args);


}


// Hook into the 'init' action
add_action( 'init', 'create_category_taxonomy', 0 );

// ==========================Create Brand Product Taxonomy =============================
function create_brand_taxonomy() {
	/* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
	 */
	$labels = array(
		'name' => 'Product Brand',
		'singular' => 'Product Brand',
		'menu_name' => 'Brand'
	);


	/* Biến $args khai báo các tham số trong custom taxonomy cần tạo
	 */
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);


	/* Hàm register_taxonomy để khởi tạo taxonomy
	 */
	register_taxonomy('product_brand', 'product', $args);


}


// Hook into the 'init' action
add_action( 'init', 'create_brand_taxonomy', 0 );

// ==========================Create Tag Product Taxonomy =============================
function create_tag_taxonomy() {
	/* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
	 */
	$labels = array(
		'name' => 'Product Tag',
		'singular' => 'Product Tag',
		'menu_name' => 'Tag'
	);


	/* Biến $args khai báo các tham số trong custom taxonomy cần tạo
	 */
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);


	/* Hàm register_taxonomy để khởi tạo taxonomy
	 */
	register_taxonomy('product_tag', 'product', $args);


}


// Hook into the 'init' action
add_action( 'init', 'create_tag_taxonomy', 1 );

/**
 * Add Advanced Custom Field
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}