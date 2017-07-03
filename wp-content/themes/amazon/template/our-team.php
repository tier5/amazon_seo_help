<?php
/*
*Template Name: Our Team
*/
get_header();

$page_args = array(

   'post_type' => 'page',
   'page_id' => 14,
   'post_status' => 'publish'

);

$page_query = new WP_Query($page_args);

$team_args = array(

      'post_type' => 'team',
      'posts_per_page' => -1

);

$team_query = new WP_Query($team_args);

?>

<?php if($page_query->have_posts()):?>
      <?php while($page_query->have_posts()):$page_query->the_post();?>
         <?php $images = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full');?>
   <div class="our-team-banner">
         <img src="<?php echo($images[0]!='') ? $images[0]: get_template_directory_uri().'/assets/images/our-team-banner.jpg'; ?>" alt="img">
         <div class="our-team-banner-txt">
            <?php echo get_the_title();?>
         </div>
   </div>
<?php endwhile;wp_reset_query();?>
<?php endif;?>
      <div class="bodypart">
         <div class="container">
            <div class="row two-panel our-team align-center">
               <div class="col-md-12 col-sm-12">
               <?php if($page_query->have_posts()):?>
                     <?php while($page_query->have_posts()):$page_query->the_post();?>
                  <?php echo get_the_content();?>
                  <?php endwhile;wp_reset_query();?>
                  <?php endif;?>
               </div>
            </div>


            <?php if($team_query->have_posts()): $count = 1;?>
                  <?php while($team_query->have_posts()):$team_query->the_post();?>
                     <?php $teamimages = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full');?>
            <?php if ($count%3 == 1)
             {  
                  echo "<div class='row team-members'>";
             }?>
           
               <div class="col-md-4 col-sm-4 align-center">
                  <div class="our-team-pic">
                    <img src="<?php echo ($teamimages[0]!='')?  $teamimages[0] : get_template_directory_uri().'/assets/images/team-mem1.jpg'; ?>" alt="img">
                  </div>
                  <div class="team-member-name">
                     <h2><?php echo get_the_title();?></h2>
                  </div>
                  <div class="team-member-position">
                     <?php echo get_post_meta(get_the_ID(),'designation',true);?>
                  </div>
                  <p>
                     <?php echo get_the_content();?>
                  </p>
                  <div class="personal-social">
                     <ul>
                        <li><a href="<?php echo get_post_meta(get_the_ID(),'facebook_link',true);?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo get_post_meta(get_the_ID(),'twitter_link',true);?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo get_post_meta(get_the_ID(),'instagram_link',true);?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
               
             <?php
               if ($count%3 == 0)
                {
                    echo "</div>";
                } 
               ?>
            
               <?php $count++; endwhile;wp_reset_query();?>
               <?php if ($count%3 != 1) echo "</div>";?>
            <?php endif;?>

      </div>

         <?php echo get_template_part('template/site','bottom');?>
      </div>
<?php get_footer();?>