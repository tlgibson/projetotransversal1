<?php

class conecta_bd{

	var $conn=NULL;

public function conecta_bd(){

	$servername = "localhost";
	$username = "uiba_user";
	$password = "uiba1234";

	try {
    		$this->conn = new PDO("mysql:host=$servername;dbname=uiba_db", $username, $password);
    		
		// set the PDO error mode to exception
    		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		//echo "Connected successfully";
    	
	}catch(PDOException $e){
    		//echo "Connection failed: " . $e->getMessage();
    	}

}

public function get_connection(){
	return $this->conn;
}

}	
?>
