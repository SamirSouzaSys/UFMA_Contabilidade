<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php

include $head;
?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Contabilidade - Computação UFMA 2015.1</a>
            </div>
            <!-- /.navbar-header -->

            <?php

            include $templates;
            ?>

            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Exaustão</h1>
                        <h3 class="page-header">O que é?</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                Pill Tabs
                            </div> -->
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#1-pills" data-toggle="tab">Introdução</a>
                                    </li>
                                    <li><a href="#2-pills" data-toggle="tab">EXAUSTÃO DE RECURSOS MINERAIS</a>
                                    </li>
                                    <li><a href="#3-pills" data-toggle="tab">LIMITE</a>
                                    </li>
                                    <li><a href="#4-pills" data-toggle="tab">DETERMINAÇÃO DA QUOTA ANUAL</a>
                                    </li>
                                    <li><a href="#5-pills" data-toggle="tab">CÁLCULO DA EXAUSTÃO REAL</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="1-pills">
                                        <p>É a redução do valor, decorrente da exploração, dos recursos minerais, florestais e outros recursos naturais esgotáveis, reduzindo o valor de investimentos necessários à exploração de recursos minerais ou florestais.</p>
                                        <p>A medida que os recursos minerais vão se exaurindo, registra-se na contabilidade, simetricamente à possança conhecida da jazida, a quota de exaustão.</p>
                                        <p>Tratando-se de floresta natural, a quota de exaustão será determinada mediante relação percentual entre os recursos florestais extraídos no período e o volume dos recursos florestais existentes no início do mesmo período.</p>
                                    </div>
                                    <div class="tab-pane fade" id="2-pills">
                                        <p>A diminuição de recursos minerais resultante da sua exploração deverá ser computada como custo ou encargo. </p>
                                        <p>A sistemática para a determinação da quota anual de exaustão é semelhante àquela aplicada no cálculo do encargo anual de depreciação.</p>
                                        <p>A base de cálculo da quota anual de exaustão é o custo de aquisição dos recursos minerais explorados.</p>
                                    </div>
                                    <div class="tab-pane fade" id="3-pills">
                                        <p>A depreciação, amortização e exaustão devem ser reconhecidas até que o valor residual do ativo seja igual ao seu valor contábil (NBC 19.5.4.4).</p>
                                    </div>
                                    <div class="tab-pane fade" id="4-pills">
                                        <p>O montante anual da quota de exaustão será determinado com base no volume da produção do ano e sua relação com a possança conhecida da mina, ou em função do prazo de concessão para sua exploração.</p>
                                        <p>Existem, portanto, dois critérios para o cálculo da quota de exaustão de recursos minerais, a saber:</p>
                                        <p>1) com base na relação existente entre a extração efetuada no respectivo período de apuração com a possança conhecida da mina (quantidade estimada de minérios da jazida);</p>
                                        <p>2) com base no prazo de concessão para exploração da jazida. O critério a ser observado será aquele que proporcionar maior percentual de exaustão no período. </p>
                                    </div>
                                    <div class="tab-pane fade" id="5-pills">
                                        <p>O critério adotado na determinação da quota anual de exaustão é o mesmo aplicado no cálculo da quota de depreciação.</p>
                                        <p>Desta forma, a medida que os recursos minerais vão se exaurindo, registra-se na contabilidade, simetricamente à possança conhecida da jazida, a quota de exaustão.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
    include $footerScript;
    ?>
</body>

</html>



