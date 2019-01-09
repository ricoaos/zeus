<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="character_set"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="" id="favicon" data-original-href="" />
    <title>ZEUS-Project</title>
    <link href="{{ asset('vendor/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/vendor/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}">ESTAÇÃO DAS MOTOS</a>
            </div>
            @include('layouts.menu_horizontal')
            @include('layouts.menu_vertical')
        </nav>
  
        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    <!-- /#wrapper -->
    <script src="{{ asset('vendor/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('vendor/data/morris-data.js') }}"></script>
    <script src="{{ asset('vendor/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>

