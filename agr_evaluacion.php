<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';
include("tablasUniver/cuerpo.php");

$view = new stdClass();
$view->tabla2 =Aprende::getTabla22();

?>



<p class="lead" style="margin-top: 20px" >Agregar evaluaciones</p> <hr class="my-1" >
    <div  align="right" style="margin-bottom: 5px; margin-top: 5px;">
      <a  class="btn btn-info btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
     Nuevo evaluación
   </a>
    </div>



    <div class="collapse" id="collapseExample" style="margin-bottom: 10px; margin-top: 10px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opc" id="opc" value="3">
                  <input type="text" class="form-control" id="texto1" name="texto1" placeholder="Parte uno" required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="texto2" name="texto2" placeholder="Parte dos" required >
              </div>
            </div>

                        <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="correcta" name="correcta" placeholder="Respuesta correcta" required >
              </div>
            </div>

                        <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="incorrecta" name="incorrecta" placeholder="Respuesta incorrecta" required >
              </div>
            </div>

            <div class="col-sm-3">
              <select class="form-control" id="modulo" name="modulo">
                   <option selected>Modulo</option>
                 <?php    foreach ($view->tabla2 as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['modulo'] ?></option>
                  <?php } ?>  
                      </select>
              </div>



      <div class="col-sm-3">
            <div class="form-group">
          <input type="hidden" name="ID" id="ID" >
         <button type="submit" class="btn btn-info btn-sm">Guardar</button>
           </form>
       </div>
     </div>
</div></div></div>


    <?php

$CantidadMostrar=5;
                    // Validado de la variable GET
    $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
  $TotalReg       =$conexion->query("SELECT * FROM test order by id_t2");
  //Se divide la cantidad de registro de la BD con la cantidad a mostrar 
  $TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
  //Consulta SQL
  $consultavistas ="SELECT * FROM test order by id_t2
                LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
  $consulta=$conexion->query($consultavistas);

    echo "<table id='foo' class='table table-sm table-hover'  >";//iniciamos la tabla
    tablacuerpo::DTablalink3("$consultavistas ",1,$conexion);
    echo " </tbody></table>";


    require_once 'paginador.php';
  ?>
  

    <script>
      $(document).ready(function(){


          $(document).on('click','a[data-role=updateEvaluacion]',function(){

                var id  = $(this).data('id');
                var text1  = $('#'+id).children('td[data-target=Text1]').text();
                var text2  = $('#'+id).children('td[data-target=Text2]').text();
                var correcta  = $('#'+id).children('td[data-target=Correcta]').text();
                var incorrecta  = $('#'+id).children('td[data-target=Incorrecta]').text();
                var idtab  = $('#'+id).children('td[data-target=id_t2]').text();
                var opc = 5;

                $('#ID').val(id);
                $('#texto1').val(text1);
                $('#texto2').val(text2);
                $('#correcta').val(correcta);                
                $('#incorrecta').val(incorrecta);
                $('#opc').val(opc);


                $('#modulo > option[value="'+idtab+'"]').attr('selected', 'selected');
          });

          // Guardar los cambios de las llantas
/*          $('#saveServicio').click(function(){
             var id  = $('#userId').val();
             var Servicio = $('#Servicios').val();
             var Costo = $('#Costos').val();
             var opc = 6; //modifica el servicio

             $.ajax({
                 url      : 'update_objeto.php',
                 method   : 'post',
                 data     : { opc:opc, Servicio: Servicio,Costo: Costo, id: id },
                 success  : function(response){
                     $('#'+id).children('td[data-target=Servicio]').text(Servicio);
                     $('#'+id).children('td[data-target=Costo]').text(Costo);
                     $('#myModServicio').modal('toggle');

                   }
             });
          });*/

    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->


 <?php include 'footer.php'; ?>