<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';


$id = $_GET['id'];//d la tabla1

 $_SESSION["actividad"] = $id;

$view = new stdClass();
$view->tabla2 = Aprende::getTabla2($id);

?>


<div class="card-group" style="margin-top: 30px" >
<?php    foreach ($view->tabla2 as $value) { ?>

		  <div class="card bg-warning" style="margin: 1px;    ">
<!-- 		    <img src="..." class="card-img-top" alt="...">
 -->		    <div class="card-body">
		      <h5 class="card-title">	<?php echo $value['modulo'] ?> </h5>
		      <p class="card-text"><?php //echo $value['descrito'] ?></p>
		    </div>
		    <div class="card-footer">
		     <a href="test.php?id=<?php echo $value['id'] ?>"> <small class="text-muted"> Iniciar prueba </small></a> 
		    </div>
		  </div>
<?php } ?>
</div>


 <?php include 'footer.php'; ?>