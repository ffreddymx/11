	
<?php
include 'header2.php';
include 'capa.php';


$activiades = mysqli_query($conexion,"SELECT * From tabla1 order by id"); 

$user = $_SESSION["id"];

?>
 		<div class="row row-cols-1  row-cols-md-2" style="margin-top:50px">

			    <div class="col mb-8"  align='center' style="margin-top:0px">
			    <div class="card text-white bg-warning  mb-1" style="width: 20rem;">
			   <h5>REPORTE TOTAL</h5>
			      <div class="card-body">
			      	<?php 
       					$table4  = mysqli_query($conexion,"SELECT count(*) as Total, sum(Correctas) as Correctas, sum(Incorrectas) as Incorrectas From historial where iduser = '$user'  "); 
       					$row  = mysqli_fetch_array($table4);
       					echo "Total de evaluaciones : ".$row['Total'];
       					echo "<br>";
       					echo "Total de preguntas : ".$row['Total']*10;
       					echo "<br>";
       					echo "Total de errores : ".$row['Incorrectas'];
			      	   ?>

			      </div>
			    </div>
			    </div>
		 
		 </div>

		<div class="row row-cols-1  row-cols-md-2" style="margin-top:50px">

		      <?php    while($row2  = mysqli_fetch_array($activiades)){ $val = $row2['id'];  ?>

			    <div class="col mb-8"  align='center' style="margin-top:0px">
			    <div class="card text-white bg-danger  mb-1" style="width: 20rem;">
			    	<h5><?php echo $row2['modulo'] ?></h5>
			      <div class="card-body">

			      	<?php 
       					$table  = mysqli_query($conexion,"SELECT count(*) as Total, sum(Correctas) as Correctas, sum(Incorrectas) as Incorrectas From historial where idt2= '$val' and iduser = '$user' group by idt2 "); 
       					$row  = mysqli_fetch_array($table);
       					echo "Total de evaluaciones : ".$row['Total'];
       					echo "<br>";
       					echo "Total de preguntas : ".$row['Total']*10;
       					echo "<br>";
       					echo "Total de errores : ".$row['Incorrectas'];
			      	   ?>

			      </div>
			    </div>
			    </div>

		<?php } ?>


		 </div>




		


 <?php include 'footer.php'; ?>