<?php

include_once('clases/clasConexion.php');
include_once('clases/clasSquery.php');


/*******************  aqui defines  *****************************/


class Aprende
{

	public  $id,$usuario,$password,$nombre,$tipo,$grado,$grupo;
	public $actividad,$modulo;
	public $texto1,$texto2,$correcta,$incorrecta;

 function __construct() {

 		//$this->marca="";
    }


	 public function getTabla1()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  tabla1  ");
		return $obj_cliente->fetchAll();
		}
	 public function getTabla22()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  tabla2  ");
		return $obj_cliente->fetchAll();
		}

	 public function getTabla2($id)
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  tabla2 where id_t1 = '$id'  ");
		return $obj_cliente->fetchAll();
		}

	 public function getTablaMod($id)
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT modulo FROM  tabla2 where id = '$id'  ");
		return $obj_cliente->fetchAll();
		}

	  public function getTest($id)
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  test where id_t2 = '$id'  ");
		return $obj_cliente->fetchAll();
		}


	 public function getUser()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  userxwz  ");
		return $obj_cliente->fetchAll();
		}

	 public function getEvaluaciones()
		{
		$obj_cliente=new sQuery();
		$obj_cliente->executeQuery("SELECT *  FROM  test  ");
		return $obj_cliente->fetchAll();
		}


	public function insertUser($usuario,$password,$nombre,$tipo,$grado,$grupo)
	{
			$this->usuario = $usuario;
			$this->password = $password;
			$this->nombre = $nombre;
			$this->tipo = $tipo;
			$this->grado = $grado;
			$this->grupo = $grupo;
			$obj_cliente=new sQuery();
			$query="INSERT into userxwz(usuario,password,Nombre,Tipo,Grado,Grupo)
			        values('$this->usuario','$this->password','$this->nombre','$this->tipo','$this->grado','$this->grupo')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}

	public function insertEvaluacion($texto1,$texto2,$correcta,$incorrecta,$modulo)
	{
			$this->texto1 = $texto1;
			$this->texto2 = $texto2;
			$this->correcta = $correcta;
			$this->incorrecta = $incorrecta;
			$this->modulo = $modulo;
			$obj_cliente=new sQuery();
			$query="INSERT into test(Text1,Text2,Correcta,Incorrecta,id_t2)
			        values('$this->texto1','$this->texto2','$this->correcta','$this->incorrecta','$this->modulo')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}

	public function insertActividad($actividad,$modulo,$video)
	{
			$this->actividad = $actividad;
			$this->modulo = $modulo;
			$this->video = $video;

			$obj_cliente=new sQuery();
			$query="INSERT into tabla2(modulo,id_t1,video)
			        values('$this->actividad','$this->modulo','$this->video')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}
	
	public function insertResultado($iduser,$correctas,$incorrectas,$tabla)
	{
			$this->iduser = $iduser;
			$this->correctas = $correctas;
			$this->incorrectas = $incorrectas;
			$this->tabla = $tabla;

			$obj_cliente=new sQuery();
			$query="INSERT into resultado(iduser,Correctas,Incorrectas,idt2)
			        values('$this->iduser','$this->correctas','$this->incorrectas','$this->tabla')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}



	public function insertHistorial($iduser,$correctas,$incorrectas,$tabla)
	{
			$this->iduser = $iduser;
			$this->correctas = $correctas;
			$this->incorrectas = $incorrectas;
			$this->tabla = $tabla;

			$obj_cliente=new sQuery();
			$query="INSERT into historial(iduser,Correctas,Incorrectas,idt2)
			        values('$this->iduser','$this->correctas','$this->incorrectas','$this->tabla')";
			$obj_cliente->executeQuery($query);
			return $obj_cliente->getAffect();
	}





	public function delResultado($iduser,$idtabla)	// elimina el embarque comlepleto con el folio
	{
		$obj_cliente=new sQuery();
		$query="DELETE from resultado where iduser ='$iduser' and idt2 ='$idtabla' ";
		$obj_cliente->executeQuery($query); // ejecuta la consulta para  borrar el cliente
		return $obj_cliente->getAffect(); // retorna todos los registros afectados
	}


}//fin
?>
