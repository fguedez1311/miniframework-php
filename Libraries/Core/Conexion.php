<?php
class Conexion{
	
	private  PDO $conect;

	public function __construct(){
		$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
		try{
		   	$this->conect = new PDO($connectionString,  DB_USER, DB_PASSWORD);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "conexión exitosa";
		}catch(PDOException $e){
			$this->conect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
	}

	public function connect(){
		return $this->conect;
	}
}

?>