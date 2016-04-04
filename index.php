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
        <a class="navbar-brand" href="index.html">Contabilidade - Computação UFMA 2015.2</a>
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
              <p>Neste trabalho vamos discorrer sobre tr&ecirc;s redu&ccedil;&otilde;es de valor de ativos, em virtude de desgaste pelo uso, a&ccedil;&atilde;o da natureza, supera&ccedil;&atilde;o tecnol&oacute;gica, exerc&iacute;cio de direitos, ou esgotamento de reservas minerais/ florestais.</p>
              <p>S&atilde;o elas a Deprecia&ccedil;&atilde;o, a Amortiza&ccedil;&atilde;o e a Exaust&atilde;o.</p>
              <br>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                Conteúdo Abordado
              </div>
              <!-- .panel-heading -->
              <div class="panel-body">

                <div class="panel-group" id="accordion">

                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <!-- <a data-toggle="collapse" data-parent="#accordion" aria-expanded="false" class="collapsed">CONCEITO</a> -->
                      CONCEITO
                    </h4>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">DEPRECIAÇÃO</a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol>
                          <li><p>Lançamento Contábil</p>
                          </li>
                          <li><p>Vedações a Depreciação – Legislação IR</p>
                          </li>
                          <li><p>Inicio da Depreciação</p>
                          </li>
                          <li><p>Conceitos Importantes</p>
                          </li>
                          <li><p>Critério Contábil </p>
                          </li>
                          <li><p>Taxas de Depreciação</p>
                          </li>
                          <li><p>Elementos que integram o custo do imobilizado</p>
                          </li>
                          <li><p>CPC 27 – Um caso especial</p>
                          </li>
                          <li><p>Métodos de Depreciação</p>
                          </li>
                          <li><p>Depreciação de bens adquiridos usados</p>
                          </li>
                          <li><p>Baixa do Ativo Não Circulante</p>
                          </li>
                          <li><p>CPC 27 – Imobilizado</p>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">AMORTIZAÇÃO</a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol id="l5">
                          <li style="   ">
                            Bens Intangíveis sujeitos a Amortização
                          </li>
                          <li style="  ">
                            Taxa de Amortização
                          </li>
                          <li style="  ">
                            Lançamento Contábil
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed" aria-expanded="false">EXAUSTÃO</a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                      <div class="panel-body">
                        <ol id="l6">
                          <li style="   ">
                            <p class="s9" style="">
                              Não deve sofrer exaustão
                            </p>
                          </li>
                          <li style="  ">
                            <p class="s9" style="">
                              Recursos Minerais
                            </p>
                          </li>
                          <li style="  ">
                            <p class="s9" style="">
                              Recursos Florestais
                            </p>
                          </li>
                          <li style="  ">
                            <p class="s9" style="">
                              Lançamento Contábil
                            </p>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>

                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <!-- <a data-toggle="collapse" data-parent="#accordion" aria-expanded="false" class="collapsed">CONCEITO</a> -->
                      EXERCICIOS DE FIXAÇÃO
                    </h4>
                  </div>

                </div>
              </div>
              <!-- .panel-body -->
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