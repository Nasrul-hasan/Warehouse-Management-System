<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warehouse Managment System</title>
     
     
    <!-- Bootstrap -->
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/css/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('/css/bootstrap-progressbar-3.3.4.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('/css/jqvmap.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('/css/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{url('/css/custom.css')}}" rel="stylesheet">
    
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <div class="col-md-3 left_col">
    <div class="left_col scroll-view" >
        <div class="navbar nav_title" style="border: 10%;">
            <a href="../admin/dashboard.php" class="site_title" style="background-color:blue; display: flex; align-items: center;">
                <i class="fa fa-bank" style="margin-right: 10px;"></i> <!-- Adjust the margin as needed -->
                <span><marquee behavior="" direction="">WAREHOUSE MANAGEMENT SYSTEM</marquee></span>
            </a>
        </div>
        

       
        

        <div class="clearfix"></div>

        <!-- menu profile quick info -->

        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        @include('backend.partials.sitebar')
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->

        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
@include('backend.partials.header')
<!-- /top navigation -->        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main" style="background-color:darkslategray">
            <!-- /top tiles -->



                        @yield('content')

                        </div>
                        <!-- Start to do list -->

                        <!-- End to do list -->

                        <!-- start of weather widget -->

                        <!-- end of weather widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pull-right">
                            POS System for <a href="#" class="footer-link">Fashion Fiber Ltd.</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </footer>
                <!-- /footer content include -->
    </div>
</div>

<!-- jQuery -->
<script src="{{url('/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/js/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('/js/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{url('/js/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{url('/js/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('/js/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('/js/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('/js/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('/js/jquery.flot.js')}}"></script>
<script src="{{url('/js/jquery.flot.pie.js')}}"></script>
<script src="{{url('/js/jquery.flot.time.js')}}"></script>
<script src="{{url('/js/jquery.flot.stack.js')}}"></script>
<script src="{{url('/js/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('/js/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('/js/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('/js/jquery.vmap.min.js')}}"></script>
<script src="{{url('/js/jquery.vmap.world.js')}}"></script>
<script src="{{url('/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('/js/moment.min.js')}}"></script>
<script src="{{url('/js/daterangepicker.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{url('/js/custom.min.js')}}"></script>

</body>
</html>

<style>
.pull-right{
        margin: 0 0 20px;
        padding: 0;
        color: blue;
        text-align: center;
    }
    .pull-right a{
        margin: 0 0 30px;
        padding: 0;
        color: blue;
        text-align: center;
    }
/* .footer{
     color: red;
} */
footer {
    background-color:cadetblue;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
}

.footer-link {
    color: black;
    text-decoration: none;
}

.footer-link:hover {
    text-decoration: underline;
}

</style>


