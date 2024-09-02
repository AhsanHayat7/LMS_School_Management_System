<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

        @include('layouts_3.styles')
   </head>
   <body class="dashboard dashboard_1">


    @include('layouts_3.sidebar')
    @include('layouts_3.header')

    @yield('content')


    @include('layouts_3.footer')


    @include('layouts_3.scritps')

</body>
</html>
