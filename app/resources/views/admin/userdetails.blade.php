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
          <a href="{{ route('/user') }}">
            <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
          </a>
        </li> 
        <li class="active bounceInLeft animated">
          <a href="{{ route('/package') }}">
            <i class="fa fa-users" aria-hidden="true"></i> <span>Package</span>
          </a>
        </li>   
        <li class="treeview bounceInLeft animated">
          <a href="repots.html">
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
        <h3>User Details </h3>
      </div>



    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

    <div class="row">  
        <div class="col-md-12 col-sm-12">
           <div class="box-content">
              <div class="user-head">
                  <div class="row">
                      <div class="col-md-2 col-md-2">
                        <a class="btn btn-flat" href="{{ route('/userpanel') }}">User Panel</a>
                      </div>
                      <div class="col-md-3 col-md-3">
                        <select class="form-control">
                            <option>All</option>
                        </select>
                      </div>
                      <div class="col-md-5 col-md-5">
                          <input placeholder="Enter name or email" class="form-control" type="text" name="">
                      </div>
                      <div class="col-md-2 col-md-2">
                        <button class="btn btn-default">Add New User</button>
                      </div>

                  </div>
              </div>
              <div class="box-main">
                <div class="table-responsive user-table">
                  <table class="table">
                      <tr>
                          <th>User ID</th>
                          <th>User status</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Select Packege</th>
                          <th>Seller Username</th>
                          <th>Seller Password</th>
                          <th>Product Details</th>
                          <th>Targeted Keyword</th>
                      </tr>
                      <tr>
                          <td>#001</td>
                          <td>
                          <select class="form-control">
                              <option>Select Status</option>
                              <option>Approve</option>
                              <option>Activate</option>
                              <option>Deactivate</option>
                          </select>
                          </td>
                          <td>user@user.com</td>
                          <td>123456</td>
                          <td>SEO Package</td>
                          <td>Username</td>
                          <td>Password</td>
                          <td>www.google.com</td>
                          <td>Lorem ipsum, lorem, doler, sit amet, Lorem ipsum, lorem, doler, sit amet,</td>

                      </tr>
                      <tr>
                          <td>#001</td>
                          <td>
                          <select class="form-control">
                              <option>Select Status</option>
                              <option>Approve</option>
                              <option>Activate</option>
                              <option>Deactivate</option>
                          </select>
                          </td>
                          <td>user@user.com</td>
                          <td>123456</td>
                          <td>SEO Package</td>
                          <td>Username</td>
                          <td>Password</td>
                          <td>www.google.com</td>
                          <td>Lorem ipsum, lorem, doler, sit amet, Lorem ipsum, lorem, doler, sit amet,</td>

                      </tr>
                      <tr>
                          <td>#001</td>
                          <td>
                          <select class="form-control">
                              <option>Select Status</option>
                              <option>Approve</option>
                              <option>Activate</option>
                              <option>Deactivate</option>
                          </select>
                          </td>
                          <td>user@user.com</td>
                          <td>123456</td>
                          <td>SEO Package</td>
                          <td>Username</td>
                          <td>Password</td>
                          <td>www.google.com</td>
                          <td>Lorem ipsum, lorem, doler, sit amet, Lorem ipsum, lorem, doler, sit amet,</td>

                      </tr>
                      <tr>
                          <td>#001</td>
                          <td>
                          <select class="form-control">
                              <option>Select Status</option>
                              <option>Approve</option>
                              <option>Activate</option>
                              <option>Deactivate</option>
                          </select>
                          </td>
                          <td>user@user.com</td>
                          <td>123456</td>
                          <td>SEO Package</td>
                          <td>Username</td>
                          <td>Password</td>
                          <td>www.google.com</td>
                          <td>Lorem ipsum, lorem, doler, sit amet, Lorem ipsum, lorem, doler, sit amet,</td>

                      </tr>
                      <tr>
                          <td>#001</td>
                          <td>
                          <select class="form-control">
                              <option>Select Status</option>
                              <option>Approve</option>
                              <option>Activate</option>
                              <option>Deactivate</option>
                          </select>
                          </td>
                          <td>user@user.com</td>
                          <td>123456</td>
                          <td>SEO Package</td>
                          <td>Username</td>
                          <td>Password</td>
                          <td>www.google.com</td>
                          <td>Lorem ipsum, lorem, doler, sit amet, Lorem ipsum, lorem, doler, sit amet,</td>

                      </tr>
                      <tr>
                          <td>#001</td>
                          <td>
                          <select class="form-control">
                              <option>Select Status</option>
                              <option>Approve</option>
                              <option>Activate</option>
                              <option>Deactivate</option>
                          </select>
                          </td>
                          <td>user@user.com</td>
                          <td>123456</td>
                          <td>SEO Package</td>
                          <td>Username</td>
                          <td>Password</td>
                          <td>www.google.com</td>
                          <td>Lorem ipsum, lorem, doler, sit amet, Lorem ipsum, lorem, doler, sit amet,</td>

                      </tr>    
                  </table>
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
<script src="<?php echo asset('admin/js/jquery-3.1.1.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo asset('admin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo asset('admin/js/adminlte.js')?>"></script>
<script src="<?php echo asset('admin/js/jquery.slimscroll.min.js')?>"></script>



</body>
</html>
