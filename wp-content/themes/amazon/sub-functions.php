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



add_action( 'init', 'codex_homeslider_init' );
/**
 * Register a team post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_homeslider_init() {
	$labels = array(
		'name'               => _x( 'Home Sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Home Slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Home Sliders', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Home Slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'home slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New home slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New home slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit home slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View home slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Home Sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Home Slider', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Home Slider:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No home sliders found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No home sliders found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'home-slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'home-slider', $args );
}

/* Adding class to menu items */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


/*function add_custom_scripts() {	
	wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ));
 	wp_enqueue_script( 'custom-script');
 	wp_localize_script( 'custom-script', 'Front',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
 
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );*/



/* for popular template */

function wpb_set_template_views($postID) {
    $count_key = 'wpb_template_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function category_filter_func(){
	
	global $wpdb, $table_prefix;
    $response_arr = ['flag' => FALSE, 'msg' => NULL];
	$term_id = $_POST['termid'];
	
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	$template_args = array(
		   'post_type' => 'template',
		   'posts_per_page' => -1,
		   'paged' => $paged,
		   'tax_query' => array(
			array(
				'taxonomy' => 'template-category',
				'field'    => 'term_id',
				'terms'    => $term_id,
				),
			)

		);
	$template_query = new WP_Query($template_args);

	ob_start();
	if($template_query->have_posts()): $count = 1;?>

                        <?php while($template_query->have_posts()):$template_query->the_post();?>
                           <?php $templatemages = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full');?>
                     
                            <?php if ($count%2 == 1)
                            {  
                                 echo "<div class='row'>";
                            }?>

                            <div class="col-md-6 col-sm-6">
                           <div class="box-holder">
                              <div class="box">
                                 <img src="<?php echo ($templatemages[0]!='') ? $templatemages[0] :get_template_directory_uri().'/assets/images/one.jpg';?>" alt="img">
                                 <div class="template-hide-info">
                                    <h3><?php echo get_the_title();?></h3>
                                    <div class="box-info">
                                       <p>
                                         <?php echo get_the_content();?>
                                       </p>
                                    </div>
                                    <!-- <div class="pull-left">
                                       <h4>$85</h4>
                                    </div> -->
                                    <div class="pull-right">
                                       <a class="btn btn-yellow" href="<?php echo get_permalink();?>">Details</a>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <?php echo get_the_title();?>
                           </div>
                           </div>
                           <?php
                           if ($count%2 == 0)
                            {
                                echo "</div>";
                            } 
                           ?>

                     

                     <?php $count++; endwhile;wp_reset_query();?>
                     <?php if ($count%2 != 1) echo "</div>";?>
                     <div class="row">
                        <div class="col-md-12 col-sm-12">
                           <div class="pagination">
                              <?php
                              $big = 999999999; // need an unlikely integer
                              $base = '/template-website';
                              $orig_req_uri = $_SERVER['REQUEST_URI'];
                              $_SERVER['REQUEST_URI'] = $base;
                              $left_img = '<img src='.get_template_directory_uri().'/assets/images/lft-pag.jpg>';
                              $right_img = '<img src='. get_template_directory_uri().'/assets/images/rht-pag.jpg>';
                              echo paginate_links( array(
                                 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                 'format' => '?paged=%#%',
                                 'current' => max( 1, get_query_var('paged') ),
                                 'total' => $template_query->max_num_pages,
                                 'prev_text'          => __($left_img),
                                 'next_text'          => __($right_img),
                              ) );
                              $_SERVER['REQUEST_URI'] = $orig_req_uri;
                              ?>
                           </div>
                        </div>
                     </div>

                  <?php
                  $response_arr['search_content'] = ob_get_contents();
            		ob_end_clean();
            		$response_arr['flag'] = TRUE;

            		endif;
       			echo json_encode($response_arr);
        		exit;
                   
}

add_action( 'wp_ajax_category_filter_func', 'category_filter_func' );
add_action( 'wp_ajax_nopriv_category_filter_func', 'category_filter_func' );


function viewby_filter_func(){
	$type = $_POST['view_type'];
	
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	if($type == 'new'){
		$type_args = array(
			'post_type' => 'template',
			'posts_per_page' => -1

		);
	}else{
		$type_args = array(
			'post_type' => 'template',
			'posts_per_page' => -1,
			'meta_key' => 'wpb_template_views_count',
			'orderby' => 'meta_value_num',
			'order' => 'DESC'

		);
	}

	$type_query = new WP_Query($type_args);
	ob_start();
	if($type_query->have_posts()): $count = 1;?>

                        <?php while($type_query->have_posts()):$type_query->the_post();?>
                           <?php $typemages = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full');?>
                     
                            <?php if ($count%2 == 1)
                            {  
                                 echo "<div class='row'>";
                            }?>

                            <div class="col-md-6 col-sm-6">
                           <div class="box-holder">
                              <div class="box">
                                 <img src="<?php echo ($typemages[0]!='') ? $typemages[0] :get_template_directory_uri().'/assets/images/one.jpg';?>" alt="img">
                                 <div class="template-hide-info">
                                    <h3><?php echo get_the_title();?></h3>
                                    <div class="box-info">
                                       <p>
                                         <?php echo get_the_content();?>
                                       </p>
                                    </div>
                                    <!-- <div class="pull-left">
                                       <h4>$85</h4>
                                    </div> -->
                                    <div class="pull-right">
                                       <a class="btn btn-yellow" href="<?php echo get_permalink();?>">Details</a>
                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                              <?php echo get_the_title();?>
                           </div>
                           </div>
                           <?php
                           if ($count%2 == 0)
                            {
                                echo "</div>";
                            } 
                           ?>

                     

                     <?php $count++; endwhile;wp_reset_query();?>
                     <?php if ($count%2 != 1) echo "</div>";?>
                     <div class="row">
                        <div class="col-md-12 col-sm-12">
                           <div class="pagination">
                              <?php
                              $big = 999999999; // need an unlikely integer
                              $base = '/template-website';
                              $orig_req_uri = $_SERVER['REQUEST_URI'];
                              $_SERVER['REQUEST_URI'] = $base;
                              $left_img = '<img src='.get_template_directory_uri().'/assets/images/lft-pag.jpg>';
                              $right_img = '<img src='. get_template_directory_uri().'/assets/images/rht-pag.jpg>';
                              echo paginate_links( array(
                                 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                 'format' => '?paged=%#%',
                                 'current' => max( 1, get_query_var('paged') ),
                                 'total' => $type_query->max_num_pages,
                                 'prev_text'          => __($left_img),
                                 'next_text'          => __($right_img),
                              ) );
                              $_SERVER['REQUEST_URI'] = $orig_req_uri;
                              ?>
                           </div>
                        </div>
                     </div>

                  <?php
                  $response_arr['search_content'] = ob_get_contents();
            		ob_end_clean();
            		$response_arr['flag'] = TRUE;

            		endif;
       			echo json_encode($response_arr);
        		exit;
}

add_action( 'wp_ajax_viewby_filter_func', 'viewby_filter_func' );
add_action( 'wp_ajax_nopriv_viewby_filter_func', 'viewby_filter_func' );
?>
