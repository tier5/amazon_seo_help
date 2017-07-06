<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amazon Seo Help</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/bootstrap.min.css" type="text/css"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
<!--   <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/AdminLTE.min.css" type="text/css"> 
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/all.css" type="text/css"> 
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/fullcalendar.min.css" type="text/css"> 
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/fullcalendar.print.min.css" type="text/css" media='print'> 
      


 <!--  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/animate.css" type="text/css"> 
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/style.css" type="text/css"> 
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/fullcalendar.min.css" type="text/css"> 
  <link rel="stylesheet" href="{{ url('/') }}/admin/css/fullcalendar.print.min.css" media='print' type="text/css"> 
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" >
      $(document).ready(function() {
        //$.noConflict();  
        var dataTable = $('#employee-grid').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax":{
            url :"{{ URL::to('/users') }}", // json datasource 
            type: "post",  // method  , by default get
            data: {"_token": "{{ csrf_token() }}"},
            error: function(){  // error handling
              $(".employee-grid-error").html("");
              $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              $("#employee-grid_processing").css("display","none");
              
            }
          }
        } );
      } );
    </script>   

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
  
  @include('layouts.header')
  
  @include('layouts.sidebar')

      @yield('layouts.contents')

  @include('layouts.control-sidebar')

</div>
<!-- ./wrapper -->


    @yield('layouts.scripts')
<!-- Bootstrap 3.3.7 -->
<!-- jQuery 3.1.1 -->
<script src='{!! asset("admin/js/bootstrap.min.js") !!}'></script>
<script src='{!! asset("admin/js/adminlte.js") !!}'></script>
<script src='{!! asset("admin/js/slimScroll/jquery.slimscroll.min.js") !!}'></script>
<script src='{!! asset("admin/js/jquery-3.1.1.min.js") !!}'></script>
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


<!-- <script src='../lib/jquery.min.js'></script> -->
<script src='{!! asset("admin/js/moment.min.js") !!}'></script>
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
