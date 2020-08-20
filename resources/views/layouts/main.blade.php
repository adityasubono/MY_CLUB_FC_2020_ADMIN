<!DOCTYPE html>
<html lang="en">
<!-- Head -->
@include('includes.head')
<!-- End Head -->
<body>
<!-- Navbar -->
@include('includes.head')
<!-- End Navbar -->
@include('includes.navbar')
<!-- End Navbar -->
<!--Sub Navbar-->
@include('includes.subnavbar')
<!--End Subnavbar-->
<div class="main">
    <div class="main-inner">
        <div class="container">

            @yield('container-fluid')


        </div>
        <!-- /container -->
    </div>
    <!-- /main-inner -->
</div>
<!-- /main -->
<!-- Footer -->
@include('includes.footer')
<!-- End footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery-1.7.2.min.js"></script>
<script src="../assets/js/excanvas.min.js"></script>
<script src="../assets/js/chart.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

<script src="js/base.js"></script>
</body>
</html>
