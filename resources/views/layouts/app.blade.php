<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

-
    @include('layouts.styles')
</head>
<body>
   
    @include('layouts.sidebar')
    @include('layouts.header')




    @yield('content')


        @include('layouts.footer')
        <!-- Back to Top -->

    @include('layouts.scripts')

</body>
</html>
