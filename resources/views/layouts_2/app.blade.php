<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->

  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <!-- endinject -->

    @include('layouts_2.styles')
</head>
<body>

    @include('layouts_2.sidebar')
    @include('layouts_2.header')

    @yield('content')

    @include('layouts_2.footer')
    @include('layouts_2.scripts')


</body>
</html>


