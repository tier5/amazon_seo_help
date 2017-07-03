<?php
/*
*Template Name: Project
*/
get_header();

$project_args = array(
   'post_type' => 'project',
   'posts_per_page' => -1
);

$project_query = new WP_Query($project_args);
?>
<div class="bodypart">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="project-top-block">
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <h3>Lorem ipsum is simply dummy text since 1942</h3>
                           <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                           </p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                           <a href="#" class="new-project">New Projects</a>
                           <a href="#" class="new-button">Lorem Ipsum</a>
                        </div>
                     </div>
                  </div>

                  <?php if($project_query->have_posts()):?>
                     <?php while($project_query->have_posts()):$project_query->the_post();?>
                           <?php $image = $images = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),'medium');?>
                           <div class="project-block">
                              <div class="project-pic">
                                 <a href="<?php echo get_permalink();?>"><img src="<?php echo ($image[0] !='') ? $image[0] : ''; ?>" alt="img"></a>
                              </div>
                              <div class="project-info-txt">
                                 <h2><?php echo get_the_title();?></h2>
                                 <p>
                                    <?php echo get_the_content();?>
                                 </p>
                                 <div class="project-footer">
                                    <ul>
                                       <li><a class="delete-project" href="<?php echo get_permalink();?>">Read This</a></li>
                                      <!--  <li><a class="create-project" href="#">Create template from this project</a></li> -->
                                    </ul>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                     <?php endwhile;wp_reset_query();?>
                  <?php endif;?>
                  


               </div>
            </div>
         </div>
          <?php echo get_template_part('template/site','bottom');?>
      </div>
<?php get_footer();?>