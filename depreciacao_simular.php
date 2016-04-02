/<?php
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
                        <h2 class="page-header">Simulações<br/><small>Linear</small> </h2>
                    </div>
                    <!-- /.col-lg-12 -->
                    <form role="form">
                        <div class="col-lg-12">
                            <div id="chart_div">
                            </div>
                            <br/>
                            <label><i class="fa fa-money"></i> Valor da depreciação mensal</label>
                            <label class="control-label text-danger" id="depreMensal">-</label>
                            <br/>
                            <label><i class="fa fa-money "></i> Valor da depreciação anual</label>
                            <label class="control-label text-danger" id="depreAnual">-</label>
                            <br/><br/>
                            <label>Meses</label>
                            <select class="form-control" name="depreQtdMes">
                                <?php
                                for($mes = 1; $mes<=120;$mes++)
                                    echo "<option>$mes</option>"
                                ?>
                            </select>
                            <br/>
                            <label>Valor Inicial</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">R$</span>
                                <input type="text" class="form-control" name="depreValorInicial">
                            </div>
                            <br/>
                            <label>Valor Final</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">R$</span>
                                <input type="text" class="form-control" name="depreValorFinal">
                            </div>
                            <br/>
                            <button id="depreSimuMensalCal" type="button" class="btn btn-success" onClick="depreciacao_simulacao_valor_final(this.form)">Calcular</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Simulações<br/><small>Linear</small> </h2>
                    </div>
                    <!-- /.col-lg-12 -->
                    <form role="form">
                        <div class="col-lg-12">
                            <div id="chart_div">
                            </div>
                            <br/>
                            <label>Meses</label>
                            <select class="form-control" name="depreQtdMes">
                                <?php
                                for($mes = 1; $mes<=120;$mes++)
                                    echo "<option>$mes</option>"
                                ?>
                            </select>
                            <br/>
                            <label>Valor Inicial</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">R$</span>
                                <input type="text" class="form-control" name="depreValorInicial">
                            </div>
                            <br/>
                            <label>Depreciação ao Mês</label>
                            <div class="form-group input-group">
                                <input type="text" class="form-control" name="depreAoMes">
                                <span class="input-group-addon">%</span>
                            </div>
                            <button id="depreSimuMensalCal" type="button" class="btn btn-success" onClick="depreciacao_simulacao_mensal(this.form)">Calcular</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                            <br/>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php
    include $footerScript;
    ?>
</body>""
</html>