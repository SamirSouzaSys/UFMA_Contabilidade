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
                        <h1 class="page-header">Equipe</h1>
                        <div>
                            <p>Aristóteles Junior - laualmeidafilho@gmail.com</p>
                            <p>Laudelino Filho - aristoteles2992@gmail.com</p>
                            <p>Samir Souza - samir.guitar@gmail.com</p>
                            <br>
                            <p>Alunos do Curso de Ciência da Computação da UFMA.</p>
                            <p>Trabalho desenvolvido para a disciplina de Contabilidade Geral ministrada pela Profª Telma Chaves no semestre de 2015-2</p>
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
