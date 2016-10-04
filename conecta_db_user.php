
<?php
class conecta_bd{
  var $conn=NULL;
  public function __construct(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
      $this->conn = new PDO("mysql:host=$servername;dbname=uiba_db", $username, $password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function get_connection(){
    return $this->conn;
  }
}
?>
