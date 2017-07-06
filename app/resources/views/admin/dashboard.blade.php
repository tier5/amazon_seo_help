@extends('layouts.master')
@section('layouts.content')
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
@endsection