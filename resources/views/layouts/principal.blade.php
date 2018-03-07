<html>

<hesad>
    <title>@yield('titulo') - SEMED</title>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--CSS-->
    <link href="/css/app.css" rel="stylesheet" type="text/css"/>
    {{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>--}}
</hesad>

<!-- SCRIPTS -->
<script src="/js/app.js"></script>

<script>
    $(document).ready(function () {
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
            <h3>Bootstrap Sidebar</h3>
            <strong>BS</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-list-alt"></i>
                    Cadastros
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="{{ url('/estagiario') }}"><i class="glyphicon glyphicon-user"></i>Estagiario</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i>Coordenador</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i>Setor</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    About
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-duplicate"></i>
                    Pages
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-link"></i>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-send"></i>
                    Contact
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
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
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

