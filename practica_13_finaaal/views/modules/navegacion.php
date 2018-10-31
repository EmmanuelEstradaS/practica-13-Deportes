<?php
//iniciar sesion 
  $MVC = new MvcController();
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="wrapper" style="background-color: #05758c;">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-light border-bottom" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars" style="color:white"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?action=dashboard" class="nav-link" style="color:white">Inicio</a>
      </li>
      
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:black">
    <!-- Brand Logo -->
    
    <a style="background-color: #05758c" href="views/dist/img/tutorias3.jpg" class="brand-link">
      <img style="width: 50px" src="views/dist/img/tutorias3.jpg" alt="Sistema de tutorias" title="Tutorias" class="brand-image img-circle elevation-3"
           style="opacity: 1">
      <span class="brand-text font-weight-light">Practica 12: Equipos deportivos</span>
    </a>

    <div align="center">
    <label style="color: white; font: caption;">Practica 12: Equipos deportivos</label>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="">
        <div class="">
          <img width="240px" height="150px" title="foto de perfil" src="views/dist/img/tutorias4.png" class="" alt="User Image" >
        </div>
        <div class="info">
          <a href="#" class="d-block">
            
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <div style="color: white">
          <?php 
            
            
            echo '<div align="center">';
            echo "Usuario : ".$_SESSION["name"] ;
            echo "</div>";
            
           echo "</br>";
            
          ?>
          </div>
          <li class="nav-header">NAVEGACION</li>
          <li class="nav-item">
          
          <li class="nav-item">
                <a href="index.php?action=dashboard" id="n1" class="nav-link">
                  <i class="nav-icon fa fa-dashboard text-info"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          
          <li class="nav-item">
            <a href="index.php?action=vista_deportes" id="n1" class="nav-link">
              <i class="nav-icon fa fa-soccer-ball-o text-info"></i>
              <p>Deportes</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?action=vista_equipos" id="n3" class="nav-link">
              <i class="nav-icon fa fa-gear text-info"></i>
              <p>Equipos</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="index.php?action=vista_jugadores" id="n4" class="nav-link">
              <i class="nav-icon fa fa-bars text-info"></i>
              <p>Jugadores</p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="index.php?action=vista_usuarios" id="n5" class="nav-link">
              <i class="nav-icon fa fa fa-child  text-info"></i>
              <p>Usuarios</p>
            </a>
          </li>

          
          <li class="nav-item">
            <a id="salir_salir" href="index.php?action=salir" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p>Salir</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>    

