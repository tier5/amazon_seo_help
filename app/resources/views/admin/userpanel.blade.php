@include('admin/header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image rollIn animated">
          <img src="images/user8-128x128.jpg" class="img-circle" alt="User Image">
          <span><i class="fa fa-circle text-yellow"></i></span>
        </div>
        <div class="pull-left info zoomIn animated">
          <p>Alexander Pierce</p>
        
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="bounceInLeft animated">
          <a href="{{ route('/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active bounceInLeft animated">
          <a href="user.html">
            <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
          </a>
        </li> 
        <li class="active bounceInLeft animated">
          <a href="{{ route('/package') }}">
            <i class="fa fa-users" aria-hidden="true"></i> <span>Package</span>
          </a>
        </li>  
        <li class="treeview bounceInLeft animated">
          <a href="reports.html">
            <i class="fa fa-area-chart" aria-hidden="true"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="reports.html"><i class="fa fa-circle-o"></i> Report</a></li>
            <li><a href="seo-reports.html"><i class="fa fa-circle-o"></i> SEO Reports</a></li>
            <li><a href="ppc-reports.html"><i class="fa fa-circle-o"></i> PPC Report</a></li>
            
          </ul>
        </li>
        <li class="bounceInLeft animated">
          <a href="inbox.html">
            <i class="fa fa-envelope" aria-hidden="true"></i> <span>Inbox</span>
          </a>
        </li>
        <li class="bounceInLeft animated">
          <a href="{{ route('/profile') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
             <span>Profile</span>
          </a>
        </li>  
      </ul>
</section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="page-name" style="border-bottom: 1px solid #ccc;">
        <h3>User </h3>
      </div>



    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

    <div class="row">  
        <div class="col-md-12 col-sm-12">
           <div class="box-content">
              
              <div class="box-main">
                <div class="table-responsive">
                  <table class="table" id="myRadioGroup">
                     <tr>
                        <td width="200px">Package Selection & Purchase</td>
                        <td>
                        <input type="radio" name="cars" checked="checked" value="2"  /> <span class="seo-tag">SEO</span> 
                        <input type="radio" name="cars" value="3" /> 
                        <span class="ppc-tag">PPC</span>
                        </td> 
                        
                     </tr> 
                     <tr>
                        <td colspan="2">
                          <div id="Cars2" class="desc">
                              <table class="table">
                                <tr>
                                  <td><span class="count">1</span> <input type="radio" name="package"> BRONZE PACKAGE</td>
                                  <td><span class="count">2 </span><input type="radio" name="package"> SILVER PACKAGE</td>
                                  <td><span class="count">3 </span><input type="radio" name="package"> GOLD PACKAGE</td>
                                </tr>  
                              </table>
                          </div>
                          <div id="Cars3" class="desc" style="display: none;">
                              
                              <table class="table">
                                <tr>
                                  <td><span class="count">1</span> <input type="radio" name="package"> SILVER PACKAGE</td>
                                  <td><span class="count">2 </span><input type="radio" name="package"> GOLD PACKAGE</td>
                                  <td><span class="count">3 </span><input type="radio" name="package"> PLATINUM PACKAGE</td>
                                </tr>  
                              </table>


                          </div>
                        </td>  
                     </tr>

                  </table>
                    
                </div> 

                <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <h3>Amazon Seo Profile</h3>
                    <form id="amazonseoprofile">  
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <label>User name</label>
                                  <input class="form-control" type="text" name="">
                              </div>
                          </div>  
                      </div>  
                      <div class="row">
                          <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="text" name="">
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                  <label>Password</label>
                                  <input class="form-control" type="text" name="">
                              </div>
                          </div>  
                      </div> 
                      <div class="row">
                           <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                  <label>New Password</label>
                                  <input class="form-control" type="text" name="">
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                  <label>Retype Password</label>
                                  <input class="form-control" type="text" name="">
                              </div>
                           </div>
                      </div>
                      <!-- <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <input class="btn btn-default" type="submit" value="Submit" name="">
                              </div>  
                          </div>  
                      </div>

                  </form> -->

                  </div>
                </div>  

                <div class="row">
                <div class="col-md-12 col-sm-12">
                      <h3>Amazon Seller Account Details</h3>
                  <!-- <form id="amazonselleraccountdtls">    
                       <div class="row">
                        <div class="col-md-12 col-sm-12">  
                          <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                              <label>Password</label>
                              <input class="form-control" type="password" name="">
                          </div> 
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                              <label>Re-type Password</label>
                              <input class="form-control" type="password" name="">
                          </div> 
                        </div>
                      </div> -->
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <div class="form-group">
                              <label>Amazon Region Selection</label>
                              <select class="form-control">
                                  <option>US</option>
                                  <option>UK</option>
                                  <option>CA</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <label>Products Details for SEO</label>
                                  <input placeholder="Ex. product url" class="form-control" type="text" name="">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <label>Targeted Keywords</label>
                                  <textarea class="form-control"></textarea>

                              </div>
                          </div>  
                      </div> 
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                              <div class="form-group">
                                  <input class="btn btn-default" type="submit" name="submit" value="Submit">
                              </div>
                          </div>  
                      </div>
                  </form> 
                </div>
                </div>

                  <div class="clearfix"></div>  
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
<script src="<?php echo asset('admin/js/jquery-3.1.1.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo asset('admin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo asset('admin/js/adminlte.js')?>"></script>
<script src="<?php echo asset('admin/js/jquery.slimscroll.min.js')?>"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("input[name$='cars']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
    });
});
   
</script>


</body>
</html>
