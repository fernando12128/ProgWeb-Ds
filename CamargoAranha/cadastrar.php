<?php 
      include('conexao.php');
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel ="stylesheet" href="css/estilo1.css">
    <title>cadastrar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>

  <div class="Nome text-center">
        <h1>Camargo Aranha</h1>
    </div>
    
  <body class="p-3 m-0 border-0 bd-example">
    <div class="dropdown-menu color1">


      <form class="px-4 py-3" action="Salvandobc.php" method ="POST">

        <div class="mb-3"  class="img-fluid" alt="...">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control color1" name ='txNome' id="nome" placeholder="Nome da minha princesinha">
        </div>

        <div class="mb-3">
          <label for="mail" class="form-label">Email</label>
          <input type="email" class="form-control color1" name ='txEmail' id="email" placeholder="Minha princesinha@gmail.com">
        </div>
      
        <div class="mb-3">
          <label for="Senha" class="form-label">Senha</label>
          <input type="password" class="form-control color1" name ='txSenha' id="Senha" placeholder="Senha da minha princesinha">
        </div>
      
        <br>
        
        <button type="submit"  name="submit" class="btn btn-primary">cadastrar</button>

        <a href="Login.php" class="btn btn-primary">Ja tenho conta</a>
      </form>

    </div>
    
  </body>
</html>