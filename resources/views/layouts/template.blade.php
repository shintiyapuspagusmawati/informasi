<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Informasi Nilai Siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('tampilan/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('tampilan/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('tampilan/lineicons/style.css')}}">    
    
    <!-- Custom styles for this template -->
    <link href="{{asset('tampilan/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('tampilan/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('tampilan/js/chart-master/Chart.js')}}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header btn-info">
            <!--logo start-->
            @role('admin')
            <a href="{{ url('/home') }}" class="logo"><b>{{ Auth::user()->name}}</b></a>
            @endrole
            @role('guru')
            <a href="{{ url('/home') }}" class="logo"><b>{{ Auth::user()->name}}</b></a>
            @endrole
            @role('siswa')
            <a href="{{ url('/home') }}" class="logo"><b>{{ Auth::user()->name}}</b></a>
            @endrole
            <!--logo end-->
            <br>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  </form></li>
              </ul>
            </div>
        </header>
        @yield('content')
      <!--header end-->
  </body>
</html>