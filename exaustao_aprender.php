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
                <a class="navbar-brand" href="<?php echo $rootProject;?>">Contabilidade - Computação UFMA 2015.2</a>
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
                                    <li><a href="#2-pills" data-toggle="tab">Contabilização</a>
                                    </li>
                                    <li><a href="#3-pills" data-toggle="tab">Taxas Anuais</a>
                                    </li>
                                    <li><a href="#4-pills" data-toggle="tab">Ganhos Ou Perdas De Capital</a>
                                    </li>
                                </ul>
                                <hr>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="1-pills">
                                        <h4>Introdução</h4>
                                        <p>Corresponde à perda de valor, decorrente da exploração de recursos minerais ou florestais ou de bens aplicados nessa exploração. É o reconhecimento do custo dos recursos naturais, durante o período em que tais recursos são exauridos ou extraídos.
                                        </p>
                                        <p>
                                            Os equipamentos de extração mineral ou florestal podem opcionalmente ser depreciados, utilizando-se, para tal, os critérios e taxas de depreciação. Porém, normalmente devem ser exauridos juntamente com o objeto de exploração.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="2-pills">
                                        <h4>Contabilização</h4>
                                        <p>
                                            D - Despesa de exaustão
                                        </p>
                                        <p>
                                            C - a Exaustão acumulada
                                        </pz>
                                    </div>
                                    <div class="tab-pane fade" id="3-pills">
                                        <h4>Taxas Anuais</h4>
                                        <p>
                                            Serão determinadas em função do:
                                        </p>
                                        <p>
                                            a) Volume de produção no período e sua relação com a poupança (reserva potencial de exploração) conhecida. É o método das unidades produzidas;
                                        </p>
                                        <p>
                                            b) Prazo de concessão dado pela autoridade governamental, quando for o caso (exploração de recursos minerais).
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="4-pills">
                                        <h4>Ganhos Ou Perdas De Capital</h4>
                                        <p> Serão classificados como ganhos ou perdas de capital os resultados na alienação e liquidação de bens do ativo permanente, inclusive por desapropriação, baixa por perecimento, extinção, desgaste, obsolescência ou exaustão. Estes ganhos ou perdas serão contabilizados, respectivamente, como receita não operacional e despesa não operacional.
                                        </p>
                                        <p> A determinação do ganho ou da perda de capital corresponderá à diferença entre o valor de alienação dos bens e o seu valor contábil, na data da baixa. Ocorrerá ganho, se a diferença for positiva e perda, se negativa. Entende-se por valor contábil dos bens o que estiver registrado na escrituração, corrigido monetariamente, ajustado para mais por reavaliação no valor desses ativos ou para menos por contas retificadoras, tais como depreciação, amortização, exaustão, provisão. Assim:
                                        </p>
                                        <p>Valor de aquisição do bem (+) Correção monetária (+) Ajuste para reavaliação (-) Provisões (-) Depreciação, amortização ou exaustão acumulada = Valor contábil do bem
                                        </p>
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



