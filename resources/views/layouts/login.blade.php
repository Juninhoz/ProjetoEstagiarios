<html>

    <head>
        <title>Estagiarios - @yield('titulo')</title>
        <meta charset="utf-8"/>
        <!--CSS-->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="/css/sigine.css" rel="stylesheet" type="text/css"/>
    </head> 
    
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/sigine.js"></script>
    
    <body>
        <!-- Cabeçalho Principal -->
        @section('navegador-topo')   
        @show
        
        <div class="container">
            @yield('conteudo')
        </div>

        <!-- Rodapé Principal --> 
        @section('footer')
          
        @show
              
    </body>

</html>
