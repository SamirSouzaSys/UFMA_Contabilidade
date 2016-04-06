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
            <h1 class="page-header">Introdução</h1>
            <div>
              <p>
                Com exceção dos terrenos e de alguns outros bens, como obras de arte (que aumentam de valor com o tempo) ou prédios não-alugados nem utilizados pela empresa, os elementos do ativo imobilizado possuem um período de v da útil econômica limitado. Estes bens e direitos de natureza permanente, que têm vida útil (bens) ou prazo de exercício (direitos) superior a 1 (um) ano, sujeitam-se a depreciação, amortização ou exaustão, conforme su s características. Estes procedimentos representam o sacrifício sofrido pelos bens ou direitos ao longo de sua vida útil.
              </p>
              <p>A contabilização dar-se-á pelo reconhecimento a débito de uma despesa ou custo em contrapartida com o crédito em uma conta retificadora do ativo permanente. Portanto, é a “desativação” do bem ou direito e o reconhecimento de despesa pelo seu uso.
              </p>
              <p>
                Pela legislação do imposto de renda poderão, à opção da entidade, ser debitados diretamente como despesa operacional ou custo, no resultado do exercício, o valor de aquisição dos elementos patrimoniais de vida útil ou prazo de exercício inferior a 1 (um) ano ou cujo valor unitário não supere o limite fixado na legislação tributária, mesmo que o prazo de vida útil seja superior a 1 (um) ano.
              </p>
              <p>
                Já pelo princípio da prudência, estes devem ser computados como despesa.
              </p>
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