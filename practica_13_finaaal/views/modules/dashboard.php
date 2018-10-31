<?php
//iniciar la sesion y redireccionar al los productos
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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DASHBOARD</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="./views/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="./views/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="./views/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">
  <div class="content-wrapper">

<!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                    $cantidad = new MvcController();
                    $cantidad-> getCantidadUsuariosController();
                ?>

                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          
          
          

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                    $cantidad = new MvcController();
                    $cantidad -> getCantidadDeportesController();
                ?>

                <p>Deportes</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="?action=vista_deportes" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php 
                    $cantidad = new MvcController();
                    $cantidad -> getCantidadEquiposController();
                ?>

                <p>Equipos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="?action=vista_deportes" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          
        </div>
        <!-- CALENDARIOOOOOOOOOOOOOO -->
 
    <div class="col-md-9">
    <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>October 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-09-30"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2018-09-30">30</td><td class="fc-day-number fc-mon fc-past" data-date="2018-10-01">1</td><td class="fc-day-number fc-tue fc-past" data-date="2018-10-02">2</td><td class="fc-day-number fc-wed fc-past" data-date="2018-10-03">3</td><td class="fc-day-number fc-thu fc-past" data-date="2018-10-04">4</td><td class="fc-day-number fc-fri fc-past" data-date="2018-10-05">5</td><td class="fc-day-number fc-sat fc-past" data-date="2018-10-06">6</td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-07"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-08"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-09"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-10"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-11"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-12"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2018-10-07">7</td><td class="fc-day-number fc-mon fc-past" data-date="2018-10-08">8</td><td class="fc-day-number fc-tue fc-past" data-date="2018-10-09">9</td><td class="fc-day-number fc-wed fc-past" data-date="2018-10-10">10</td><td class="fc-day-number fc-thu fc-past" data-date="2018-10-11">11</td><td class="fc-day-number fc-fri fc-past" data-date="2018-10-12">12</td><td class="fc-day-number fc-sat fc-past" data-date="2018-10-13">13</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-14"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-15"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-16"></td><td class="fc-day fc-widget-content fc-wed fc-today fc-state-highlight" data-date="2018-10-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2018-10-14">14</td><td class="fc-day-number fc-mon fc-past" data-date="2018-10-15">15</td><td class="fc-day-number fc-tue fc-past" data-date="2018-10-16">16</td><td class="fc-day-number fc-wed fc-today fc-state-highlight" data-date="2018-10-17">17</td><td class="fc-day-number fc-thu fc-future" data-date="2018-10-18">18</td><td class="fc-day-number fc-fri fc-future" data-date="2018-10-19">19</td><td class="fc-day-number fc-sat fc-future" data-date="2018-10-20">20</td></tr></thead><tbody><tr><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-event fc-not-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"> <span class="fc-title">Long Event</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-21"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-22"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-23"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-24"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-25"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-26"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-10-21">21</td><td class="fc-day-number fc-mon fc-future" data-date="2018-10-22">22</td><td class="fc-day-number fc-tue fc-future" data-date="2018-10-23">23</td><td class="fc-day-number fc-wed fc-future" data-date="2018-10-24">24</td><td class="fc-day-number fc-thu fc-future" data-date="2018-10-25">25</td><td class="fc-day-number fc-fri fc-future" data-date="2018-10-26">26</td><td class="fc-day-number fc-sat fc-future" data-date="2018-10-27">27</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 80px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-28"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-29"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-30"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-31"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-01"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-02"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2018-10-28">28</td><td class="fc-day-number fc-mon fc-future" data-date="2018-10-29">29</td><td class="fc-day-number fc-tue fc-future" data-date="2018-10-30">30</td><td class="fc-day-number fc-wed fc-future" data-date="2018-10-31">31</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2018-11-01">1</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2018-11-02">2</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2018-11-03">3</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 82px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2018-11-04"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-11-05"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-11-06"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-11-07"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-08"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-09"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2018-11-04">4</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2018-11-05">5</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2018-11-06">6</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2018-11-07">7</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2018-11-08">8</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2018-11-09">9</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2018-11-10">10</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
   
  <!-- FIN DE CALENDARIOOOOOOOOOOOOOO -->
        </div>
        
        </div>
<!-- ./wrapper -->
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
              <script type="text/javascript">
                window.onload = function() {
                  document.getElementById("n1").style.background='#53585A';
                }
              </script>