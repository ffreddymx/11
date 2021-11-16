<?php



class tablacuerpo{


            public static function DTablalink1($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Acción</th></tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['Id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a  class="btn btn-secondary btn-sm" data-toggle="collapse" href="#collapseExample" data-role="updateServicio" data-id="<?php echo $row["Id"] ?>">Modificar</a></td>
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }



            public static function DTablalink2($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Acción</th></tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a class="btn btn-secondary btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample"  data-role="updateActividad" data-id="<?php echo $row["id"] ?>">Modificar</a></td>
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }


            public static function DTablalink3($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Acción</th></tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a class="btn btn-secondary btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample"  data-role="updateEvaluacion" data-id="<?php echo $row["id"] ?>">Modificar</a></td>
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }



            public static function DTablalink4($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a href='#' data-role="updateServicio" data-id="<?php echo $row["id"] ?>">Modificar</a></td>
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }

}



?>
