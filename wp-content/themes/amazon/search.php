<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();?>

<div class="wrap">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="search-page">
	<div>
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
		<?php endif; ?>
	</div><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				$image = $images = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'medium');?>
                           <div class="project-block">
                              <div class="project-pic">
                              <?php if($image[0]!= ''){?>
                                 <a href="<?php echo get_permalink();?>"><img src="<?php echo ($image[0] !='') ? $image[0] : ''; ?>" alt="img"></a>
                                 <?php }?>
                              </div>
                              <div class="project-info-txt">
                                 <h2><?php echo get_the_title();?></h2>
                                 <p>
                                    <?php echo get_the_content();?>
                                 </p>
                                 <div class="project-footer">
                                    <!-- <ul>
                                       <li><a class="delete-project" href="<?php //echo get_permalink();?>">Read This</a></li>
                                       <li><a class="create-project" href="#">Create template from this project</a></li>
                                    </ul> -->
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                           <?php
			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
			<?php
				//get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>

</div>
</div>
</div>
</div>
</div><!-- .wrap -->

<?php get_footer();
