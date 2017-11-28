
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">


        <title>@yield('titulo')</title>

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <link href="/css/PrintArea.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <style media="screen">

            @import url('https://fonts.googleapis.com/css?family=Lato:300,400');

            html, body {
                font-family: 'Lato', serif;
                 height: 100%;
            }
            .btn-primary{
                background-color: #006b96;
            }
            .navbar-default {
                font-size: 1em;
                font-weight: 400;
                background-color: #ad0d0d;
                padding: 8px;
                border: 0px;
                border-radius: 0px;
            }
            .navbar-brand img{
                float: left;
                height:75px;
                padding:15px 30px;
                margin:-30px 10px;
            }

            .navbar-default .navbar-nav>li>a {
                color: white;
            }

            .navbar-default .navbar-nav>li>a:hover {
                color: #cbf0ff;
            }

            .navbar-default .navbar-brand {
                color: #002433;
            }

            .navbar-default .navbar-brand:hover {
                color: #fff;
                text-shadow: 1px -1px 8px #b3e9ff;
            }

            .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
                background-color: #006b96;
                color: white;
            }

            .navbar-default .navbar-toggle {
                border: none;
            }

            .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                border: none;
            }

            .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
                background-color: #002433;
            }

            .navbar-default .navbar-toggle .icon-bar {
                background-color: #fff;
            }

            .dropdown-menu {
                background-color: #006b96;
                color: white;
                border: 0px;
                border-radius: 2px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .dropdown-menu>li>a {
                background-color: #006b96;
                color: #fff;
            }

            .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
                background-color: #004059;
                color:#fff;
            }

            .dropdown-menu .divider {
                height: 1px;
                margin: 9px 0;
                overflow: hidden;
                background-color: #003246;
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #fff;
            }

            @media (max-width: 767px) {
                .dropdown-menu>li>a {
                    background-color: #006b96;
                    color: #fff;
                }
                .dropdown-menu>li>a:hover {
                    color: #fff;
                }

                .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus, .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
                    color: #fff;
                    background-color: transparent;
                }

                .dropdown-menu .divider {
                    height: 1px;
                    margin: 9px 0;
                    overflow: hidden;
                    background-color: #005577;
                }
            }
            /* END Media Query */
        </style>

    </head>

    <body>

        <nav class="navbar navbar-default"> <!-- /.inicio-navbar -->
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/home') }}"><img src="<?php echo url('/img/logo.png') ?>"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('login') }}">Entrar</a></li>
                        <li><a href="{{ route('register') }}">Registrar</a></li>
                    </ul>
                    @else
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/campus/listar') }}">Campus</a></li>
                        <li><a href="bloco">Bloco</a></li>
                        <li><a href="salas/cadastro">Salas</a></li>
                        <li><a href="rota">Rota</a></li>
                        <li><a href="{{ url('/grade/listar') }}">Grade</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/home') }}">Admin</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>

                        </li>

                    </ul>
                    @endif

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!-- /.final-navbar -->

        <div class="container"> <!-- inicio container -->

            @yield('conteudo')

            <hr>

            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Sistema de Localização</p>
                    </div>
                </div>
            </footer>

        </div><!-- fim container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/js/jquery-3.2.1.js"></script>
        <script src="/js/jquery.PrintArea.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
