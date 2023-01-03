<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin - Meneer Koffie</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{url('otika/assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('otika/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('otika/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{url('otika/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='../img/rsz_logomk.png' />

  <link rel="stylesheet" href="{{url('otika/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{url('otika/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">

  @section('css')
  @show
  @yield('css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

        {{-- header --}}
        @include('admin-layout.header')
        {{-- sidebar --}}
        @include('admin-layout.sidebar')
        {{-- content --}}
        @yield('content')
        {{-- footer --}}
        @include('admin-layout.footer')

    </div>
</div>
<!-- General JS Scripts -->
<script src="{{url('otika/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{url('otika/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{url('otika/assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{url('otika/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{url('otika/assets/js/custom.js')}}"></script>
<script src="{{url('otika/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{url('otika/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('otika/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{url('otika/assets/js/page/datatables.js')}}"></script>
<script src="{{url('otika/assets/js/page/advance-table.js')}}"></script>

<!-- Script -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type='text/javascript'></script> --}}

{{-- <!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script> --}}



@section('js')
@show
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
