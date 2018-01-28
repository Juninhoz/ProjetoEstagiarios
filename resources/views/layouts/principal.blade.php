<html>

    <head>
        <title>Estagiarios - @yield('titulo')</title>
        <meta charset="utf-8"/>
        <!--CSS-->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="/css/estagiarios.css" rel="stylesheet" type="text/css"/>
        <link href="/css/jquery.growl.css" rel="stylesheet" type="text/css" />
    </head> 

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/estagiarios.js"></script>
    
    <body>
        <!-- Cabeçalho Principal -->
        @section('navegador-topo')

        <nav class="navbar navbar-default" role="navigation">
        
            <div class="container">

                <div class="navbar-header">      
                    <a class="navbar-brand" href="{{ url('/')}}">SGE</a>
                </div>
                    
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/estagiario/cadastro">Estagiario</a></li>
                                <li><a class="dropdown-item" href=""></a></li>
                                <li><a class="dropdown-item" href="#"></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="dropdown-item" href="#"></a></li>
                            </ul>
                        </li> 
                    </ul>

                    @if(Auth::guest()) 
                        <li><a href="{{ url('/cadastro') }}">Cadastrar</a></li> 
                    @else  
                        {{ Auth::user()->name }} 
                    @endif
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="{{ url('/cadastro') }}"></a></li> 
                        
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="glyphicon glyphicon-edit"></span> Alterar dados
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-out"></span>
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
               
        @show
        
        <!-- Container Principal -->
        <div class="container">
        
            @yield('conteudo')
        
        </div>

        <!-- Rodapé Principal --> 
        @section('footer')
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 right-border">
                        <img class="img-responsive" src="/imagens/logo.png" width="150" height="150" style="margin:auto"/>
                    </div>

                    <div class="col-md-5 col-sm-12 right-border">    
                        <div class="footer-about">
                            <h3 class="footer-title">Sobre nós</h3>
                            <p> Sistema desenvolvido pela equipe de desenvolvimento do setor de Tecnologia da informação da secretaria municipal de educação 
                            de Maceio.
                            </p>
                        </div>
                        
                        <div class="copyright hidden-sm hidden-xs">
                            <p>Desenvolvido  por: Secretaria Municipal de Educação</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="col-md-7 col-sm-6">
                            <div class="contact-info">
                                <h2 class="footer-title">Contato</h2>
                                <div class="single">
                                    <i class="fa fa-map-marker"></i>
                                    <p>Rua General Hermes,<br> 
                                        Maceió, LKG 778569, Brasil</p>
                                </div>
                                <div class="single">
                                    <i class="fa fa-phone"></i>
                                    <p>3315-0000</p>
                                </div>

                                <div class="single">
                                    <i class="fa fa-envelope"></i>
                                    <p>suportesemed@semed.maceio.al.gov.br</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </footer>
    @show
</body>
</html>
