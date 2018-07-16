<html>

<head>
    <title>SGE - @yield('titulo', 'SEMED')</title>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ URL::to('/') }}/images/logo_icon.ico" type="image/x-icon" />

    <!--CSS-->
    {{--<link href="/css/app.css" rel="stylesheet" type="text/css"/>--}}

    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/datatables.min.css.css" rel="stylesheet" type="text/css"/>
    <link href="/css/sweetalert2.css" rel="stylesheet" type="text/css"/>
    <link href="/css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css"/>


    {{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>--}}
</head>

<!-- SCRIPTS -->
<script src="/js/app.js"></script>
<script src="/js/jquery.mask.js"></script>
<script src="/js/Chart.js"></script>

<script>
    $(document).ready(function () {

        $('.phone').mask('(00) 00000-0000');

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

<body>
<!-- Cabeçalho Principal -->
{{--@section('navegador-topo')--}}
{{--@show--}}

<!-- Container Principal -->
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            {{--<img src="{{ url('images/logo.png') }}" alt="ti-semed" height="120px" width="120px">--}}
            <a href="{{ url('/') }}"><h3 style="text-align: center;">SGE - SEMED</h3></a>
            <strong>SGE</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-list-alt"></i>
                    Cadastros
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="{{ url('/estagiarios') }}"><i class="glyphicon glyphicon-user"></i>Estagiario</a></li>
                    <li><a href="{{ url('/coordenadores') }}"><i class="glyphicon glyphicon-user"></i>Coordenador</a></li>
                    <li><a href="{{ url('/setores') }}"><i class="glyphicon glyphicon-home"></i>Setor</a></li>
                    <li><a href="{{ url('/instituicoes') }}"><i class="glyphicon glyphicon-home"></i>Instituição</a></li>
                    <li><a href="{{ url('/cursos') }}"><i class="glyphicon glyphicon-home"></i>Curso</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="glyphicon glyphicon-dashboard"></i>
                    Dashboards
                </a>
            </li>
        </ul>
    </nav>
    <!-- Page Content Holder -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-justify"></i>
                        <span></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="glyphicon glyphicon-time"></i> <?php date_default_timezone_set('America/Sao_Paulo'); echo date('h:i:s'); ?></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> {{ Auth()->user()->name }}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        {{--Conteudo--}}
        @yield('conteudo')
    </div>
</div>

@stack('scripts')
{{--@section('footer')--}}
{{--@show--}}
</body>
</html>

