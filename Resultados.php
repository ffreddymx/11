<?php
include 'header.php';
include 'capa.php';
include("tablasUniver/cuerpo.php");

$user = $_SESSION["id"];
?>


<p class="lead" style="margin-top: 20px" >Resultados de las evaluaciones</p> <hr class="my-4" >

    <?php
	    echo "<table class='table table-hover'  >";//iniciamos la tabla
	    tablacuerpo::DTablalink4("SELECT R.id,U.Nombre,T.modulo as Modulos,TT.modulo as Prueba,R.Correctas,R.Incorrectas FROM resultado as R 
INNER join userxwz as U on R.iduser=U.Id
INNER join tabla2 as TT on TT.id = R.idt2
INNER join tabla1 as T on T.id = TT.id_t1 where U.Id = '$user' ",0,$conexion);
	     ?>
      </tbody>
    </table>
 
 <?php include 'footer.php'; ?>