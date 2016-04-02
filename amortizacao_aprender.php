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
                                    <li><a href="#2-pills" data-toggle="tab">Quota de amortização</a>
                                    </li>
                                    <li><a href="#3-pills" data-toggle="tab">Taxa anual de amortização</a>
                                    </li>
                                    <li><a href="#4-pills" data-toggle="tab">Prazos mínimos e máximos</a>
                                    </li>
                                    <li><a href="#5-pills" data-toggle="tab">Contabilização</a>
                                    </li>
                                    <li><a href="#6-pills" data-toggle="tab">Cálculo</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="1-pills">

                                    </div>
                                    <div class="tab-pane fade" id="2-pills">

                                    </div>
                                    <div class="tab-pane fade" id="3-pills">

                                    </div>
                                    <div class="tab-pane fade" id="4-pills">

                                    </div>
                                    <div class="tab-pane fade" id="5-pills">

                                    </div>
                                    <div class="tab-pane fade" id="6-pills">

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



