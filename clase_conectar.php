<?php 

class conexion{
	//------------------------------------------------------------------
	//atributos de la clase
	public $servidor;
	public $usuario;
	public $pass;
	public $bd;
	public $conn;
	//------------------------------------------------------------------
	//constructor
	function __construct($servidor,$usuario,$pass,$bd){
		$this->servidor = $servidor;
		$this->usuario = $usuario;
		$this->pass = $pass;
		$this->bd = $bd;
	}
	//------------------------------------------------------------------
	//funciones
	public function conectar(){
		$this->conn = new mysqli($this->servidor,$this->usuario,$this->pass,$this->bd);
		$this->conn->set_charset("utf8");
		return $this->conn;
	}
	//------------------------------------------------------------------
	//
	public function verifica_conn(){

		if (mysqli_connect_errno())
		  {
		  	//echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  	return "Failed to connect to MySQL: " . mysqli_connect_error();
		  }else{
		  	//echo "ok se ha conectado.";
		  	return "ok se ha conectado.";		  	
		  }
	}
	//------------------------------------------------------------------
	//
	public function estado_conn(){
		$conn = $this->conn;
		print_r(mysqli_get_connection_stats($conn));
	}
	//------------------------------------------------------------------
	public function cerrar_conn(){
		mysqli_close($this->conn);
	}
	//------------------------------------------------------------------
}


 ?>

