<!DOCTYPE html>
<html lang="en">

<!--Head-->
@include('includes.head')
<!--End Head-->
<body>

<!--Navbar-->
@include('includes.navbar_login')
<!--End Navbar-->


<div class="account-container">

    <div class="content clearfix">

        @yield('account-container')


    </div> <!-- /content -->

</div> <!-- /account-container -->





<script src="../assets/js/jquery-1.7.2.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<script src="../assets/js/signin.js"></script>

</body>

</html>
