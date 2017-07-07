@include('admin/header')

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image rollIn animated">
          <img src="../admin/images/user8-128x128.jpg" class="img-circle" alt="User Image">
          <span><i class="fa fa-circle text-yellow"></i></span>
        </div>
        <div class="pull-left info zoomIn animated">
          <p>Alexander Pierce</p>
        
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="bounceInLeft active animated">
          <a href="{{ route('/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="bounceInLeft animated">
          <a href="{{ route('/user') }}">
            <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
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
        <h3>Dashboard <span>Preview</span></h3>
      </div>



    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

    <div class="row">  
        <div class="col-md-12 col-sm-12">
          <div class="box-content">
            <h2>Dashboard</h2>
            <section class="content">
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>New</h3>

                    <p>Product Details</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>Report</h3>

                    <p>Creation</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="reports.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>User</h3>

                    <p>Details</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="user.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>Mail</h3>

                    <p>Box</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <a href="inbox.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
              <div class="row">

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-gerua">
                  <div class="inner">
                    <h3>SEO</h3>

                    <p>Package</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                  </div>
                  <a href="seo.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purpel">
                  <div class="inner">
                    <h3>PPC</h3>

                    <p>Package</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                  </div>
                  <a href="ppc-reports.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-greeen">
                  <div class="inner">
                    <h3>Notice</h3>

                    <p>Creator</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                  </div>
                  <a href="notice.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-safron">
                  <div class="inner">
                    <h3>Special</h3>

                    <p>Offer</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <a href="special.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>


              </div>



              <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <h2>Chart Graph</h2>
                      <div id="chart_div" style="width: 100%; height: 500px;">
                        
                      </div>
                  </div>  
              </div>



              <div id='calendar'></div>
            </section>  
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
<script src='{!! asset("admin/js/jquery-3.1.1.min.js") !!}'></script>
<!-- Bootstrap 3.3.7 -->
<script src='{!! asset("admin/js/bootstrap.min.js") !!}'></script>
<script src='{!! asset("admin/js/adminlte.min.js") !!}'></script>
<script src='{!! asset("admin/js/slimScroll/jquery.slimscroll.min.js") !!}'></script>

<script type="text/javascript">
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(90);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#blah").hide();
    });
    // $("#show").click(function(){
    //     $("p").show();
    // });
});
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script src='{!! asset("admin/js/moment.min.js") !!}'></script>
<!-- <script src='../lib/jquery.min.js'></script> -->
<script src='{!! asset("admin/js/fullcalendar.min.js") !!}'></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: '2017-05-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2017-05-01'
        },
        {
          title: 'Long Event',
          start: '2017-05-07',
          end: '2017-05-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2017-05-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2017-05-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2017-05-11',
          end: '2017-05-13'
        },
        {
          title: 'Meeting',
          start: '2017-05-12T10:30:00',
          end: '2017-05-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2017-05-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2017-05-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2017-05-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2017-05-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2017-05-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2017-05-28'
        }
      ]
    });
    
  });

</script>

</body>
</html>
