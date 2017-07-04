<?php
/*
*Template Name: Blog Listing
*/
get_header();

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
if(isset($_GET['cat']) && $_GET['cat']!=''){
    $blog_args = array(

      'post_type' => 'post',
      'posts_per_page' => 6,
      'paged' => $paged,
      'tax_query' => array(
              array(
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $_GET['cat'],
                    ),
          )

    );
}else if(isset($_GET['tag']) && $_GET['tag']!=''){

  $blog_args = array(

      'post_type' => 'post',
      'posts_per_page' => 6,
      'paged' => $paged,
      'tax_query' => array(
              array(
                    'taxonomy' => 'post_tag',
                    'field'    => 'term_id',
                    'terms'    => $_GET['tag'],
                    ),
          )

    );

}else{
    $blog_args = array(

      'post_type' => 'post',
      'posts_per_page' => 6,
      'paged' => $paged,

    );
}

$blog_query = new WP_Query($blog_args);

$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => true, 
); 

$terms = get_terms('category', $args);

$tags = get_tags(array(
  'hide_empty' => true
));

$args = array(
   'numberposts' => 3,
   'post_type' => 'post',
   'post_status' => 'publish'
   
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

$count = $blog_query->post_count;
?>

<div class="bodypart">
         <div class="container">
            <div class="row two-panel price-body">
               <div class="col-md-8 col-sm-8">

               <?php if($blog_query->have_posts()): $i = 0;?>
                     
                  <div class="blog-slider">
                     <!-- Indicators -->
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                        <?php while($blog_query->have_posts()):$blog_query->the_post();?>
                           <?php $bannerimages = wp_get_attachment_image_src( get_post_meta(get_the_ID(),'banner_image',true),'full');

                           if($i == 0){
                              $addClass = 'active';
                           }else{
                              $addClass = '';
                           }
                           ?>
                           <div class="item <?php echo $addClass;?>">
                              <img src="<?php echo($bannerimages[0]!='')?$bannerimages[0]:'';?>" alt="Chania">
                              <div class="date">
                                 <span><?php echo get_the_date('d');?></span>
                                 <span><?php echo get_the_date('M');?></span>
                              </div>
                              <div class="carousel-caption">
                                 
                                    <h3><?php echo get_post_meta(get_the_ID(),'banner_heading',true);?></h3>
                                    <p><?php echo get_post_meta(get_the_ID(),'banner_description',true);?></p>
                                
                              </div>
                           </div>
                           <?php $i++; endwhile;wp_reset_query(); ?>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                          <?php 
                          for($j=0;$j<$count;$j++):
                            if($j == 0){
                              $dotClass = 'active';
                            }else{
                              $dotClass = '';
                            }
                          ?>
                           <li data-target="#myCarousel" data-slide-to="<?php echo $j;?>" class="<?php echo $dotClass;?>"></li>
                           
                         <?php endfor;?>
                        </ol>
                     </div>
                  </div>
                
               <?php endif;?>


                  <div class="blog-thumb">

                  <?php if($blog_query->have_posts()): $count = 1;?>
                        <?php while($blog_query->have_posts()):$blog_query->the_post();?>
                           <?php $blogimages = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'medium');?>
                            <?php if ($count%2 == 1)
                            {  
                                 echo "<div class='row'>";
                            }?>
                   
                        <div class="col-md-6 col-xs-6">
                            <div class="single-thumb-block">
                            <div class="blog-thumb-pic">
                                <img src="<?php echo ($blogimages[0]!= '') ? $blogimages[0] : ''; ?>" alt="img">
                                <div class="date">
                                    <span><?php echo get_the_date('d');?></span>
                                    <span><?php echo get_the_date('M');?></span>
                                </div>
                            </div>
                            <div class="row blog-thumb-info">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo get_the_title()?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul>
                                        <li>
                                        <?php echo get_avatar( get_the_author_meta( get_the_ID() ), 20 ); ?>
                                        </li>
                                        <li>
                                        <a href="https://www.facebook.com">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="https://twitter.com">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="https://www.youtube.com">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                            <h2>
                           
                              <?php echo(strlen(get_the_content()) > 46)? substr(get_the_content(),0,46). '...':get_the_content(); ;?>
                           
                            </h2> 
                            <a class="read-more" href="<?php echo get_permalink();?>">Read</a>  
                            </div>    
                        </div>
                        
                    
                     <?php
                        if ($count%2 == 0)
                         {
                             echo "</div>";
                         } 
                        ?>
                        <?php $count++ ; endwhile;wp_reset_query();?>
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
                                 'total' => $blog_query->max_num_pages,
                                 'prev_text'          => __($left_img),
                                 'next_text'          => __($right_img),
                              ) );
                              ?>
                           </div>
                        </div>
                     </div>
                      <?php else:?>
                        <p>Sorry No Results Found!!!</p>
                  <?php endif;?>

                  </div>  
               </div>
               <div class="col-md-4 col-sm-4">
                    <div class="right-menu">
                        <h2>Categories</h2>
                        <div class="right-main">
                        <?php if(is_array($terms) && count($terms) > 0){?>
                            <ul>
                            <?php foreach($terms as $term):?>
                                <li>
                                    <a href="<?php echo site_url();?>/blog-listing?cat=<?php echo $term->term_id;?>"><?php echo $term->name;?></a>
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
                                <?php $recentmages = wp_get_attachment_image_src( get_post_thumbnail_id($recent["ID"]));?>
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
                        <?php if(is_array($tags) && count($tags) > 0){

                          ?>
                           <?php foreach($tags as $tag):?>
                            <a href="<?php echo site_url();?>/blog-listing?tag=<?php echo $tag->term_id;?>"><?php echo $tag->name;?></a> 
                            <?php endforeach;?>
                        <?php } ?>
                        </div>
                    </div>
               </div>
            </div>
         </div>
        <?php echo get_template_part('template/site','bottom');?>
      </div>
<?php get_footer();?>