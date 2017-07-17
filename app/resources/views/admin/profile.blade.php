  @include('admin/header')
  @include('admin/sidebar')
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="page-name" style="border-bottom: 1px solid #ccc;">
        <h3>Profile <span>Preview</span></h3>
      </div>


    
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

    <div class="row">  
        <div class="col-md-12 col-sm-12">
          <div class="box-content">
            <h2>Account & Settings</h2>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#activity" aria-expanded="true">Account</a></li>
                  <li class=""><a data-toggle="tab" href="#timeline" aria-expanded="false">Password</a></li>
                  <li class=""><a data-toggle="tab" href="#settings" aria-expanded="false">Personal</a></li>
                </ul>
                <div class="tab-content">
                    <div id="activity" class="tab-pane active">
                        <div class="row">
                        <form class="profile" method="post" action="{{ route('/profileupdate') }}" enctype="multipart/form-data">
                            <div class="col-md-2 col-sm-2 align-center">
                                <div class="file-upload-area">
                                    <!-- <img src="images/boxed-bg.png" alt="img"> -->
                                    
                                    <img id="blah" src="{{ asset('imageupload/' . Auth::user()->profilePicture) }}" alt="your image" name="imageupload"/>

                                    <span class="file-cross">
                                        <a href="javascript:void(0)" id="hide">
                                          <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>  
                                    </span>
                                </div>
                                <!-- <a class="upload" href="#">Upload</a> -->
                                
                                <label class="fileContainer">
                                    Upload
                                    <input type='file' onchange="readURL(this);" name="imageupload"/>
                                </label>

                            </div>
                            <div class="col-md-10 col-sm-10">
                                @if ( session()->has('message') )
                                    <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                                @endif
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3">
                                            <label>First Name</label>
                                          </div>
                                          <div class="col-md-9 col-sm-9">
                                               <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                              <input class="form-control" type="text" name="firstname" value="{{Auth::user()->firstname}}">
                                          </div>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3">
                                            <label>Last Name</label>
                                          </div>
                                          <div class="col-md-9 col-sm-9">
                                              <input class="form-control" type="text" name="lastname" value="{{Auth::user()->lastname}}">
                                          </div>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3">
                                            <label>Email</label>
                                          </div>
                                          <div class="col-md-9 col-sm-9">
                                              <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}">

                                          </div>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3">
                                            <label>Email Alert</label>
                                          </div>
                                          <div class="col-md-9 col-sm-9">
                                              <label>
                                               <input type="checkbox" id="c1" name="cc" />
                                              <label for="c1"><span></span><!-- View my profile --></label>
                                              </label>
                                          </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                            Lorem ipsum sit amet dolar simply dummy text since 1926
                                            </div>  
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3">
                                            <label>Timezone</label>
                                          </div>
                                          <div class="col-md-9 col-sm-9">
                                              <select class="form-control">
                                                <option>PDT (Pacific time) GMT - 8.00</option>
                                              </select>
                                          </div>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3">
                                            <label>Hide profile page</label>
                                          </div>
                                          <div class="col-md-9 col-sm-9">
                                              <label>
                                               <input type="checkbox" id="c2" name="cc" />
                                              <label for="c2"><span></span>View my profile</label>
                                              </label>
                                          </div>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <input class="btn btn-default" type="submit" value="Save" name="">
                                            </div>
                                        </div>  
                                    </div>  

                                </form>
                            </div>
                        </div>  
                    </div> 
                    <div id="timeline" class="tab-pane">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <form method="post" action="{{ route('/passwordupdate') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="editid" value="{{Auth::user()->id}}">
                                  <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4 col-sm-4">
                                            <label>Password</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">

                                              <input class="form-control" type="password" value="{{Auth::user()->password}}" name="password">
                                          </div>
                                        </div>  
                                  </div>
                                  <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4 col-sm-4">
                                            <label>Re-type Password</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                              <input class="form-control" type="password" name="password2">
                                          </div>
                                        </div>  
                                  </div>
                                  <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8 col-sm-offset-4">
                                                <input class="btn btn-default" type="submit" value="Save" name="">

                                            </div>
                                        </div>
                                  </div>      

                                </form>
                            </div>
                        </div>  
                    </div>
                    <div id="settings" class="tab-pane">

                    Personal

                    </div>  

                </div>

            </div>



          </div>  
        </div>

    </div>  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="fa fa-envelope" aria-hidden="true"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo asset('/admin/js/jquery-3.1.1.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo asset('/admin/js/bootstrap.min.js')?>"></script>
<script src="<?php echo asset('/admin/js/bootstrap.min.js')?>"></script>
<script src="<?php echo asset('/admin/js/slimScroll/jquery.slimscroll.min.js')?>"></script>

<script type="text/javascript">
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    jQuery('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(90);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script>
jQuery(document).ready(function($){
    $("#hide").click(function(){
       alert('yty');
         $('#blah').attr('src', '#');
        //$("#blah").hide();
    });
    // $("#show").click(function(){
    //     $("p").show();
    // });
});
</script>


</body>
</html>
