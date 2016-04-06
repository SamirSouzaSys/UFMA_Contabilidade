<?php
require_once('config.php');
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contabilidade Computação - UFMA 2015.2</title>

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

  var fileNameAtual = location.pathname.substring(location.pathname.lastIndexOf('/')+1);
  if(fileNameAtual == "amortizacao_simular.php"){
    google.charts.setOnLoadCallback(drawAmortizacao);
  }else if(fileNameAtual ==  "depreciacao_simular.php"){
    google.charts.setOnLoadCallback(drawBasic);
  }


  var testes = false;
  //Desenho do Gráfico
  function drawBasic(arrayData = null) {
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'X');
    data.addColumn('number', 'Valor original R$');
    data.addColumn('number', 'Valor após processo R$');

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
      hAxis: {title: 'Tempo(meses)',format : '## meses'},
      vAxis: {title: 'Valores R$', format : 'R$ #,###'}

    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }

  function drawAmortizacao(arrayData = null) {
    var data = new google.visualization.DataTable();
    data.addColumn('number', 'X');
    data.addColumn('number', 'Valor devido');
    data.addColumn('number', 'Valor Juros');
    data.addColumn('number', 'Valor Prestação Mensal(Amortização + Juros)');

    if(arrayData == null){
      data.addRows([
                   [0, 0,1,9],[1, null,10, 6],[2, 10,20,2],[3, 2,null,6],[4, 20,40,9],[5, 20,40,3],[6, 20,40,6]
                   ]);
    }else{
      var arrayData = JSON.parse("[[" + arrayData.join("],[") + "]]");
      data.addRows(arrayData);
    }

    var options = {
      legend: { position: 'top' },
      hAxis: {title: 'Tempo(meses)',format : '## meses'},
      vAxis: {title: 'Valores R$', format : 'R$ #,###'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div_amortizacao'));

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
            ", Depreciação quantidade de meses: "+ depreQtdMes+  // ", Gráfico: "+ arrayGeral);
    ", Gráfico: "+ "[[" + arrayGeral.join("],[") + "]]");

    drawBasic(arrayGeral);
    document.getElementById('depreMensal').innerHTML = "R$ " + depreciacaoAoMes.toFixed(2);
    document.getElementById('depreAnual').innerHTML = "R$ " + (depreciacaoAoMes*12).toFixed(2);
  }

  function amortizacao_simulacao_mensal(form){
    var amortizaQtdMes = form.amortizaQtdMes.value;
    var amortizaValorInicial = form.amortizaValorInicial.value;
    var amortizaJuro = form.amortizaJuro.value;

    if(testes == true)
      alert("You typed: amortizaQtdMes: " + amortizaQtdMes +
            ", amortizaJuro:"+ amortizaJuro +
            ", amortizaValorInicial: "+amortizaValorInicial);


    var arrayMomento, valorAmortizando;
    var valorAmortizacaoMensal = amortizaValorInicial / amortizaQtdMes;
    var amortizaValorJuros = 0;
    var amortizaValorDevido = 0;
    var amortizaValorDevido = amortizaValorInicial;
    var TotalJuros = 0;
    var TotalPago = 0;
    amortizaJuros = 0;
    amortizaPrestacao = 0;
    amortizaJuro = amortizaJuro*0.01;



    var arrayGeral = [];

    var mes = 0;
    arrayMomento = [mes , amortizaValorDevido, 0, 0];
    // arrayMomento = [mes , amortizaValorDevido.toFixed(2), 0, 0];
    arrayGeral.push(arrayMomento);

    for(mes=1 ; mes<=amortizaQtdMes ; mes++){
      amortizaValorDevido = (amortizaValorDevido - valorAmortizacaoMensal);

      amortizaValorJuros = ((amortizaValorDevido+valorAmortizacaoMensal)*amortizaJuro);
      TotalJuros += amortizaValorJuros;

      valorPrestacaoMensal = valorAmortizacaoMensal + amortizaValorJuros;
      TotalPago += valorPrestacaoMensal;

      arrayMomento = [mes,amortizaValorDevido.toFixed(2),amortizaValorJuros.toFixed(2),valorPrestacaoMensal.toFixed(2)];
      arrayGeral.push(arrayMomento);

      // arrayMomento = [mes , amortizaValorInicial , valorAmortizando.toFixed(2)];
    }

    /* variaveis: tempo, amortizac, valor, aux */

    if(testes == true)
      alert("valor inicial: "+amortizaValorInicial+
            ", valor final: "+amortizaJuro+
            // ", Depreciação: "+ amortizaMensal +
            ", Depreciação quantidade de meses: "+ amortizaQtdMes+  // ", Gráfico: "+ arrayGeral);
            ", Depreciação quantidade de meses: "+ amortizaQtdMes+  // ", Gráfico: "+ arrayGeral);
    ", Gráfico: "+ "[[" + arrayGeral.join("],[") + "]]");

    drawAmortizacao(arrayGeral);
    document.getElementById('amortizacaoJurosTotal').innerHTML = "R$ " + TotalJuros.toFixed(2);
    document.getElementById('amortizacaoTotalPago').innerHTML = "R$ " + TotalPago.toFixed(2);
    document.getElementById('amortizacaoMensal').innerHTML = "R$ " + valorAmortizacaoMensal.toFixed(2);
    document.getElementById('amortizacaoAnual').innerHTML = "R$ " + (valorAmortizacaoMensal*12).toFixed(2);
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