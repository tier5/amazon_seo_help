<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Amazon Seo Help</title>
      <!-- Bootstrap -->
     
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css"> 
      <link rel="stylesheet" href="<?php echo asset('css/nice-select.css')?>" type="text/css"> 
      <link rel="stylesheet" href="<?php echo asset('css/font-awesome.css')?>" type="text/css"> 
      <link rel="stylesheet" href="<?php echo asset('css/chat.css')?>" type="text/css"> 
      <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>
         $(document).ready(function() {
            $("#sign-in").click(function() {
              alert( "Handler for .click() called." );
              var email = $("#email").val();
              var password = $("#password").val();
              var token = $("#token").val();
              $.post('{{ URL::to('/login') }}', { email: email, password: password, _token: token}, function(result){
                      //alert(JSON.stringify(result));
                      //alert(result.message);
                      if(result.errors == undefined && result.message == undefined){
                        window.location="{{URL::to('dashboard')}}";
                      }else{  
                            $('.error_msg').html(result.message);
                            $('.error_email').html(result.errors.email);
                            $('.error_pass').html(result.errors.password);
                      }

                      console.log(result);
                  });
            });
         });
      </script>
   </head>
   <body>
      <header>
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-2">
                  <div class="logo">
                     <a href="index.html">
                     <img src="img/amazon-seo-help.png" alt="img">
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
                        <a href="#" data-toggle="modal" data-target="#myModal">Login</a><!-- I 
                        <a href="#" data-toggle="modal" data-target="#signupModal">Register</a> -->
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
                           <ul class="nav navbar-nav navbar-right">
                              <?php if(Request::getPathInfo() == '/'){ ?>
                              <li class="active"><a href="{{ route('/') }}">Home</a></li>
                              <?php }else{ ?>
                              <li ><a href="{{ route('/') }}">Home</a></li>
                              <?php } ?>
                              <li><a href="amazon-seo.html">Amazon Seo</a></li>
                              <?php if(Request::getPathInfo() == '/amazonppc'){ ?>
                              <li class="active"><a href="{{ route('/amazonppc') }}">Amazon PPC</a></li>
                              <?php }else{ ?>
                              <li><a href="{{ route('/amazonppc') }}">Amazon PPC</a></li>
                              <?php } ?>
                              <li><a href="template.html">Amazon Template Website</a></li>
                              <li><a href="project.html">Projects</a></li>
                              <li><a href="our-team.html">Our Team</a></li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>

         </div>
      </header>