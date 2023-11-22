<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Padaria Camargo</title>
</head>
<body>
    <header>
        <a href="/">
            <button id="botaoVoltar">Voltar</button>
        </a>
        <div class="logo">
            <img src="img/logo.png" alt="Logo da Página">
        </div>
        <!--<button id="botaoSair">Sair</button>-->
    </header>
    <div class="content">
        <table class="tb_EAdm">
            <tr class="tb_tr_EAdmT">
                <th class="celTopR">Ações</th>
                <th class="celTopL">Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data do Cadastro</th>
                <th>Foto</th>
            </tr>
            <form method="POST" action="/Produto" enctype="multipart/form-data">
            {{ csrf_field() }}
                <tr class="tb_tr_EAdmInsert">
                    <td class="celBottonR">
                        <input type="reset" value="Limpar">
                        <input type="submit" value="Salvar">
                    </td>
                    <td class="celBottonL">
                        <input type="text" name="txProduto" id="txProduto" placeholder="Ex.: Pão de batata">
                    </td>
                    <td>
                        <input type="text" name="txValor" id="txValor" placeholder="Ex.: 9.00">
                    </td>
                    <td>
                        <input type="text" name="txDescrProduto" placeholder="Ex.: Com batata">
                    </td>
                    <td>
                        <input type="date" name="txDataCadastro" id="txDataCadastro">
                    </td>
                    <td>
                        <input type="file" name="image" >
                    </td>
                </tr>
            </form>
        </table>

        <table class="tb_EAdm">
            <tr class="tb_tr_EAdmT">
                <th class="celTopR">Ações</th>
                <th class="celTopL">ID</th>
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th> Data do Cadastro</th>
            </tr>
        
            @foreach($produto as $c)
            <tr class="tb_tr_EAdmList">
                <td>
                    <a href="/admProdutos/excluir/{{$c->idProduto}}"><button class="btn_Delete">X</button></a>
                    <a><button class="btn_Edit">...</button></a>
                </td>
                <td>{{$c->idProduto}}</td>
                <td>{{$c->produto}}</td>
                <td>R$ {{$c->valor}}</td>
                <td>{{$c->descrProduto}}</td>
                <td>{{$c->dtCadastro}}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>