<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starter Kits | {{ $page_title ?? 'Title' }}</title>

  @include('user.partials.style')
</head>
<body class="hold-transition login-page">
    @yield('content')
  <!-- /.login-box -->
  @include('user.partials.script')
  @include('user.includes.noty');
</body>
</html>
