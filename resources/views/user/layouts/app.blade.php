<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'Dashboard' }} | Starter Kits</title>
  @include('user.partials.style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('user.includes.preloader')

  @include('user.includes.header')

  @include('user.includes.side-nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    @include('user.includes.breadcrumb')

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('user.includes.footer')
  @include('user.includes.modals.alert')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
@include('user.partials.script')
@include('user.includes.noty')
</body>
</html>
