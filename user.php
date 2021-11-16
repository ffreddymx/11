<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';
include("tablasUniver/cuerpo.php");

$view = new stdClass();
$view->tabla1 =Aprende::getTabla1();

?>



<p class="lead" style="margin-top: 20px" >Usuarios</p> <hr class="my-4" >
    <div  align="right" style="margin-bottom: 5px; margin-top: 5px;">
      <a  class="btn btn-info btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
     Nuevo usuario
   </a>
    </div>



    <div class="collapse" id="collapseExample" style="margin-bottom: 10px; margin-top: 10px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opc" value="1" id="opc">
                          <input type="hidden" name="ID" id="ID" >

                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario.." required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="password" name="password" placeholder="Password.." required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre.." required >
              </div>
            </div>

            <div class="col-sm-3">
              <select class="form-control" id="tipo" name="tipo">
                    <option value="Administrador">Administrador</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Alumno">Alumno</option>
                      </select>
              </div>


      <div class="col-sm-3">
            <div class="form-group">
         <button type="submit" class="btn btn-info btn-sm">Guardar</button>
         <a  class="btn btn-info btn-sm" data-toggle="collapse" href="#collapseExample">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>






    <?php

    //phpmysql_query("SET NAMES 'utf8'");

    echo "<table  class='table-sm table table-hover'  >";//iniciamos la tabla

    tablacuerpo::DTablalink1("SELECT * FROM userxwz ",1,$conexion);

     ?>
            </tbody>
            </table>

  

    <script>
      $(document).ready(function(){
        //  Se agregan la compra de las llantas updateLLanta
          $(document).on('click','a[data-role=updateServicio]',function(){

                var id  = $(this).data('id');
                var usuario  = $('#'+id).children('td[data-target=usuario]').text();
                var password  = $('#'+id).children('td[data-target=password]').text();
                var tipo  = $('#'+id).children('td[data-target=Tipo]').text();
                var nombre  = $('#'+id).children('td[data-target=Nombre]').text();

                var opc = 17;
                $('#usuario').val(usuario);
                $('#password').val(password);
                $('#nombre').val(nombre);
                $('#opc').val(opc);
                $('#ID').val(id);
                $('#tipo > option[value="'+tipo+'"]').attr('selected', 'selected');
          });

          // Guardar los cambios de las llantas
          $('#saveServicio').click(function(){
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
          });





    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->


 <?php include 'footer.php'; ?>
