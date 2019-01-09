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

        <!-- Navigation -->
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
<!-- //////MENU//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href=""><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href=""><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li>     
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

<!-- //////FIM MENU//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////MENU VERTICAL/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('/cliente') }}">Clientes</a></li>
                                <li><a href="{{ url('/fornecedor') }}">Fornecedores</a></li>
                                <li><a href="{{ url('/funcionario') }}">Funcionários</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Produto<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('/produto') }}">Gerenciar Produtos</a></li>
                                <li><a href="/">Menu</a></li>
                                <li><a href="/">Perfil</a></li>
                                <li><a href="/">Usuário do Sistema</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Configuração<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/">Dados da Empresa</a></li>
                                <li><a href="/">Menu</a></li>
                                <li><a href="/">Perfil</a></li>
                                <li><a href="/">Usuário do Sistema</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<!-- /////// FIM MENU VERTICAL/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
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

