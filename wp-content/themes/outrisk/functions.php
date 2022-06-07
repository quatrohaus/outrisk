<?php
/***********************************
    Theme Setup
***********************************/
function outrisk_resources(){
	//post-formats
    add_theme_support('post-formats', array( 'aside', 'image', 'video', 'gallery', 'quote', 'link') );
    
     //featured images
    add_theme_support('post-thumbnails');
	add_image_size('full-image', 1200, 675, true);
	add_image_size('slider-image', 1400, 500, true);
	add_image_size('mckinley-banner', 1400, 200, true);
	add_image_size('home-project', 380, 440, true);
	add_image_size( 'news-image', 350, 230, true ); 
	add_image_size('photo-gallery', 260, 200, true);
	add_image_size('video-gallery', 360, 250, true);
	add_image_size('membership', 380, 300, true);
	add_image_size('photo-home', 500, 200, true);
	add_image_size('out-team', 200, 200, true);
	
	
	//navigation menu
    add_theme_support('menus');
    
     /* Switch default core markup for search form, comment form, and comments to output valid HTML5. */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action('after_setup_theme', 'outrisk_resources');





/************************************
	Enqueue scripts and styles
************************************/
function outrisk_scripts() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('outrisk-steel-css', get_template_directory_uri() . '/css/outrisk.css');
    wp_enqueue_style('outrisk-secondary-css', get_template_directory_uri() . '/css/secondary.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'slider-css', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'navigation-main-css', get_template_directory_uri() . '/css/navigation-main.css', false, '1','all');


    wp_enqueue_script( 'jquery-bootstrap', get_theme_file_uri() . '/js/jquery-3.4.1.slim.min.js');
	//wp_enqueue_script( 'jquery-bootstrap', get_theme_file_uri() . '/js/jquery-3.2.1.slim.min.js');
	wp_enqueue_script( 'popper-js', get_theme_file_uri() . '/js/popper.min.js');
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'slider-js', get_theme_file_uri() . '/js/owl.carousel.min.js');
	wp_enqueue_script( 'vanilla-js', get_theme_file_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts', 'outrisk_scripts');





/************************************
	Navigation Menus
************************************/
register_nav_menus(array(
    'primary' => __('Primary Menu'),
	'products' => __('Products Menu'),
	'company' => __('Company Menu'),
	'legal' => __('Legal Menu'),
));





/************************************
	Slider Post Type
************************************/
function outrisk_slider_post_type() {
	register_post_type( 'Slider',
		array(
			'labels' => array(
				'name' => __( 'Slider' ),
				'singular_name' => __( 'Slider' ),
				'add_new_item' => 'Add New Slider',
				'add_new' => __('Add New Slider'),
				'attributes' => __( 'Slider Attributes', 'text_domain' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'slider'
			),
			'supports' => array(
				'title',
				'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action( 'init', 'outrisk_slider_post_type' );

// Change Image Editor Library Used by WordPress
// www.wpbeginner.com/wp-tutorials/how-to-fix-the-http-image-upload-error-in-wordpress
function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );





/************************************
	Bread Crumb
************************************/
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		echo the_title();
	} elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
	}
}




/************************************
	Portfolio Slider Post Type
************************************/
function portfolio_slider_post_type() {
	register_post_type( 'Portfoolio Slider',
		array(
			'labels' => array(
				'name' => __( 'Portfolio Slider' ),
				'singular_name' => __( 'Portfolio Slider' ),
				'add_new_item' => 'Add New Portfolio Slider',
				'add_new' => __('Add New Portfolio Slider'),
				'attributes' => __( 'Slider Attributes', 'text_domain' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'portfolio_slider'
			),
			'supports' => array(
				'title',
				'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action( 'init', 'portfolio_slider_post_type' );




/************************************
	Contact-details Post Type
************************************/
function contact_details_post_type() {
	register_post_type( 'Cotact Details',
		array(
			'labels' => array(
				'name' => __( 'Contact Details' ),
				'singular_name' => __( 'Contact Details' ),
				'add_new_item' => 'Add New Contact Details',
				'add_new' => __('Add New Contact Details'),
				'attributes' => __( 'Contact Details Attributes', 'text_domain' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'contact_details'
			),
			'supports' => array(
				//'title',
				//'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action( 'init', 'contact_details_post_type' );


/************************************
	Careers Post Type
************************************/
function careers_post_type() {
	register_post_type( 'Careers',
		array(
			'labels' => array(
				'name' => __( 'Careers' ),
				'singular_name' => __( 'Careers' ),
				'add_new_item' => 'Add New Careers',
				'add_new' => __('Add New Careers'),
				'attributes' => __( 'Careers Attributes', 'text_domain' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'careers'
			),
			'supports' => array(
				'title',
//				'thumbnail'
// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action( 'init', 'careers_post_type' );

/*---------------------------------------*/

function cptui_register_my_cpts_personal_insurance() {

	/**
	 * Post Type: personal insurance type.
	 */

	$labels = array(
		"name" => __( "Personal Insurance", "custom-post-type-ui" ),
		"singular_name" => __( "personal insurance", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "personal-insurance", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "personal-insurance", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
		"taxonomies" => array( "personal_insurance_type" ),
	);

	register_post_type( "personal_insurance", $args );
}

add_action( 'init', 'cptui_register_my_cpts_personal_insurance' );




function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Personal Insurance Type.
	 */

	$labels = array(
		"name" => __( "Personal Insurance Type", "custom-post-type-ui" ),
		"singular_name" => __( "personal insurance type", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Personal Insurance Type", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'personal_insurance_type', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "personal_insurance_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "personal_insurance_type", array( "personal_insurance" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

/************************************
	Our Team Post Type
************************************/
//function our_team_post_type() {
// register_post_type( 'our-team',
// array(
// 'labels' => array(
// 'name' => __( 'Our Team', 'Post Type General Name', 'text_domain' ),
// 'singular_name' => __( 'Our Team', 'Post Type Singular Name', 'text_domain' ),
// 'menu_name' => __( 'Our Team', 'text_domain' ),
// 'name_admin_bar' => __( 'Our Team', 'text_domain' ),
// 'archives' => __( 'Team Archives', 'text_domain' ),
// 'attributes' => __( 'our Team Attributes', 'text_domain' ),
// //'parent_item_colon' => __( 'Parent Leader:', 'text_domain' ),
// 'all_items' => __( 'All Team', 'text_domain' ),
// 'add_new_item' => __( 'Add New Team Member', 'text_domain' ),
// 'add_new' => __( 'Add New Team Member', 'text_domain' ),
// 'new_item' => __( 'New Team Member', 'text_domain' ),
// 'edit_item' => __( 'Edit Team Member', 'text_domain' ),
// 'update_item' => __( 'Update Team Member', 'text_domain' ),
// 'view_item' => __( 'View Team Member', 'text_domain' ),
// 'view_items' => __( 'View Team Members', 'text_domain' ),
// 'search_items' => __( 'Search for Team Members', 'text_domain' ),
// 'not_found' => __( 'Team Members Not found', 'text_domain' ),
// 'not_found_in_trash' => __( 'Team Memebers Not found in Trash', 'text_domain' ),
//
// 'featured_image' => __( 'Profile Picture', 'text_domain' ),
// 'set_featured_image' => __( 'Upload Profile Picture', 'text_domain' ),
// 'remove_featured_image' => __( 'Remove Profile Picture', 'text_domain' ),
// 'use_featured_image' => __( 'Use as Profile Picture', 'text_domain' ),
//
// 'insert_into_item' => __( 'Insert into Team Member', 'text_domain' ),
// 'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'text_domain' ),
// 'items_list' => __( 'Team Member list', 'text_domain' ),
// 'items_list_navigation' => __( 'Team Members list navigation', 'text_domain' ),
// 'filter_items_list' => __( 'Filter Team Members list', 'text_domain' ),
// ),
// 'public' => true,
// 'has_archive' => true,
// 'rewrite' => array(
// 'slug' => 'our-team'
// ),
// // 'taxonomies' => array(
// // 'category'
// // ),
// 'supports' => array(
// 'title',
// 'thumbnail'
// ),
// 'menu_position' => 5,
// 'menu_icon' => __('dashicons-admin-users')
// )
// );
//}
//add_action( 'init', 'our_team_post_type' );
//
//
//







/************************************
	Documents Post Type
************************************/
//function company_documents_post_type() {
//	register_post_type( 'documents',
//		array(
//			'labels' => array(
//				'name'                  => __( 'Documents', 'Post Type General Name', 'text_domain' ),
//				'singular_name'         => __( 'Documents', 'Post Type Singular Name', 'text_domain' ),
//				'menu_name'             => __( 'Documents', 'text_domain' ),
//				'name_admin_bar'        => __( 'Documents', 'text_domain' ),
//				'archives'              => __( 'Documents Archives', 'text_domain' ),
//				'attributes'            => __( 'Documents Attributes', 'text_domain' ),
//				'parent_item_colon'     => __( 'Parent Documents:', 'text_domain' ),
//				'all_items'             => __( 'All Documents', 'text_domain' ),
//				'add_new_item'          => __( 'Add New Documents', 'text_domain' ),
//				'add_new'               => __( 'Add New Documents', 'text_domain' ),
//				'new_item'              => __( 'New Documents', 'text_domain' ),
//				'edit_item'             => __( 'Edit Documents', 'text_domain' ),
//				'update_item'           => __( 'Update Documents', 'text_domain' ),
//				'view_item'             => __( 'View Documents', 'text_domain' ),
//				'view_items'            => __( 'View Documents', 'text_domain' ),
//				'search_items'          => __( 'Search for Documents', 'text_domain' ),
//				'not_found'             => __( 'Documents Not found', 'text_domain' ),
//				'not_found_in_trash'    => __( 'Documents Not found in Trash', 'text_domain' ),
//
//				'featured_image'        => __( 'Documents Cover', 'text_domain' ),
//				'set_featured_image'    => __( 'Upload Documents Cover', 'text_domain' ),
//				'remove_featured_image' => __( 'Remove Documents Cover', 'text_domain' ),
//				'use_featured_image'    => __( 'Use as Documents Cover', 'text_domain' ),
//				
//				'insert_into_item'      => __( 'Insert into Documents', 'text_domain' ),
//				'uploaded_to_this_item' => __( 'Uploaded to this Documents', 'text_domain' ),
//				'items_list'            => __( 'Documents list', 'text_domain' ),
//				'items_list_navigation' => __( 'Documents list navigation', 'text_domain' ),
//				'filter_items_list'     => __( 'Filter Documents list', 'text_domain' ),
//			),
//			'public' => true,
//			'has_archive' => true,
//			'rewrite' => array(
//				'slug' => 'documents'
//			),
//			'taxonomies' => array( 
//				'category' 
//			),
//			'supports' => array(
//				'title',
//				// 'thumbnail'
//			),
//			'menu_position' => 5,
//			'menu_icon' => __('dashicons-media-text')
//		)
//	);
//}
//add_action( 'init', 'company_documents_post_type' );
//
//
//function word_count($string, $limit) {
// 
//$words = explode(' ', $string);
// 
//return implode(' ', array_slice($words, 0, $limit));
// 
//}
/*************************************/


//function cptui_register_my_cpts_product() {
//
//	/**
//	 * Post Type: product.
//	 */
//
//	$labels = array(
//		"name" => __( "Product", "custom-post-type-ui" ),
//		"singular_name" => __( "product", "custom-post-type-ui" ),
//	);
//
//	$args = array(
//		"label" => __( "product", "custom-post-type-ui" ),
//		"labels" => $labels,
//		"description" => "",
//		"public" => true,
//		"publicly_queryable" => true,
//		"show_ui" => true,
//		"delete_with_user" => false,
//		"show_in_rest" => true,
//		"rest_base" => "",
//		"rest_controller_class" => "WP_REST_Posts_Controller",
//		"has_archive" => true,
//		"show_in_menu" => true,
//		"show_in_nav_menus" => true,
//		"exclude_from_search" => false,
//		"capability_type" => "post",
//		"map_meta_cap" => true,
//		"hierarchical" => true,
//		"rewrite" => array( "slug" => "product", "with_front" => true ),
//		"query_var" => true,
//		"supports" => array( "title", "thumbnail", "excerpt" ),
//	);
//
//	register_post_type( "product", $args );
//}
//
//add_action( 'init', 'cptui_register_my_cpts_product' );
