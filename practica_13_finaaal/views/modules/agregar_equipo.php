<?php
//ver si hay una sesion existente
  error_reporting(0);
  session_start();
  if(!$_SESSION['id']){
    echo "
    <script type='text/javascript'>
      window.location='index.php';
    </script>";
  } 
?>

<!--cuerpo de la pagina-->
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Equipo</title>
</head>
<body> 
	<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Agregar equipo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="card-body">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Equipo:</label>
              <input type="text" style="width: 300px" name="txtNombre" class="form-control" id="txtNombre" placeholder="Nombre" required>
            </div>
          </div>
          <div class="card-body">
          <div class="form-group">
              <label for="exampleInputEmail1">Deporte:</label>
              <select style="width: 200px" id="select_deporte" name="select_deporte" class="form-control my-colorpicker1" required>
                <option value="">Selecciona un deporte</option> 
                <?php
                  //cREAR un objeto MVC y accionar el controlador para traer todas los deportes y llenar el select
                  $opciones = new MvcController();
                  $opciones -> getDeportesSelectController();
                ?>  
              </select>
            </div> 
            


          </div>

          

          <!-- /.card-body -->
          <div class="card-footer">
            <input title="GUARDAR" name="btnEnviar" type="submit" value="AGREGAR" class="btn btn-primary">
            <input type="button" name="btnButton" onClick="deletee();" class="btn btn-danger" value="CANCELAR">
          </div>
        </form>
      </div>
      </div>
  </div>
</body>
<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>
</html>

<?php
  //crear un bjeto mvc y llamar el controlador registro para usuarios
	$registro = new MvcController();
	$registro -> registroEquipoController();
?>

<script type='text/javascript'>
  function deletee()
    {
    swal({
      title: "Estas seguro?",
      text: "Se perderan los datos ingresados!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Regresando!", {
          icon: "success",
        });
        window.location.href = "index.php?action=vista_equipos";
      } else {
        swal("Bien hecho, todo sigue aqui!");
      }
    });
  }
</script>

