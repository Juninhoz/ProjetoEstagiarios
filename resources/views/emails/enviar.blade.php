<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
</head>

<style>
    p{
        color: black;
        font-size: 20px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ URL::to('/')}}/images/logo.png" height="150" width="150">
            </div>
            <div class="col-md-7" style="margin-top: 20px">
                <h1>Secretaria Municipal de Educação</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                {{ $mensagem }}
            </div>
        </div>

    <pre style="text-align: center">Secretaria Municipal de Educação de Maceió - Rua General Hermes, 1199, Cambona
CEP 57017-000 // Fone: (82) 3315-4553</pre>

    </div>
</body>

</html>