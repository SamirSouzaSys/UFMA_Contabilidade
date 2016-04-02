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
                        <h1 class="page-header">Introdução</h1>
                        <div>
                            <p>Neste trabalho vamos discorrer sobre tr&ecirc;s redu&ccedil;&otilde;es de valor de ativos, em virtude</p>
                            <p>de desgaste pelo uso, a&ccedil;&atilde;o da natureza, supera&ccedil;&atilde;o tecnol&oacute;gica, exerc&iacute;cio de</p>
                            <p>direitos, ou esgotamento de reservas minerais/ florestais. S&atilde;o elas a Deprecia&ccedil;&atilde;o, a</p>
                            <p>Amortiza&ccedil;&atilde;o e a Exaust&atilde;o.</p>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
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
