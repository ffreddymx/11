	
<?php
include 'header2.php';
include 'capa.php';

       $table  = mysqli_query($conexion,"SELECT * From inicio"); 

?>


		<div class="row row-cols-1  row-cols-md-2" style="margin-top:50px">
			
		      <?php    while($row  = mysqli_fetch_array($table)){ ?>

			    <div class="col mb-8"  align='center' style="margin-top:20px">
			    <div class="card text-white bg-warning  mb-3" style="width: 20rem;">
			      <img src="img/<?php echo $row['avatar']?>"  style="width: 100px;"  class="card-img-top" alt="...">
			      <div class="card-body">
			        <a class="btn btn-info" href="<?php echo $row['inicio']?>.php"   role="button"><?php echo $row['inicio']?></a>
			      </div>
			    </div>
			    </div>

		<?php } ?>

		 </div>

 
 <?php include 'footer.php'; ?>