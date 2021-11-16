<?php
include 'capa.php';
include("save_objeto.php");


switch ($_POST["opc"]) {

	case '1': 
	$salvarE = new Aprende();
	$salvarE->insertUser($_POST["usuario"],$_POST["password"],$_POST["nombre"],$_POST["tipo"],$_POST["grado"],$_POST["grupo"]);
	header("Location:user.php");
	break;

	case '2': 

	$type=$_FILES['img_up']['type'];
	$tmp_name = $_FILES['img_up']["tmp_name"];
	$name = $_FILES['img_up']["name"];
	$nuevo_path="aprendemp4/".$name;
	move_uploaded_file($tmp_name,$nuevo_path);


	$salvarE = new Aprende();
	$salvarE->insertActividad($_POST["actividad"],$_POST["modulo"],$name);
	header("Location:agr_actividad.php");
	break;

	case '3': 
	$salvarE = new Aprende();
	$salvarE->insertEvaluacion($_POST["texto1"],$_POST["texto2"],$_POST["correcta"],$_POST["incorrecta"],$_POST["modulo"]);
	header("Location:agr_evaluacion.php");
	break;

	case '4': 
	$salvarE = new Aprende();
	$salvarE->delResultado($_POST["iduser"],$_POST["tabla"]);
	$salvarE->insertResultado($_POST["iduser"],$_POST["correctas"],$_POST["incorrectas"],$_POST["tabla"]);
	$salvarE->insertHistorial($_POST["iduser"],$_POST["correctas"],$_POST["incorrectas"],$_SESSION["actividad"]);



	break;

	case '5': 
    $id = $_POST["ID"];
    $texto1 = $_POST["texto1"];
    $texto2 = $_POST["texto2"];
    $correcta = $_POST["correcta"];    
    $incorrecta = $_POST["incorrecta"];
    $modulo = $_POST["modulo"];
    $result  = mysqli_query($conexion, "UPDATE test SET Text1='$texto1',Text2='$texto2',Correcta='$correcta',Incorrecta='$incorrecta',id_t2='$modulo' WHERE id='$id' ");
    if($result){ echo 'data updated'; }
    mysqli_close($conexion);
    header("Location:agr_evaluacion.php");
	break;

	case '6': 

	$type=$_FILES['img_up']['type'];
	$tmp_name = $_FILES['img_up']["tmp_name"];
	$name = $_FILES['img_up']["name"];
	$nuevo_path="aprendemp4/".$name;
	move_uploaded_file($tmp_name,$nuevo_path);


    $id = $_POST["ID"];
    $actividad = $_POST["actividad"];
    $modulo = $_POST["modulo"];


    $result  = mysqli_query($conexion, "UPDATE tabla2 SET modulo='$actividad',id_t1='$modulo', video = '$name' WHERE id='$id' ");
    if($result){ echo 'data updated'; }
    mysqli_close($conexion);
    header("Location:agr_actividad.php");
	break;

	case '17': 
    $id = $_POST["ID"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $result  = mysqli_query($conexion, "UPDATE userxwz SET usuario='$usuario',password='$password',Nombre='$nombre',Tipo='$tipo' WHERE Id='$id' ");
    if($result){ echo 'data updated'; }
    mysqli_close($conexion);
    header("Location:user.php");
	break;

	default:
		# code...
	break;
}






?>
