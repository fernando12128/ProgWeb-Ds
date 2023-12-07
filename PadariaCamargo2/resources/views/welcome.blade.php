<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Padaria Camargo</title>
</head>
<body>    
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo da Página">
        </div>
    </header>
    <div class="content">
        @if($errors ->any())
            <div class= "col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif
        <div class="container_menu">
            <a href="admProdutos">
                <button>Gerenciar Produtos</button>
            </a>
            <a href="clienteProdutos">
                <button>Comprar</button>
            </a>
            <a href="dashboard">
                <button>Dashboard</button>
            </a>
            <a href="consultacep">
                <button>Teste Cep</button>
            </a>
            <a href="/logout"> <button>Sair</button> </a>
        </div>
    </div>
</body>
</html>