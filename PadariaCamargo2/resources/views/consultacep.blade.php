<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="css/style-produtos-cliente.css">
    <script src="js/testeapicep.js"></script>
    <title>Padaria Camargo</title>
</head>
<body>
        <header class="header">
            <div class="header__logo">
                <img src="img/logo.png" alt="Logo da Página">
            </div>
            <!-- <nav class="header__navbar">
                <a class="header__navbar__link" href="clienteProdutos">Produtos</a>
                 <a class="header__navbar__link" href=""></a>
                </nav> -->
            <a class="header__link" href="/">
           
                <span class="material-symbols-outlined">
                    arrow_back  
                </span>    
                    Voltar
    
            </a>
            <!--<button id="botaoSair">Sair</button>-->
        </header>
    <div class="container">



    <form method="get" action="." class="form_cep">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" class="form_cep_camp"/></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" class="form_cep_camp"/></label>
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" class="form_cep_camp"/></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" class="form_cep_camp"/></label>
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" class="form_cep_camp"/></label>
      </form>






    </div>



    </div>
</body>
</html>