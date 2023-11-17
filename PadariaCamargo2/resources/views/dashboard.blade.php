<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Produto', 'Quantidade'],
            @foreach($results as $v)
                ['{{ $v->produto }}',{{ $v->total_qtdProduto }}],
            @endforeach
        ]);

        var options = {
          title: 'Dashboard'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
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
        
        <div id="piechart" style="width: 900px; height: 500px; "></div>



    </div>
