<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> KOZMO | </title>

    <!-- Bootstrap -->
    <link href="{{asset('KZM/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('KZM/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('KZM/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('KZM/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('KZM/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('KZM/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('KZM/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('KZM/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- Summernote Editor -->
    @yield('styles')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('Kozmo.home')}}" class="site_title"><i class="fa fa-paw"></i>
                        <span>KOZMO</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic"></div>
                    <div style="margin-left:35px;text-align: center" class="profile_info">

                        <span>Welcome,</span>
                        <h2>{{Illuminate\Support\Facades\Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li>
                                <a href="{{route('Kozmo.home')}}"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li><a><i class="fa fa-edit"></i>KOZMETİK<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a><i class="fa fa-edit"></i> Üst Kategori <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route('Kozmo.up_category.index')}}">Üst Kategori Listesi</a></li>
                                            <li><a href="{{route('Kozmo.up_category.create')}}">Üst Kategori Ekleme</a></li>
                                        </ul>
                                    <li><a><i class="fa fa-edit"></i>  Kategori <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route('Kozmo.category.index')}}"> Kategori Listesi</a></li>
                                            <li><a href="{{route('Kozmo.category.create')}}"> Kategori Ekleme</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Ürünler <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route('Kozmo.product.index')}}">Ürünler Listesi</a></li>
                                            <li><a href="{{route('Kozmo.product.create')}}">Ürünler Ekleme</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    </li>
                                </ul>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                {{Illuminate\Support\Facades\Auth::user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{route('log_out')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right"></div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('KZM/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('KZM/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('KZM/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('KZM/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('KZM/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('KZM/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('KZM/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('KZM/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('KZM/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('KZM/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('KZM/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('KZM/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('KZM/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('KZM/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('KZM/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('KZM/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('KZM/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('KZM/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('KZM/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('KZM/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('KZM/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('KZM/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('KZM/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('KZM/build/js/custom.min.js')}}"></script>
<!-- Summernote Editor -->
@yield('scripts')
</body>
</html>
