<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
	<div class="container">
	<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="product-details">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			$image = $images = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full');
			?>
			<h2><?php echo get_the_title();?></h2>
				<img src="<?php echo($image[0]!="")? $image[0] : '';?>">

			<p><?php echo get_the_content();?></p>
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		</div>

	</div>
	</div>		
	</div>	

	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
