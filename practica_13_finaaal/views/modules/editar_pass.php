
<!--cuerpo de la pagina-->
<!DOCTYPE html>
<html>
<head>
  <title>Recuperar contraseña</title>
</head>
<body> 
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Ingresar usuario :</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="card-body">
           
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario:</label>
              <input type="text" style="width: 600px" name="txtEmail" class="form-control" id="txtNombre"  required  value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nueva contraseña:</label>
              <input type="password" style="width: 600px" name="txtPassword" class="form-control" id="txtAutor"  required  value=>
            </div>




          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <input title="Agregar" name="btnEnviar" type="submit" value="ACTUALIZAR" class="btn btn-primary">
            <input type="button" name="btnButton" onClick="deletee();" class="btn btn-danger" value="CANCELAR">
          </div>
        </form>
        <?php
          //Actualizar alumno
          $actualizar = new MvcController();
          $actualizar -> actualizarPassController();
        ?>  
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
        window.location.href = "index.php";
      } else {
        swal("Bien hecho, todo sigue aqui!");
      }
    });
  }
</script>

