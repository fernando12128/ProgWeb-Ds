<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbfilme where idFilme = $id");
	$stmt ->execute();    

    header("location:imagem.php"); 



?>