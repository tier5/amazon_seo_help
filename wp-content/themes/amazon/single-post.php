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

get_header();

$images = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');

$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => false, 
); 

$terms = get_terms('category', $args);

$tags = get_tags(array(
  'hide_empty' => false
));

$args = array(
   'numberposts' => 3,
   'post_type' => 'post',
   'post_status' => 'publish'
   
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

   <div class="bodypart">
         <div class="container">
            <div class="row two-panel price-body">
               <div class="col-md-8 col-sm-8">
                  <!-- <div class="blog-slider">
                    <img src="images/blog-banner1.jpg" alt="img">
                  </div> -->
                  <?php while(have_posts()):the_post();?>
                  <div class="single-thumb-block">
                            <div class="blog-thumb-pic">
                                <img alt="img" src="<?php echo($images[0]!='')?$images[0]:'';?>">
                                <div class="date">
                                    <span><?php echo get_the_date('d');?></span>
                                 	<span><?php echo get_the_date('M');?></span>
                                </div>
                            </div>
                            <div class="row blog-thumb-info">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo get_the_title();?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul>
                                        <li>
                                        <a href="#">
                                           <img alt="img" src="<?php echo get_template_directory_uri();?>/assets/images/58.png"> 
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-facebook"></i>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-twitter"></i>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-google-plus"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                            <p><?php echo get_the_content();?></p>

                            </div>
                        <?php endwhile;wp_reset_query();?>
 
               </div>
               <div class="col-md-4 col-sm-4">
                    <div class="right-menu">
                        <h2>Categories</h2>
                        <div class="right-main">
                        <?php if(is_array($terms) && count($terms) > 0){?>
                            <ul>
                            <?php foreach($terms as $term):?>
                                <li>
                                    <a href="#"><?php echo $term->name;?></a>
                                </li>
                                
                             <?php endforeach;?>
                            
                            </ul> 
                            <?php }?>   
                        </div>
                        
                        <h2>Recent Post</h2>
                         <div class="recent-post">
                           <?php if(is_array($recent_posts) && count($recent_posts) > 0){?>
                             <ul>   
                             <?php foreach($recent_posts as $recent):?>
                                <?php $recentmages = wp_get_attachment_image_src( get_post_thumbnail_id($recent["ID"]),'full');?>
                                <li>
                                    <a href="<?php echo get_permalink($recent["ID"]);?>">
                                    <span><img src="<?php echo($recentmages[0]!= '') ? $recentmages[0] : '';?>" alt="img"></span>
                                    <?php echo(strlen($recent["post_content"]) > 43) ? substr($recent["post_content"],0,43).'...':$recent["post_content"];?>
                                    </a>
                                    <div class="recent-date"><?php echo get_the_date('d M Y');?></div>
                                    <div class="clearfix"></div>

                                </li>
                                
                             <?php endforeach; wp_reset_query();?>
                             </ul>
                             <?php }?>   
                         </div>
                         <h2>Tags</h2>
                        <div class="right-main tags">
                        <?php if(is_array($tags) && count($tags) > 0){?>
                           <?php foreach($tags as $tag):?>
                            <a href="#"><?php echo $tag->name;?></a> 
                            <?php endforeach;?>
                        <?php } ?>
                        </div>
                    </div>
               </div>
            </div>
         </div>
        <?php echo get_template_part('template/site','bottom');?>
      </div>

<?php get_footer();
