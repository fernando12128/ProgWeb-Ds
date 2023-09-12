<?php 
session_start();
include_once('conexao.php');

   // $imagine = $_POST['Cadimg'];
   $Cadimg = filter_input(INPUT_POST, 'Cadimg', FILTER_SANITIZE_STRING);

   if($Cadimg){
    $nome2 = filter_input(INPUT_POST, 'nome2', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES["imag"]['name'];

    $Result = "INSERT INTO tbfilme (filme, imag) VALUES(:nome, :imag)";
    $insert = $pdo->prepare($Result);

    $insert->bindparam(':nome', $nome2);
    $insert->bindparam(':imag', $nome_imagem);

    if($insert->execute()){
        header('Location: imagem.php');

        $ultimoid = $pdo->lastInsertId();
        $diretorio = 'img/';

        

        move_uploaded_file($_FILES['imag']['tmp_name'],$diretorio.$nome_imagem);
        
        $_SESSION['msg'] = "<p style = 'color:green;'>Dados Salvos com sucesso</p>";
    }else{
        //c          Depois adicionar quando der certo ao adicionar (ainda n sei onde colocar)
        header('Location: imagem.php');
    }

   }else{
    $_SESSION['msg'] = "<p style = 'color:red;'>Erro ao Salvar os dados</p>";
    header('Location: imagem.php');
   }
?>