<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Practica 12: Equipos deportivos</title>
</head>
<body class="hold-transition login-page" style="background-color: #05758c;">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b style="color: white;">Practica 12: Equipos deportivos</b></a>
    <hr style="border-color: white;">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <strong><p class="login-box-msg">Iniciar Sesion</p></strong>

<!-- Formulario de login -->
      <form method="post">
        <div class="form-group has-feedback">
          <label>Username: </label>
          <input type="text" class="form-control" placeholder="Email" name="txtEmail">
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <label>Contraseña: </label>
          <input type="password" class="form-control" placeholder="Password" name="txtPassword">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <input type="submit" class="btn btn-block btn-flat" style="background-color: #dd7d00; color: white;" name="btnIngresar" value="Acceder"></input>
          </div>  


          

          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

</body>
</html>
<?php 
  $mvc = new MvcController();
  $mvc -> ingresoUsuarioController();
?>
