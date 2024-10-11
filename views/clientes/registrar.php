<?php
require_once '../../app/config/App.php';
?>
<?php
require_once '../includes/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?= renderContentHeader("Nuevo cliente", "Lista de Clientes", SERVERURL . "views/clientes/listar") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Contenido -->
        <div class="col-md-12">
          <form action="" id="formClientes">
            <div class=" card card-outline card-primary">
            <div class="card-header">Complete los campos</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="apellidos"> Apellidos</label>
                  <input type="text" class="form-control" id=apellidos require autofocus>
                </div>
                <div class="col-md-4 form-group">
                  <label for="nombres"> Nombres</label>
                  <input type="text" class="form-control" id=nombres require>
                </div>
                <div class="col-md-4 form-group">
                  <label for="telefono"> Telefono</label>
                  <input type="tel" minlength="9" maxlength="9" class="form-control text-center" id=telefono require>
                </div>
              </div>

            </div>
            <div class="card-footer text-rigth">
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </form>
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

<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#formClientes').addEventListener('submit',async (e) => {
      e.preventDefault();
      
      if(await ask("¿Desea Guardar?")){
        showToast("Guardando Correctamente", "SUCCESS", 1000, "./listar");
      }

    });
  });
</script>

</body>

</html>