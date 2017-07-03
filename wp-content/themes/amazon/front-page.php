<?php
/*
*Template Name: Home Page Template
*/
get_header();

$homeslider_args = array(
   'post_type' => 'home-slider',
   'posts_per_page' => -1
);
$homeslider_query = new WP_Query($homeslider_args);

?>
<div class="banner-slider">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
            <?php if($homeslider_query->have_posts()): $i = 0;?>
               <?php while($homeslider_query->have_posts()):$homeslider_query->the_post();
               $sliderimages = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'full');
               ?>
                  <?php if($i == 0){
                     $addClass = 'active';
                     }else{
                     $addClass = '';
                     }
                   ?>
               <div class="item <?php echo $addClass;?>">
                  <img src="<?php echo($sliderimages[0]!='') ? $sliderimages[0]:'';?>" alt="Chania" width="460" height="345">
                  <div class="carousel-caption">
                     <h3><?php echo get_the_title();?></h3>
                     <h2><?php echo get_the_content();?></h2>
                     <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
                  </div>
               </div>

                 
            <?php $i++; endwhile;wp_reset_query();?>
            <?php endif;?>
            </div>
         </div>
</div>


      <div class="bodypart">
         <div class="container-fluid">
            <div class="row four-block">
               <div class="col-md-3 col-sm-3">
                  <div class="block welcome-sec">
                     <?php dynamic_sidebar('sidebar-4'); ?>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="block">
                     <?php dynamic_sidebar('sidebar-5'); ?>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="block">
                     <?php dynamic_sidebar('sidebar-6'); ?>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <?php dynamic_sidebar('sidebar-7'); ?>
               </div>
            </div>
         </div>
         <?php echo get_template_part('template/site','bottom');?>
      </div>
<?php get_footer();
