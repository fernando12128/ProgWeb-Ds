<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel ="stylesheet" href="css/estilo.css">
    <title>Adm</title>

</head>


<body>
    
<div class="Nome text-center Logo" >
        <h1>Camargo Aranha</h1>
</div>

<div>
     <form action="guardar-imagem.php" enctype="multipart/form-data" method="post"> 
        

        <input id = "arqimg" type='file' name="arqimage"  class='form-control-file' />
        <label for="arqimg">Coloque a Imagem do aluno</label>

        <input type="submit" value="Salvar"/>
     </form>    
</div>
<br>

<div class="card color1">
<section>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope ="col">Senha</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
            $stmt = $pdo->prepare("select * from usuarios");	
            $stmt ->execute();
            
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
              echo "<tr class='celula'>";
                echo "<td> $row[0] </td>";						
                echo "<td> $row[1] </td>";						
                echo "<td> $row[2] </td>";
                echo "<td> $row[3] </td>";						

                echo "<td> 
                        <a href='?id=$row[0]&nome=$row[1]&email=$row[2]'> Editar </a>
                        <a href='remover.php?id=$row[0]'> Remover </a>
                      </td>";
              echo "</tr>";
            }	
        ?>
        </tbody>
    </table>
</section>
</div>




</body>
</html>