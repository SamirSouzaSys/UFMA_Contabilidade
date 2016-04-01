<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php

include $head;
?>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">
                        Toggle navigation
                    </span>
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
                  <div id="chart_div"></div>
                  <div id='png'></div>
              </div>
              <!-- /.container-fluid -->
          </div>
          <!-- /#page-wrapper -->

      </div>
      <!-- /#wrapper -->
  </div>

</body>
</html>