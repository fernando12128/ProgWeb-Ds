<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-produtos-cliente.css') }}">
    <title>Padaria Camargo</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header__logo">
                <img src="{{ asset('img/logo.png')}}" alt="Logo da Página">
            </div>
                <a class="header__link" href="/clienteProdutos">           
                    <span class="material-symbols-outlined">
                        arrow_back  
                    </span>    
                        Voltar    
                </a>
        </header>

        <ul>
            <li>
                {{$produto[0]}}
                
            </li>
            <li>
                {{$produto[0]->produto}}

            </li>
            <li>
                {{$produto[0]->descrProduto}}

            </li>
            <li>
                {{$produto[0]->valor}}

            </li>
            <li>
                {{$produto[0]->dtCadastro}}

            </li>

        </ul>


    </div>
    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>