<?php 

/*
Esto es un data access object, un objeto para acceder a la información,
desde aca se ejecutan los querys a la base de datos, por lo tanto aca es donde
van los datos de conexion.
*/

//include("datos_conexion.php"); 
include("clase_conectar.php");

	
class DAO_ejemplo {

	public $conecta;
	public $arr;
	public $conexion_1;

	function __construct(){
		//$this->query = $query;
		$this->arr = array();
	}

	//----------------------------------------------
	public function conectar(){

		$servidor="localhost";
		$usuario="root";
		$pass="Lunel2016";
		$bd="campanas";

		$this->conexion_1 = new conexion($servidor,$usuario,$pass,$bd);

		$this->conecta = $this->conexion_1->conectar();

	}
	//----------------------------------------------

	public function consultar($query){

		//conecta a la base
		$this->conectar();

		//crea una variable con el resultado de la consulta
		$resultado = $this->conecta->query($query);

		//crea un array con los registros de la consulta
		while ($fila = $resultado->fetch_assoc()){
				$this->arr[] = $fila;
			}

		//retorna el array con los valores
		return $this->arr;

		//cierra la conexion a la base
		$this->conexion_1->cerrar_conn();
	}

	//----------------------------------------------

}

 ?>