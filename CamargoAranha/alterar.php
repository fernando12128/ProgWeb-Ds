<?php  
    $id = $_POST['txIdContato'];
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];

    include("conexao.php");

    $stmt = $conexao->prepare("
        update usuarios set
            nomeContato='$nome',
            emailContato='$email',
            where idContato ='$id';
    ");	    
	$stmt ->execute();    

    header("location:adm.php");    
    
?>