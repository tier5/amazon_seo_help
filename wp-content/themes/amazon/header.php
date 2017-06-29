<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Amazon Seo Help</title>
      <!-- Bootstrap -->
      <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri();?>/assets/css/chat.css" rel="stylesheet">
      <!-- <link href="css/styles.css" rel="stylesheet"> -->
      <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <header>
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-2">
                  <div class="logo">
                     <a href="index.html">
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/amazon-seo-help.png" alt="img">
                     </a>
                  </div>
               </div>
               <div class="col-md-10 col-sm-10">
                  <div class="row">
                     <div class="col-md-9 col-xs-12 col-sm-9">
                        <div class="box">
                           <!-- <select>
                              <option value="1">Some option</option>
                              <option value="2">Another option</option>
                              <option value="3">A disabled option</option>
                              <option value="4">Potato</option>
                              </select> -->
                           <div class="submit-holder">
                              <div class="submit-main">
                                 <input class="search-btn" type="submit" value="">
                              </div>
                           </div>
                           <div class="search-txt-holder">
                              <div class="search-txt-holder-main">
                                 <input class="search-txt" type="text">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-xs-12 col-sm-3 log-reg">
                        <a href="#" data-toggle="modal" data-target="#myModal">Login</a> I 
                        <a href="#" data-toggle="modal" data-target="#signupModal">Register</a>
                        <div class="social-block">
                           <ul>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-twitter" aria-hidden="true"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-youtube" aria-hidden="true"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="navigation-area">
                     <nav role="navigation" class="navbar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                           <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </button>
                        </div>
                        <!-- Collection of nav links and other content for toggling -->

                        <div id="navbarCollapse" class="collapse navbar-collapse">
                           <!-- <ul class="nav navbar-nav navbar-right">
                              <li class="active"><a href="<?php site_url();?>">Home</a></li>
                              <li><a href="amazon-seo.html">Amazon Seo</a></li>
                              <li><a href="amazon-ppc.html">Amazon PPC</a></li>
                              <li><a href="<?php echo site_url();?>/template-website">Amazon Template Website</a></li>
                              <li><a href="<?php echo site_url();?>/project">Projects</a></li>
                              <li><a href="<?php echo site_url();?>/our-team">Our Team</a></li>
                           </ul> -->
                           <?php wp_nav_menu( array( 'theme_location' => 'top' ,'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',) ); ?>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>

         </div>
      </header>

	<div class="site-content-contain">
		<div id="content" class="site-content">
