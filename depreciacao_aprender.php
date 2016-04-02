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
                                    <li class="active"><a href="#1-pills" data-toggle="tab">1. Deprecia&ccedil;&atilde;o</a>
                                    </li>
                                    <li><a href="#2-pills" data-toggle="tab">TABELA DE DEPRECIAÇÃO</a>
                                    </li>
                                    <li><a href="#3-pills" data-toggle="tab">DIAGRAMA - CONTABILIZAÇÃO DA DEPRECIAÇÃO</a>
                                    </li>
                                    <li><a href="#4-pills" data-toggle="tab">OBJETIVO</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="1-pills">
                                        <h4>Depreciação</h4>
                                        <p>&Eacute; o encargo peri&oacute;dico que alguns bens sofrem por uso, obsolesc&ecirc;ncia ou
                                        desgaste natural. A taxa anual de deprecia&ccedil;&atilde;o de um bem &eacute; dada em fun&ccedil;&atilde;o do
                                        prazo durante o qual se pode esperar alguma utiliza&ccedil;&atilde;o econ&ocirc;mica do bem. A
                                        porcentagem de deprecia&ccedil;&atilde;o a ser registrada na contabilidade, como custo ou
                                        despesa operacional, &eacute; determinada pela aplica&ccedil;&atilde;o da taxa de deprecia&ccedil;&atilde;o sobre o
                                        valor do bem em reais. &Eacute; bom observar que o limite de deprecia&ccedil;&atilde;o &eacute; o valor do
                                        pr&oacute;prio bem, de modo que deve&shy;se manter um controle individualizado, por bem,
                                        para que o valor contabilizado da deprecia&ccedil;&atilde;o, somado &agrave;s porcentagens j&aacute;
                                        registradas anteriormente, n&atilde;o ultrapasse o valor do respectivo bem. Ela pode ser
                                        calculada mensalmente ou no final do ano, por ocasi&atilde;o da Apura&ccedil;&atilde;o do Resultado
                                        do Exerc&iacute;cio (ARE).</p>

                                        <p>A deprecia&ccedil;&atilde;o de um ativo come&ccedil;a quando o item est&aacute; em condi&ccedil;&otilde;es de
                                        operar na forma pretendida pela administra&ccedil;&atilde;o, e acaba quando o ativo &eacute; baixado
                                        ou transferido do imobilizado. A deprecia&ccedil;&atilde;o n&atilde;o cessa quando o ativo torna&shy;se
                                        obsoleto ou &eacute; retirado temporariamente de opera&ccedil;&atilde;o a n&atilde;o ser que o ativo esteja
                                        totalmente depreciado.
                                        A legisla&ccedil;&atilde;o do imposto de renda (RIR 3000/99) fixa limites m&aacute;ximos de
                                        deprecia&ccedil;&atilde;o para os bens, em fun&ccedil;&atilde;o do per&iacute;odo de vida &uacute;til do bem:</p>
                                    </div>
                                    <div class="tab-pane fade" id="2-pills">
                                        <h4>Tabela de depreciação</h4>
                                        <table class="table table-striped">
                                            <tr>
                                                <td>Bens Patrimoniais</td>
                                                <td>Taxa Anual</td>
                                                <td>Anos de Vida &Uacute;til</td>
                                            </tr>
                                            <tr>
                                                <td>Edif&iacute;cios                  </td><td> 4%</td><td>25</td>
                                            </tr>
                                            <tr>
                                                <td>M&aacute;quinas e Equipamentos    </td><td>10%</td><td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Instala&ccedil;&otilde;es         </td><td>10%</td><td>10</td>
                                            </tr>
                                            <tr>
                                                <td>M&oacute;veis e Utens&iacute;lios </td><td>10%</td><td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Ve&iacute;culos                   </td><td>20%</td><td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Computadores e Perif&eacute;ricos </td><td>20%</td><td>5</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="3-pills">
                                        <p>O registro de contabilidade do encargo de deprecia&ccedil;&atilde;o &eacute; feito com o d&eacute;bito
                                        de uma conta de custo ou despesa operacional e cr&eacute;dito da conta redutora do ativo
                                        imobilizado intitulada deprecia&ccedil;&atilde;o acumulada.
                                        D. Despesa com Deprecia&ccedil;&atilde;o
                                        C. Deprecia&ccedil;&atilde;o Acumulada</p>
                                    </div>
                                    <div class="tab-pane fade" id="4-pills">
                                        <p>Ao longo do tempo, com a obsolesc&ecirc;ncia natural ou desgaste com uso na
                                        produ&ccedil;&atilde;o, os ativos v&atilde;o perdendo valor, essa perda de valor &eacute; apropriada pela
                                        contabilidade periodicamente at&eacute; que esse ativo tenha valor reduzido a zero. Com
                                        os valores da deprecia&ccedil;&atilde;o acumulada, &eacute; poss&iacute;vel criar uma previs&atilde;o de deprecia&ccedil;&atilde;o
                                        do bem para posterior troca ou manuten&ccedil;&atilde;o do mesmo.</p>
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



