<?php session_start();
 
include('conexao.php');

?>

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
    <link rel ="stylesheet" href="css/estilo1.css">
    <title>Subindo imagem</title>
</head>
<body>

<div class="Nome text-center Logo" >
        <h1>Camargo Aranha</h1>
</div>
    
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>


    <div class="card color1">
<section>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome do filme</th>
            <th scope="col">Nome do arquivo</th>
            <th scope ="col">Genero</th>
            <th scope ="col">Opçoes</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
            $stmt = $pdo->prepare("select * from tbfilme");	
            $stmt ->execute();
            
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
              echo "<tr class='celula'>";
                echo "<td> $row[0] </td>";						
                echo "<td> $row[1] </td>";						
                echo "<td> $row[2] </td>";
                echo "<td> $row[3] </td>";						

                echo "<td> 
                        <a href='removerfilm.php?id=$row[0]'> Remover </a>
                      </td>";
              echo "</tr>";
            }	
        ?>
        </tbody>
    </table>
</section>
</div>

<form method="POST" action = "img-proc" enctype = "multipart/form-data">

<label for="nome2">Nome do aluno:</label>
<input type="text" name="nome2" placeholder="Digite o nome do aluno">

<br>

<label for="imag">Imagem</label>
<input id='imag' type="file" name="imag">

<input type="submit" name = "Cadimg" value = "Cadastrar">
</form>


</body>
</html>