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
