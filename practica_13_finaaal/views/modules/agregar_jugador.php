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
	<title>Agregar Jugador</title>
</head>
<body> 
	<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Agregar Jugador</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="card-body">
            
            <div class="form-group">
              <label for="txtNombre">Nombre:</label>
              <input type="text" style="width: 300px" name="txtNombre" class="form-control" id="txtNombre" placeholder="Nombre" required>
            </div>
          </div>
          <div class="card-body">
            
            <div class="form-group">
              <label for="txtApellido">Apelilidos:</label>
              <input type="text" style="width: 300px" name="txtApellido" class="form-control" id="txtApellido" placeholder="Apellidos" required>
            </div>
          </div>
          <div class="card-body">
            
            <div class="form-group">
              <label for="txtEdad">Edad:</label>
              <input type="text" style="width: 300px" name="txtEdad" class="form-control" id="txtEdad" placeholder="Edad" required>
            </div>
          </div>
          <div class="card-body">
            
            <div class="form-group">
              <select class="form-control" name="txtPosicion">
                <option selected disabled>Posicion</option>
                <option value="Portero">Portero</option>
                <option value="Defensa">Defensa</option>
                <option value="Lateral">Lateral</option>
                <option value="Medio">Medio</option>
                <option value="Delantero">Delantero</option>
              </select>
            </div>
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
	$registro -> registroJugadorController();
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
        window.location.href = "index.php?action=vista_jugadores";
      } else {
        swal("Bien hecho, todo sigue aqui!");
      }
    });
  }
</script>