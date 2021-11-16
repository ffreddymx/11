<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';


$id = $_GET['id'];

$view = new stdClass();
$view->test = Aprende::getTest($id);
$view->tabla2=Aprende::getTablaMod($id);
foreach ($view->tabla2 as $modulo)

?>


<input type="hidden"  id="iduser" value="<?php echo $_SESSION["id"] ?>">	
<p class="lead" style="margin-top: 20px" ><?php echo $modulo["modulo"] ?> </p> <hr class="my-4" >




<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top: 20px" data-interval="false" >

  <div class="carousel-inner" >

<?php $aux = 0;   foreach ($view->test as $value) { $aux++; $ran = rand(1, 2);//($value['id']-1)==0 ?>

    <div class="carousel-item <?php if($aux-1==0) echo "active"; ?> ">

<input type="hidden"  id="cor<?php echo $aux?>" value="<?php echo $value['Correcta'] ?>">	
<input type="hidden"  id="inco<?php echo $aux?>" value="<?php echo $value['Incorrecta'] ?>">	
<input type="hidden"  id="tabla" value="<?php echo $value['id_t2'] ?>">	

		<div class="card-deck d-block w-100" style="padding-right: 140px" >
		  <div class="card">
		<div class="card-header bg-warning"><h4><?php echo $value['Text1']?><a id="res<?php echo $aux;?>">___</a><?php echo $value['Text2'] ?></h4> </div>
		  
		  <div class="card-body alert-dark" style="height: 300px"  >

		<h4 style="margin-top: 40px;">¿Cual es la respuesta correcta?</h4>
          <div class="form-row" >
            <div class="col-sm-4" >
              <div class="form-group">
   <?php if ($ran==1) {?>           	
  <button id="correcta<?php echo $aux?>" type="submit" class="btn btn-primary" ><?php echo $value['Correcta'] ?></button>
       <?php } else {?>      
         <button id="incorrecta<?php echo $aux?>" type="submit" class="btn btn-primary" ><?php echo $value['Incorrecta'] ?></button>
     	<?php } ?>      


	         </div>
	       </div>

            <div class="col-sm-4">
              <div class="form-group">
    <?php if ($ran==1) {?>           	
  <button id="incorrecta<?php echo $aux?>" type="submit" class="btn btn-primary" ><?php echo $value['Incorrecta'] ?></button>
         <?php } else {?>      
  <button id="correcta<?php echo $aux?>" type="submit" class="btn btn-primary" ><?php echo $value['Correcta'] ?></button>
     	<?php } ?>      

	         </div>
	       </div>
      </div>
  </div>


	   </div>
	</div>
</div>

<?php } ?>


  </div>

   <button id="next"  disabled class="carousel-control-next btn btn-dark" href="#carouselExampleCaptions"  data-slide="next" >
    Siguiente
 </button>

</div> <!--fin del carrucel -->
<div id="respuesta" style="display: none" class="alert alert-success"></div>
<div id="respuesta2" style="display: none" class="alert alert-danger"></div>

<!--Alert-->
<div class="modal" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Calificación </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">

        <p><?php echo $modulo["modulo"] ?></p>



<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" align="center">Correctas</h5>
      <h2 class="card-text" id="cor" align="center"></h2>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" align="center">Incorrectas</h5>
      <h2 class="card-text" id="inc" align="center"></h2>
    </div>
  </div>
</div>



      </div>
      <div class="modal-footer">
        <a href="actividad.php?id=<?php echo $_SESSION["actividad"] ?>" class="btn btn-secondary" >Cerrar</a>
      </div>
    </div>
  </div>
</div>


    <script>
      $(document).ready(function(){

/*      	 $('#correctaxx').click(function(){
			var correcta = [];//almacenamos la correcta
      	 	for (var i = 1; i <= 2; i++) {
      	 		var corr = $('#cor'+i).val(); 
      	 		correcta.push(corr); 
      	 		//alert("guarda"+i+"de"+corr);
      	 	}
      });*/

var calif=0;


 $('#next').click(function(){
setTimeout(function(){
       $("#next").prop("disabled", true);
    },500);
 });

function enadis(i){ 
	var opc = i;
 	var cor =  $('#cor'+opc).val(); 
	var res = $('#correcta'+opc).text(); 
	 if( cor == res) {
	   $('#res'+opc).text(res);
	   $("#respuesta").text("Respuesta Correcta !!");
	   calif=calif+1;
	 } 
	   $("#respuesta").show("slow");
	   $("#respuesta").hide(1000);
	    
	document.getElementById("correcta"+opc).disabled = true;
	document.getElementById("incorrecta"+opc).disabled = true;
	document.getElementById("next").disabled = false;
	}

function enadis2(i){ 
	var opc = i;
 	var cor =  $('#cor'+opc).val(); 
	var res = $('#incorrecta'+opc).text(); 
	 if( cor != res) {
	   $('#res'+opc).text(res);
	   $("#respuesta2").text("Respuesta Incorrecta !!");
	 }
	   $("#respuesta2").show("slow");
	   $("#respuesta2").hide(1000);

	document.getElementById("correcta"+opc).disabled = true;
	document.getElementById("incorrecta"+opc).disabled = true;
	document.getElementById("next").disabled = false;
	}
						
					 $('#correcta1').click(function(){
							   enadis(1);
						});

					 $('#correcta2').click(function(){
							   enadis(2);
						});

					 $('#correcta3').click(function(){
	   							enadis(3);	
						});

					 $('#correcta4').click(function(){
							   enadis(4);
						});

					 $('#correcta5').click(function(){
							   enadis(5);					   
						});

					 $('#correcta6').click(function(){
	   							enadis(6);				   
						});

					 $('#correcta7').click(function(){
							   enadis(7);				   
						});

					 $('#correcta8').click(function(){
								   enadis(8);			   
						});

					 $('#correcta9').click(function(){
	 							  enadis(9);		   
						});

					$('#correcta10').click(function(){
							   enadis(10);
						  
						  $("#next").prop("disabled", true);
				          var iduser = $("#iduser").val();
				          var tabla = $("#tabla").val();
				          var opc = 4;
			              params={};
			              params.iduser=iduser;
			              params.opc=opc;
			              params.correctas=calif;
			              params.incorrectas=10-calif;
			              params.tabla=tabla;


			              $.post('nuevo_objeto.php',params,function(data){
                                          });	

					setTimeout(function(){
					$('#myModal').modal('toggle');
					$('#cor').text(calif);
					$('#inc').text(10-calif);

				    },1500);
   							

						});
////////////////////////////////////////////////////////
					 $('#incorrecta1').click(function(){
						enadis2(1);						   
						});					 

					 $('#incorrecta2').click(function(){
						enadis2(2);						   
						});

					 $('#incorrecta3').click(function(){
						enadis2(3);						   
						});	

					 $('#incorrecta4').click(function(){
						enadis2(4);						   
						});					 

					 $('#incorrecta5').click(function(){
						enadis2(5);						   
						});

					 $('#incorrecta6').click(function(){
						enadis2(6);						   
						});					 
					 $('#incorrecta7').click(function(){
						enadis2(7);						   
						});					 

					 $('#incorrecta8').click(function(){
						enadis2(8);						   
						});

					 $('#incorrecta9').click(function(){
						enadis2(9);						   
						});					 
					 $('#incorrecta10').click(function(){
						enadis2(10);
						  $("#next").prop("disabled", true);
				          var iduser = $("#iduser").val();
				          var tabla = $("#tabla").val();
				          var opc = 4;
			              params={};
			              params.iduser=iduser;
			              params.opc=opc;
			              params.correctas=calif;
			              params.incorrectas=10-calif;
			              params.tabla=tabla;


			              $.post('nuevo_objeto.php',params,function(data){
                                          });	

					setTimeout(function(){
					$('#myModal').modal('toggle');
					$('#cor').text(calif);
					$('#inc').text(10-calif);			

				    },1500);
										   
						});					 
});

  </script>



 <?php include 'footer.php'; ?>