<?php
/*
*Template Name: Amazon Template Website
*/
get_header();
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$template_args = array(
   'post_type' => 'template',
   'posts_per_page' => 6,
   'paged' => $paged
);

$template_query = new WP_Query($template_args);

$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => false, 
); 

$terms = get_terms('template-category', $args);
?>
<div class="bodypart no-padding">
         <div class="container">
            <div class="row two-colume">
               <div class="col-md-4 col-sm-4">
                  <div class="lft-part">
                     <div class="search-box">
                        <button class="sear-btn">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/search.jpg" alt="img">
                        </button> 
                        <input type="text">
                     </div>
                     <div class="menu-list">
                        <h3>View by</h3>
                        <ul>
                           <li><a href="#">New!</a></li>
                           <li><a href="#">Most Popular</a></li>
                        </ul>
                     </div>
                     <div class="category-menu">
                        <h3>Categories</h3>
                        <h5>See all template</h5>
                        <?php if(is_array($terms) && count($terms) > 0){?>
                        <ul>
                           <?php foreach($terms as $term):?>
                           <li><a class="template-cat-click" data-id="<?php echo $term->term_id;?>" href="javascript:void(0);"><?php echo $term->name;?></a></li>
                           <?php endforeach;?>
                        </ul>
                     <?php }?>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8">
                  <div class="rht-part">
                     <h1>Pick the website template you love</h1>
                     <div class="right-content">
                    <?php if($template_query->have_posts()): $count = 1;?>

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
                              Lorem ipsum dels
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
                              <!-- <ul>
                                 <li><a href="#"> <img src="<?php echo get_template_directory_uri();?>/assets/images/lft-pag.jpg" alt="img"> </a></li>
                                 <li><a href="#">1</a></li>
                                 <li><a href="#">2</a></li>
                                 <li><a href="#">3</a></li>
                                 <li><a href="#">4</a></li>
                                 <li><a href="#">5</a></li>
                                 <li><a href="#">5</a></li>
                                 <li><a href="#"> 
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/rht-pag.jpg" alt="img">
                                    </a>
                                 </li>
                              </ul> -->

                              <?php
                              $big = 999999999; // need an unlikely integer
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
                              ?>
                           </div>
                        </div>
                     </div>

                  <?php endif;?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-part">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <a href="#">Blog Posts</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php get_footer();?>