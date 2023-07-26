<?php

$item = null;
$valor = null;

$libros = ControladorLibros::ctrMostrarLibros($item,$valor);

foreach ($libros as $key => $value) {

  $datos[] = $value["id_libros"];
}

$totallibros = count($datos);

$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

foreach ($usuarios as $key => $valueU) {

  $datosU[] = $valueU["id_usuarios"];
}

$totalusuarios = count($datosU);


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $totallibros;?></h3>

              <p>Libros</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i> <!-- Icono de libro -->
            </div>
            <a href="libros" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">

              
              <h3><?php echo $totalusuarios;?></h3>

              <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="usuarios" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>