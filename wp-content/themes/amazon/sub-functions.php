<?php
add_action( 'init', 'codex_team_init' );
/**
 * Register a team post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_team_init() {
	$labels = array(
		'name'               => _x( 'Teams', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Team', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Teams', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'team', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Team', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Team', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Team', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Team', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Teams', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Teams', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Teams:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No teams found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No teams found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'team', $args );
}

add_action( 'init', 'codex_project_init' );
/**
 * Register a team post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_project_init() {
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'project', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Project', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Project', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Project', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Project', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Projects', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Project', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Project:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No projects found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'project', $args );
}

add_action( 'init', 'codex_template_init' );
/**
 * Register a team post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_template_init() {
	$labels = array(
		'name'               => _x( 'Templates', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Template', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Templates', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Template', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'template', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New template', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New template', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit template', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View template', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Templates', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Template', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Template:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No templates found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No templates found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'template' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'template', $args );
}



add_action( 'init', 'create_template_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_template_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Template categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Template category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Template categories', 'textdomain' ),
		'all_items'         => __( 'All Template categoriess', 'textdomain' ),
		'parent_item'       => __( 'Parent Template category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Template category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Template category', 'textdomain' ),
		'update_item'       => __( 'Update Template category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Template category', 'textdomain' ),
		'new_item_name'     => __( 'New Template category Name', 'textdomain' ),
		'menu_name'         => __( 'Template category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'template-category' ),
	);

	register_taxonomy( 'template-category', array( 'template' ), $args );
}

/* Adding class to menu items */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


function add_custom_scripts() {	
	wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ));
 	wp_enqueue_script( 'custom-script');
 
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );
?>
