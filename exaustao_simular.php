<?php
require_once('config.php');
?>
<!DOCTYPE >
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
                        <h2 class="page-header">Simulação<br/>
                            <small>Constante</small>
                        </h2>
                    </div>
                </div>
                <div>
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed" aria-expanded="false">Exercício Exemplo</a></h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <p>
                                Um empréstimo no valor de R$ 20 000,00 reais deverá ser pago pelo SAC em 5 parcelas mensais com um juro mensal de 3,5%. Construa a planilha do pagamento dessa dívida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col-lg-12 -->
            <form role="form">
                <div class="col-xs-12 col-md-12">
                    <div id="chart_div_amortizacao">
                    </div>
                    <br/>
                    <label><i class="fa fa-money"></i> Valor da amortização mensal</label>
                    <label class="control-label text-danger" id="amortizacaoMensal">-</label>
                    <br/>
                    <label><i class="fa fa-money "></i> Valor da amortização anual</label>
                    <label class="control-label text-danger" id="amortizacaoAnual">-</label>
                    <br/>
                    <label><i class="fa fa-money "></i> Valor da Total Juros</label>
                    <label class="control-label text-danger" id="amortizacaoJurosTotal">-</label>
                    <br/>
                    <label><i class="fa fa-money "></i> Valor da Total Pago</label>
                    <label class="control-label text-danger" id="amortizacaoTotalPago">-</label>
                    <hr>
                </div>
                <div class="col-xs-12 col-md-4">
                    <label>Meses</label>
                    <select class="form-control" name="amortizaQtdMes">
                        <?php
                        for($mes = 1; $mes<=120;$mes++)
                            echo "<option>$mes</option>"
                        ?>
                    </select>
                </div>
                <div class="col-xs-6 col-md-4">
                    <label>Valor Inicial</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" class="form-control" name="amortizaValorInicial">
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <label>Valor Juros mensal</label>
                    <div class="form-group input-group">
                        <input type="text" class="form-control" name="amortizaJuro">
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <button id="amortizaSimuMensalCal" type="button" class="btn btn-success" onClick="amortizacao_simulacao_mensal(this.form)">Calcular</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </div>
    </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Simulações<br/><small>Linear</small> </h2>
                </div>
                <form role="form">
                    <div class="col-lg-12">
                        <div id="chart_div">
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <label>Meses</label>
                        <select class="form-control" name="depreQtdMes">
                            <?php
                            for($mes = 1; $mes<=120;$mes++)
                                echo "<option>$mes</option>"
                            ?>
                        </select>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <label>Valor Inicial</label>
                        <div class="form-group input-group">
                            <span class="input-group-addon">R$</span>
                            <input type="text" class="form-control" name="depreValorInicial">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label>Depreciação ao Mês</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" name="depreAoMes">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <button id="depreSimuMensalCal" type="button" class="btn btn-success" onClick="depreciacao_simulacao_mensal(this.form)">Calcular</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </div>
                </form>
            </div>
        -->
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
</body>
</>