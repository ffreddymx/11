<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';

$actividad = $_GET["id"];

$view = new stdClass();
$view->tabla1 =Aprende::getTabla2($actividad);

?>

<p class="lead" style="margin-top: 20px" >Modulos de Aprendizaje </p> <hr class="my-4" >


  <?php    
    $contador=1;

  foreach ($view->tabla1 as $value) { 
  
    ?>

<?php if ($contador == 1 || $contador==4) {
echo "<div class='card-group'>";
} 
?>

        <div class="card">
      <div class="embed-responsive embed-responsive-16by9">
        <video width="320" height="240" controls>
    <source src="aprendemp4/<?php echo $value['video'] ?> " type="video/mp4">
</video>
      </div>   
      <div class="card-body">
            <h5 class="card-title"><?php echo $value['modulo'] ?></h5>
          </div>
        </div>

<?php 

if ($contador == 3 || $contador==6) {
echo "</div>";
} 
?>
<?php 

$contador++;

} ?>



<script >

$('.carousel').carousel();


</script>

 <?php include 'footer.php'; ?>