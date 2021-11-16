<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';
include("tablasUniver/cuerpo.php");

$view = new stdClass();
$view->tabla1 =Aprende::getTabla1();

?>



<p class="lead" style="margin-top: 20px" >Agregar actividades</p> <hr class="my-1" >
    <div  align="right" style="margin-bottom: 5px; margin-top: 5px;">
      <a  class="btn btn-info btn-sm " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
     Nuevo actividad
   </a>
    </div>



    <div class="collapse" id="collapseExample" style="margin-bottom: 10px; margin-top: 10px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">

           <form name="form" action="nuevo_objeto.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="opc" id="opc" value="2">

              <select class="form-control" id="modulo" name="modulo">
                 <?php    foreach ($view->tabla1 as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['modulo'] ?></option>
                  <?php } ?>  
                      </select>
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
     
                  <input type="text" class="form-control" id="actividad" name="actividad" placeholder="Actividad.." required >
              </div>
            </div>



            <div class="col-sm-3">
                 <div class="form-group">
                      <label for="exampleInputEmail1">Seleccione el video</label>
                      <input type="file" name="img_up" id="img_up" >
                  </div>
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
  $TotalReg       =$conexion->query("SELECT tt.id, tt.id_t1, t.modulo as Tema, tt.modulo as Tema2,video FROM tabla2 as tt inner join tabla1 as t on t.id=tt.id_t1 
      order by tt.id_t1 ");
  //Se divide la cantidad de registro de la BD con la cantidad a mostrar 
  $TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
  //Consulta SQL
  $consultavistas ="SELECT tt.id, tt.id_t1, t.modulo as Tema, tt.modulo as Tema2,video FROM tabla2 as tt inner join tabla1 as t on t.id=tt.id_t1 
      order by tt.id_t1 
                LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
  $consulta=$conexion->query($consultavistas);

    echo "<table id='foo' class='table table-sm table-hover'  >";//iniciamos la tabla
    tablacuerpo::DTablalink2("$consultavistas ",1,$conexion);
    echo " </tbody></table>";


    require_once 'paginador.php';
  ?>














      <script>
      $(document).ready(function(){


          $(document).on('click','a[data-role=updateActividad]',function(){

                var id  = $(this).data('id');
                var actividad  = $('#'+id).children('td[data-target=Tema2]').text();
                var modulo  = $('#'+id).children('td[data-target=Tema]').text();
                var idt1  = $('#'+id).children('td[data-target=id_t1]').text();
                var video  = $('#'+id).children('td[data-target=video]').text();

                var opc = 6;
                $('#ID').val(id);
                $('#actividad').val(actividad);
                $('#img_up').val(video);
                $('#opc').val(opc);
                $('#modulo > option[value="'+idt1+'"]').attr('selected', 'selected');

          });
    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->


 <?php include 'footer.php'; ?>