<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Amazon
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Amazon Seo Help</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/nice-select.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/chat.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-3 logo">
                <a href="<?php echo site_url();?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/amazon-seo-help.png" alt="img">
                </a>    
              </div>
              <div class="col-md-9 col-sm-9">
                <div class="row">
                  <div class="col-md-9 col-xs-12 col-sm-9">
                    <div class="box">
                      <select>
                        <option value="1">Some option</option>
                        <option value="2">Another option</option>
                        <option value="3">A disabled option</option>
                        <option value="4">Potato</option>
                      </select>

                      <div class="submit-holder">
                      <div class="submit-main">
                        <input class="search-btn" type="submit" value="" name="">
                      </div>  
                      </div>

                      <div class="search-txt-holder">
                        <div class="search-txt-holder-main">
                         <input class="search-txt" type="text" name="">
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12 col-sm-3 log-reg">
                  <a href="#">Login</a> I <a href="#">Register</a>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="social-block">
                            <ul>
                                <li><a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a></li>
                                <li><a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a></li>
                                <li><a href="#">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a></li>
                            </ul>  
                        </div>
                    </div>
                </div> 
                <div class="row">
               <?php  wp_nav_menu( array( 'theme_location' => 'my-custom-menu', 'container_class' => 'custom-menu-class' ) ); ?>
                </div>      
              </div>  
          </div>  
      </div>
    </header>