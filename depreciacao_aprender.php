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
                        <h1 class="page-header">Depreciação</h1>
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
                                    <li class="active"><a href="#1-pills" data-toggle="tab">Contabilização</a>
                                    </li>
                                    <li><a href="#2-pills" data-toggle="tab">Métodos de depreciação</a>
                                    </li>
                                    <li><a href="#3-pills" data-toggle="tab">Método da depreciação linear ou das quotas constantes</a>
                                    </li>
                                    <li><a href="#4-pills" data-toggle="tab">Método de depreciação da soma dos dígitos (cole)</a>
                                    </li>
                                    <li><a href="#5-pills" data-toggle="tab">Método da unidade de tempo trabalhada ou das quantidades produzidas</a>
                                    </li>
                                    <li><a href="#6-pills" data-toggle="tab">Depreciação em atividade rural</a>
                                    </li>
                                </ul>
                                <hr>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="1-pills">
                                        <h4>Contabilização</h4>
                                        <p>O lançamento mais comum do fato relativo à depreciação é o seguinte:</p>
                                        <p>D - Despesa (ou custo) de depreciação</p>
                                        <p>C - a Depreciação acumulada</p>
                                        <p>A conta devedora, despesa de depreciação, é conta de resultado e representa o encargo econômico suportado pela entidade, chamada também de encargo de depreciação.</p>
                                        <p>A conta credora depreciação acumulada é retificadora do bem sujeito à depreciação, possuindo saldo credor. Integra o balanço patrimonial, sendo demonstrada juntamente com a conta do bem que retifica, em subtração a seu saldo, chegando-se ao valor contábil (diferença entre o valor pelo qual o bem está registrado no balanço e a sua depreciação acumulada).</p>
                                        <p>A depreciação será deduzida, para fins do Imposto de Renda, pela empresa que suporta o encargo econômico do desgaste ou obsolescência, de acordo com as condições de propriedade, posse ou uso do bem.</p>
                                        <p>Para fins da legislação fiscal (Imposto de Renda), o encargo de depreciação somente poderá ser computado no resultado do exercício a partir do mês em que o bem for efetivamente instalado, posto em serviço ou em condições de produção. Porém, aos olhos da contabilidade, ele deve ser depreciado a partir do mês de aquisição, pois, pelo próprio conceito de depreciação, é desde esse momento que começa a obsolescência e desvalorização pela ação da natureza.</p>
                                        <p>A taxa de depreciação é determinada em função do período de vida útil do bem. Assim, um bem com 5 (cinco) anos de vida útil deverá ser depreciado em 20% ao ano.</p>
                                        <p>Alguns bens não estão sujeitos à depreciação. Eis alguns: terrenos, bens que normalmente aumentam de valor com o tempo, prédios ou construções não-alugados etc.</p>
                                    </div>
                                    <div class="tab-pane fade" id="2-pills">
                                        <h4>Métodos de depreciação</h4>
                                        <p>Existem diversos métodos de depreciação, sendo que o mais largamente utilizado é o método da depreciação linear.</p>
                                    </div>
                                    <div class="tab-pane fade" id="3-pills">
                                        <h4>Método da depreciação linear ou das quotas constantes</h4>
                                        <p>Consiste em aplicar-se a taxa de depreciação sempre sobre o mesmo valor (taxa e base de cálculo fixas). Dessa forma, o valor do encargo de depreciação será o mesmo em todos os períodos.</p>
                                    </div>
                                    <div class="tab-pane fade" id="4-pills">
                                        <h4>Método de depreciação da soma dos dígitos (cole)</h4>
                                        <p>Este método consiste em somar os dígitos da vida útil do bem. O valor assim encontrado será o numerador ou denominador, conforme se está trabalhando com quotas crescentes ou decrescentes. É um método em que a taxa é variável, mas a base de cálculo é constante.</p>
                                        <p>Por outro lado, o outro elemento (numerador ou denominador) será o dígito do ano a que nos estamos referindo. Por exemplo, para um bem que será depreciado em 5 anos, sem valor residual, utilizando o método crescente, sendo o seu valor de R$ 30.000,00, teremos o seguinte esquema:</p>
                                        <p>
                                            Ano 1 1
                                        </p>
                                        <p>
                                            Ano 2 2
                                        </p>
                                        <p>
                                            Ano 3 3
                                        </p>
                                        <p>
                                            Ano 4 4
                                        </p>
                                        <p>
                                            Ano 5 5
                                        </p>
                                        <p>
                                            Soma = 15
                                        </p>
                                        <br>
                                        <p>
                                            Como a depreciação é crescente, será ela então de:
                                        </p>
                                        <p>
                                            1º ano (1/15 x R$ 30.000,00) = R$ 2.000,00
                                        </p>
                                        <p>
                                            2º ano (2/15 x R$ 30.000,00) = R$ 4.000,00
                                        </p>
                                        <p>
                                            3º ano (3/15 x R$ 30.000,00) = R$ 6.000,00
                                        </p>
                                        <p>
                                            4º ano (4/15 x R$ 30.000,00) = R$ 8.000,00
                                        </p>
                                        <p>
                                            5º ano (5/15 x R$ 30.000,00) = R$ 10.000,00
                                        </p>
                                        <p>
                                            Dessa forma, o valor contábil desse bem, ao fim do terceiro ano, será de R$ 18.000,00 (R$ 30.000,00 – R$ 12.000,00).
                                        </p>
                                        <p>
                                            Caso a depreciação fosse decrescente, os valores por ano seriam invertidos, isto é, teríamos R$ 10.000,00 de depreciação no 1º ano, R$ 8.000,00 no 2º e assim por diante.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="5-pills">
                                        <h4>Método da unidade de tempo trabalhada ou das quantidades produzidas</h4>
                                        <p>Nesse método, a taxa de depreciação é calculada em função do número de horas de uso do bem no período. Neste caso, basta dividir o valor do bem pelo número de horas de vida útil e obteremos a depreciação por hora.
                                        </p>
                                        <p>O método das unidades produzidas é análogo, porém o cálculo da taxa é feito dividindo-se as unidades produzidas no período pela quantidade total que aquele bem é capaz de produzir, ou seja, a vida útil é dada em termos de unidades a serem produzidas.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="6-pills">
                                        <h4>Depreciação em atividade rural</h4>
                                        <p>Consoante o disposto no art. 6º da MP 2.159-70/01, os bens do ativo permanente imobilizado, exceto a terra nua, adquiridos por pessoa jurídica que explore atividade rural, para uso nesta atividade, poderão ser depreciados integralmente no próprio ano de aquisição.</p>
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