<?php
include 'capa.php';
?>
<nav class="navbar navbar-dark bg-info">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="inicio.php"><?php echo $_SESSION["nombre"];?>  </a>
    </div>
<ul class="nav ">

  <li class="nav-item">
    <a class="navbar-brand " href="inicio.php">Inicio</a>
  </li>


<?php if($_SESSION["tipo"]=='Administrador') { ?>

  <li class="nav-item">
    <a class="navbar-brand" href="user.php ">Usuario</a>
  </li>

  <li class="nav-item">
    <a class="navbar-brand" href="agr_actividad.php">Actividades</a>
  </li>
  <li class="nav-item">
    <a class="navbar-brand" href="agr_evaluacion.php">Evaluaciones</a>
  </li>

<?php } ?>

  <li class="nav-item">
    <a class="navbar-brand" href="reporte.php">Reporte</a>
  </li>

  <li class="nav-item">
    <a class="navbar-brand " href="exit.php" >Salir</a>
  </li>

</ul>
</div>
</nav>
