<html>
    <head>
        <title> @yield('title') </title>
        <!--        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Open+Sans+Condensed:300|Quicksand:300|Questrial" rel="stylesheet">
        <!-- CSS files -->
        <link rel="stylesheet" href="/css/app.css">
       

        <!-- Javascript files -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
        <script src="/js/app.js"></script>

    </head>
    <body >
        <header>
            <div class="cabecera-fija showmenu">
            <!--@include('layout.navbar')-->
            </div>
        </header>

        @yield('content')





    </body>

</html>