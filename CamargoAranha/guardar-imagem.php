
<?php 

if(isset($_FILES["arqimage"])){
    $arqINome = $_FILES["arqimage"]["name"];
    $arqITipo = $_FILES["arqimage"]["type"];
    $arqITamanho = $_FILES["arqimage"]["size"];
    
    $arqINOMETemp = $_FILES["arqimage"]["tmp_name"];

    $erroImgMarc = $_FILES["arqimage"]["error"];

    if($erroImgMarc==0){
        if(is_uploaded_file($arqINOMETemp)){
            if(move_uploaded_file($arqINOMETemp,"img/".$arqINome)){
                $caminhoI = $arqINome;
                header("location:Adm.php");
            }
            else{
                $erro = "Falha ao mover imagem do marcados";
                echo"$erro";
            }
        }
        else{
            $erro= "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
            echo "$erro";
        }
    }
    else{
        $erro = "Erro no envio: " . $erro;
        echo "$erro";
    }
}
else{
    $erro = "Imagem do Marcador enviado não encontrado";
    echo "$erro";
}


?>