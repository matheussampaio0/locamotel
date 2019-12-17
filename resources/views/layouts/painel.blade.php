<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="/NiceAdmin/img/favicon.png">

  <title>LocaMotel - Painel de Controle</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- bootstrap theme -->
  <link href="/NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="/NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="/NiceAdmin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="/NiceAdmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="/NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="/NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="/NiceAdmin/stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="/NiceAdmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="/NiceAdmin/stylesheet" href="css/fullcalendar.css">
  <link href="/NiceAdmin/css/widgets.css" rel="stylesheet">
  <link href="/NiceAdmin/css/style.css" rel="stylesheet">
  <link href="/NiceAdmin/css/style-responsive.css" rel="stylesheet" />
  <link href="/NiceAdmin/css/xcharts.min.css" rel=" stylesheet">
  <link href="/NiceAdmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: /NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="{{route('home')}}" class="logo">Loca <span class="lite">Motel</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" href="#">
              <span class="profile-ava">
                <img alt="" src="/NiceAdmin/img/avatar_small.jpg">
              </span>
              <span class="username">{{ Auth::user()->name }}</span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Meu Perfil</a>
              </li>
              <li>
                <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="icon_key_alt"></i> Sair</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href=" {{ route('home') }}">
              <i class="icon_house_alt"></i>
                <span>| Controle</span>
            </a>
            <a class="" href=" {{ route('helpsys') }}">
              <i class="icon_question"></i>
                <span>| Painel de Ajuda</span>
            </a>
            @if((Auth::user()->type) == 1)
            <a class="" href="{{route('adminpanel')}}">
              <i class="icon_genius"></i>
                <span>| Admin</span>
            </a>
            @endif
          </li>
          <li>
            @if((Auth::user()->type) == 1)
            <a class="" href="chart-chartjs.html">
              <i class="icon_piechart"></i>
                <span>| Relatórios</span>
            </a>
            @endif
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

        @yield('content')

    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="/NiceAdmin/js/jquery.js"></script>
  <script src="/NiceAdmin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="/NiceAdmin/js/jquery-1.8.3.min.js"></script>
  <script type="/NiceAdmin/text/javascript" src="/js/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- bootstrap -->
  <script src="/NiceAdmin/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
  <!-- nice scroll -->
  <script src="/NiceAdmin/js/jquery.scrollTo.min.js"></script>
  <script src="/NiceAdmin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="/NiceAdmin/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="/NiceAdmin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="/NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="/NiceAdmin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="/NiceAdmin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="/NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="/NiceAdmin/js/calendar-custom.js"></script>
    <script src="/NiceAdmin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="/NiceAdmin/js/jquery.customSelect.min.js"></script>
    <script src="/NiceAdmin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="/NiceAdmin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="/NiceAdmin/js/sparkline-chart.js"></script>
    <script src="/NiceAdmin/js/easy-pie-chart.js"></script>
    <script src="/NiceAdmin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/NiceAdmin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/NiceAdmin/js/xcharts.min.js"></script>
    <script src="/NiceAdmin/js/jquery.autosize.min.js"></script>
    <script src="/NiceAdmin/js/jquery.placeholder.min.js"></script>
    <script src="/NiceAdmin/js/gdp-data.js"></script>
    <script src="/NiceAdmin/js/morris.min.js"></script>
    <script src="/NiceAdmin/js/sparklines.js"></script>
    <script src="/NiceAdmin/js/charts.js"></script>
    <script src="/NiceAdmin/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>