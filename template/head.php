<?php
require_once('config.php');
?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Contabilidade Computação - UFMA 2015.1</title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo $rootProject; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?php echo $rootProject; ?>/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo $rootProject; ?>/dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo $rootProject; ?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
<!-- google.charts.load('current', {'packages':['line']}); -->
<!-- google.charts.setOnLoadCallback(drawChart); -->

google.charts.load('current', {'packages': ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

var testes = false;
  //Desenho do Gráfico
  function drawBasic(arrayData = null) {
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'X');
    data.addColumn('number', 'Valor original');
    data.addColumn('number', 'Valor em depreciação');

    if(arrayData == null){
      data.addRows([
                   [0, 0,1],[1, null,10],[2, 10,20],[3, 2,null],[4, 20,40],[5, 20,40],[6, 20,40]
                   ]);
    }else{
      var arrayData = JSON.parse("[[" + arrayData.join("],[") + "]]");
      data.addRows(arrayData);
    }

    var options = {
      legend: { position: 'top' },
      hAxis: {title: 'Tempo(meses)'},
      vAxis: {title: 'Valores R$'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }

  //busca pelo valor de depreciação
  function depreciacao_simulacao_valor_final(form){
    var depreQtdMes = form.depreQtdMes.value;
    var depreValorInicial = form.depreValorInicial.value;
    var depreValorFinal = form.depreValorFinal.value;

    if(testes == true)
      alert("You typed: depreQtdMes: " + depreQtdMes +
            ", depreValorFinal:"+ depreValorFinal +
            ", depreValorInicial: "+depreValorInicial);

    /* variaveis: tempo, deprec, valor, aux */
    var deprec;

    deprec = (depreValorInicial - depreValorFinal) / (depreQtdMes/12)

    var arrayMomento, valorDepreciando;
    var arrayGeral = [];
    var depreciacaoAoMes = deprec/12

    valorDepreciando = depreValorInicial;

    for(mes=1 ; mes<=depreQtdMes ; mes++){
      valorDepreciando = valorDepreciando-depreciacaoAoMes;
      arrayMomento = [mes , depreValorInicial , valorDepreciando.toFixed(2)];
      arrayGeral.push(arrayMomento);
    }

    if(testes == true)
      alert("valor inicial: "+depreValorInicial+
            ", valor final: "+depreValorFinal+
            ", Depreciação: "+ deprec +
            ", Depreciação quantidade de meses: "+ depreQtdMes+
  // ", Gráfico: "+ arrayGeral);
    ", Gráfico: "+ "[[" + arrayGeral.join("],[") + "]]");

    drawBasic(arrayGeral);
    document.getElementById('depreMensal').innerHTML = depreciacaoAoMes.toFixed(2);
    document.getElementById('depreAnual').innerHTML = (depreciacaoAoMes*12).toFixed(2);
  }


  function depreciacao_simulacao_mensal(form){
    var depreQtdMes = form.depreQtdMes.value;
    var depreAoMes = form.depreAoMes.value;
    var depreValorInicial = form.depreValorInicial.value;

    if(testes == true)
      alert("You typed: depreQtdMes: " + depreQtdMes + ", depreAoMes:"+ depreAoMes + ", depreValorInicial: "+depreValorInicial);

    // variaveis: tempo, deprec, valor, aux
    var aux = 0;
    var deprec;
    var valorFinal;

    valorFinal = depreValorInicial;

    for(i = 0; i < depreQtdMes; i++){
      aux = aux+i;
    }

    for(i = 0; i < depreQtdMes; i++){
      deprec = ( i/aux ) * depreValorInicial;
      valorFinal = valorFinal - deprec;
    }

    if(testes == true)
      alert("valor inicial: "+depreValorInicial+", Depreciacao: "+ deprec +", valor final: "+valorFinal);
  }


// Wait for the chart to finish drawing before calling the getImageURI() method.

</script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>