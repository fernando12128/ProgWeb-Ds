<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from usuarios where id = $id");	    
	$stmt ->execute();    

    header("location:adm.php"); 



?>