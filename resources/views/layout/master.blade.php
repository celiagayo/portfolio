<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title') </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portfolio personal Celia Gayo Escribano">
      <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,500,500i,600,600i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300i" rel="stylesheet">
        <!-- CSS files -->
        <link rel="stylesheet" href="/css/app.css">


        <!-- Javascript files -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/js/app.js"></script>

    </head>
    <body >
        <header>
<!--            @include('layout.navbar')-->
        </header>

        @yield('content')





    </body>

</html>