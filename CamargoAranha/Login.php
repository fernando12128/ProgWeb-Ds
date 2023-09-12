<!doctype html>
<html lang="en">
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

      <form class="px-4 py-3" action ='testeLogin.php' method='POST'>

        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control color1" name='email' id="Email" placeholder="Email">
        </div>

        <div class="mb-3">
          <label for="Senha" class="form-label">Senha</label>
          <input type="password" class="form-control color1" name='Senha'id="Senha" placeholder="Senha">
        </div>

        <br>

        <input type="submit" name='senha' value='Logar' class="btn btn-primary">

        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>

      </form>
    </div>
    
  </body>
</html>
