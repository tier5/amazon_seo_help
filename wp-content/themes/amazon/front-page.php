<?php
/*
*Template Name: Home Page Template
*/
get_header();
?>
<div class="banner-slider">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/banner1.jpg" alt="Chania" width="460" height="345">
                  <div class="carousel-caption">
                     <h3>Assured Sales on Amazon</h3>
                     <h2>Amazon product Optimization</h2>
                     <!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
                  </div>
               </div>
               <div class="item">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/banner1.jpg" alt="Chania" width="460" height="345">
                  <div class="carousel-caption">
                     <h3>Assured Sales on Amazon</h3>
                     <h2>Amazon product Optimization</h2>
                  </div>
               </div>
               <div class="item">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/banner1.jpg" alt="Flower" width="460" height="345">
                  <div class="carousel-caption">
                     <h3>Amazon product Optimization</h3>
                     <h2>Amazon product Optimization</h2>
                  </div>
               </div>
               <div class="item">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/banner1.jpg" alt="Flower" width="460" height="345">
                  <div class="carousel-caption">
                     <h3>Assured Sales on Amazon</h3>
                     <h2>Amazon product Optimization</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bodypart">
         <div class="container-fluid">
            <div class="row four-block">
               <div class="col-md-3 col-sm-3">
                  <div class="block welcome-sec">
                     <h2>Welcome</h2>
                     <p>Create your Amazon help account
                        <br> Register Securely
                     <p>
                        <!-- <input class="btn sign-in" type="submit" value="Sign in securely" name=""> -->
                        <button type="button" class="btn sign-in" data-toggle="modal" data-target="#myModal">Sign in securely</button>
                     <div class="block-footer">
                        New to Amazon? 
                        

                        <a data-target="#signupModal" data-toggle="modal" href="#">Start here</a>

                        

                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="block">
                     <h2 class="heading">Amazon<br>Product Optimization</h2>
                     <div class="block-main">
                        <ul>
                           <li>
                              <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              </span> Lorem Ipsum is simply dummy text of the printing
                           </li>
                           <li>
                              <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              </span> Lorem Ipsum is simply dummy text
                           </li>
                           <li>
                              <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              </span> Lorem Ipsum is simply dummy text
                           </li>
                           <li>
                              <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              </span> Lorem Ipsum is simply dummy text of the printing
                           </li>
                        </ul>
                     </div>
                     <div class="block-footer">
                        <a href="#">Lorem ipsum dolar</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="block">
                     <h2 class="heading">Pay Per Click</h2>
                     <div class="blog-pic">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/briefcase-full-of-cash.jpg" alt="img">
                     </div>
                     <div class="block-main align-center">
                        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolar
                        </p>
                        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolar
                        </p>
                        <p><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Lorem ipsum dolar
                        </p>
                     </div>
                     <div class="block-footer">
                        <a href="#">Lorem ipsum dolar</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="small-block review-block align-center">
                     <h2 class="heading">Amazon seo optimization packages</h2>
                     <a class="btn join-now" href="amazon-seo.html">Purchase Now</a>
                     <!-- <p>Get Free Reviews</p> -->
                  </div>
                  <div class="small-block template-block">
                     <h2 class="heading">Amazon Template Website</h2>
                     <a class="btn tem-btn" href="template.html">Get Template</a>
                     <p>Connect your template website with amazon (bigcommerce, shopify amazon api)</p>
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
<?php get_footer();
