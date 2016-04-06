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
                        <h1 class="page-header">Amortização</h1>
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
                                    <li class="active"><a href="#1-pills" data-toggle="tab">Geral</a>
                                    </li>
                                    <li><a href="#2-pills" data-toggle="tab">Contabilização</a>
                                    </li>
                                </ul>
                                <hr>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="1-pills">
                                        <h4>Geral</h4>
                                        <p>
                                            É a diminuição do valor dos bens intangíveis que integram o ativo permanente. A amortização tem lugar quando o limitante da vida útil for o tempo, diferentemente da depreciação, que é pelo uso, tempo e obsolescência.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="2-pills">
                                        <h4>Contabilização</h4>
                                        <p>D - Despesa de amortização (custo ou despesa)
                                        </p>
                                        <p>C - a Amortização acumulada
                                        </p>
                                        <p>O montante da amortização acumulada não poderá ultrapassar o custo total de aquisição do bem ou direito, tal qual ocorre com a depreciação e a exaustão.
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



