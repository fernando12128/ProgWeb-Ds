<?php
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $sena = $_POST['txSenha'];
        
    include("conexao.php");

    $stmt = $pdo->prepare("insert into usuarios values(null,'$nome','$email','$sena')");	    
	$stmt ->execute();   

    header("location:cadastrar.php");    
?>
