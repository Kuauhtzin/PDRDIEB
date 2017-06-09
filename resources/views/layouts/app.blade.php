<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('refresh')
  <title>Abrasivos Austromex</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="{{asset('abrasivos-austromex.ico')}}">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/Font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('plugins/ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('plugins/AdminLTE/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('plugins/AdminLTE/css/skins/skin-black.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- General Styles -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- Particular Styles -->
  @stack('styles')

</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('layouts.partials.header')
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
    @include('layouts.partials.menu')
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  @yield('content')
  
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.partials.footer')
  
</div>
<!-- ./wrapper -->
@include('layouts.partials.loader')
<!-- jQuery 2.2.0 -->
<script src="{{asset('plugins/jquery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

@stack('scripts')

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('plugins/AdminLTE/js/app.min.js')}}"></script>

<!-- Notifications -->
@include('layouts.partials.notifications')

<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
