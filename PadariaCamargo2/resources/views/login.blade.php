<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>

<header id="cabecalho"> </header>

    <section class="login">

        <div class="login__logo">
            <img src="img/logo.png" alt="Logo da Página">
        </div>
      
        
        <div class="login__form">

            <form action="/login"  method="post">
                {{ csrf_field() }}
                
                <label for="email">Email:</label><br>
                <input type="text" class="login__form__input" name="email" placeholder="Digite o seu email:" id="email"/><br>
                
                <label for="senha">Senha:</label><br>
                <input type="password" class="login__form__input" name="password" id="senha"/><br>
                
                <input type="submit" value="Login" class="login__form__submit" />
                
                <a href="usuario" class="login__form_cadastrar">Cadastre-se</a>
                
            </form>
        </div>
    
    </section class="login-container">
   
</body>
</html>