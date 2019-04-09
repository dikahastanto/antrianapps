<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Antrian Apss</title>
    <link href="{{url('css/mycss.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('css/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{url('bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker-->
    <link href="{{url('bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('home')}}" class="site_title"><img src="{{url('img/queue.png')}}" width="40"> <span>ANTRIAN APPS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span></span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home </span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('input_data_dokter')}}">Input Data Dokter</a></li>
                      <li><a href="{{route('form_input_layanan')}}">Tambah Layanan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('tampil_all')}}">Data Antrian</a></li>
                      <li><a href="{{route('tampil_dokter')}}">Data Dokter</a></li>
                      <li><a href="{{route('tampil_layanan')}}">Data Layanan</a></li>
                    </ul>
                  </li>
                  <li><a ><i class="fa fa-bar-chart-o"></i> Analisis Waktu Antrian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('analisaall')}}">Analisa Waktu Keseluruhan</a></li>
                      <li><a href="{{route('analisa')}}">Analisa Waktu Per Layanan</a></li>
                    </ul>
                  </li>
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
                    {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        @yield('content')

<!-- footer content -->
<footer>
  <div class="pull-right">
    Dika Hastanto - SISTEM INFORMASI 2019
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{url('jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('nprogress/nprogress.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('Flot/jquery.flot.js')}}"></script>
<script src="{{url('Flot/jquery.flot.pie.js')}}"></script>
<script src="{{url('Flot/jquery.flot.time.js')}}"></script>
<script src="{{url('Flot/jquery.flot.stack.js')}}"></script>
<script src="{{url('Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{url('jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker-->
<script src="{{url('moment/min/moment.min.js')}}"></script>
<script src="{{url('bootstrap-daterangepicker/daterangepicker.js')}}"></script>-->

<!-- Custom Theme Scripts -->
<script src="{{url('js/custom.min.js')}}"></script>

</body>
</html>
