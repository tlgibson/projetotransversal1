<?php include_once("conecta_db_user.php");
class model_form{
  private $conn;

  public function __construct(){
    $cb = new conecta_bd();
    $this->conn = $cb->get_connection();
  }

  //Funcionando!
  public function cadastra_user($nome, $email, $matr, $senha){
    $comando = 'INSERT INTO cadastros (nome, email, matricula, senha) VALUES (:nome, :email, :matr, :senha)';
    $stmt = $this->conn->prepare($comando);
    $stmt->bindValue(':nome', $nome); //<-- Higienizado automaticamente pela PDO
    $stmt->bindValue(':email', $email); //<-- Higienizado automaticamente pela PDO
    $stmt->bindValue(':matr', $matr); //<-- Higienizado automaticamente pela PDO
    $stmt->bindValue(':senha', $senha); //<-- Higienizado automaticamente pela PDO
    $stmt->execute();
  }

  //Lembrar de fazer verificação se o usuário é de fato quem está mudando
  //as informações e não alguém de má índole
  public function edita_user($nome, $email, $matr){
    $comando = 'UPDATE cadastros SET nome= :nome, email= :email, matricula= :matr WHERE matricula = :matr';
    $stmt = $this->conn->prepare($comando);
    $stmt->bindValue(':nome', $nome); //<-- Higienizado automaticamente pela PDO
    $stmt->bindValue(':email', $email); //<-- Higienizado automaticamente pela PDO
    $stmt->bindValue(':matr', $matr); //<-- Higienizado automaticamente pela PDO
    $stmt->execute();
  }

  public function deleta_user($matr){
    $comando = 'DELETE FROM cadastros WHERE matricula = ' . $matr;

    $stmt = $this->conn->prepare($comando);
    $stmt->execute();
  }

  public function todos_user(){
    $stmt = $this->conn->prepare("SELECT * FROM `cadastros` ORDER BY nome ASC");
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
  }
}
?>
