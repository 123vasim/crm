<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Dashboard</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <header class="main-header">
        @include('layouts.header')
    </header>
   <aside class="main-sidebar">
        @include('layouts.sidebar')
    </aside>
    @yield('content') 
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="/dist/js/adminlte.min.js"></script>
    <script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/bower_components/chart.js/Chart.js"></script>
    <script src="/dist/js/pages/dashboard2.js"></script>
    <script src="/dist/js/demo.js"></script>
</body>
</html>