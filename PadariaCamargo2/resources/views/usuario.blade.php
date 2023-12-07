<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
    <div class="login">
    <div class="login__logo">
            <img src="img/logo.png" alt="Logo da Página">
    </div>
        <div class="login__form cadastro">
    
            <form action="/usuario" method="post">
                {{ csrf_field() }}
                <label for="nome">Nome:</label>
                <input class="login__form__input" placeholder="Digite seu nome completo" type="text" name="name"id="nome"><br>
                <label  for="email">Email:</label>
                <input class="login__form__input" placeholder="Ex: email@email.com" type="text" name="email" id="email"><br>
                <label for="senha">Senha:</label>
                <input class="login__form__input" placeholder="Crie uma senha" type="password" name="password" id="senha"><br>
                
                <input class="login__form__submit" type="submit" value="Criar" />
            </form>
            
        </div>
    </div>
      
    
</body>
</html>