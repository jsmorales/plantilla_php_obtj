<?php 

	
	include("DAO.php");


	class controlador {

		//----------------------------------------------------------------------
		//
		public $acceso_data;
		public $res_consulta;

		function __construct(){

			$this->acceso_data = new DAO_ejemplo();

		}
		//----------------------------------------------------------------------

		//----------------------------------------------------------------------
		//
		public function muestra_index(){

			//$this->acceso_data = new DAO_ejemplo();	
			/*
				aca ya se usan las clases anteriores de una forma específica.
			*/

			$this->res_consulta = $this->acceso_data->consultar("select * from tipo_aliado");

			foreach ($this->res_consulta as $key => $value) {
				# code...
				echo "La llave es: ".$key." y el valor es: ".print_r($value)."<br> <br>";
			}

			echo "Esto es desde el controlador.";

		}
		//----------------------------------------------------------------------
	}

	

 ?>