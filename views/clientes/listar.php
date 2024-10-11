<?php
require_once '../../app/config/App.php';
?>
<?php
require_once '../includes/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?= renderContentHeader("Clientes", "Inicio", SERVERURL . "views") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Contenido -->
        <div class="col-md-12">

        <a href="registrar" class="btn btn-primary mb-3">Registrar</a>
        <hr>

          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Apellidos</th>
                  <th>Nombres</th>
                  <th>Telefono</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Jesus</td>
                  <td>Matta</td>
                  <td>1232456789</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jesus</td>
                  <td>Matta</td>
                  <td>1232456789</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Jesus</td>
                  <td>Matta</td>
                  <td>1232456789</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Jesus</td>
                  <td>Matta</td>
                  <td>1232456789</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Fin del Contenido -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once '../includes/footer.php' ?>

</body>

</html>