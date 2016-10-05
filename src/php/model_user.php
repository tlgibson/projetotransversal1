<?php 
include_once("conecta_bd.php"); // Arquivo padrão para conexão
include_once("user.php");




class model_user{


	private $conn;
	private $user;	
	
public function __construct($user){
	
	$cb = new conecta_bd(); 
	$this->user = $user;
	$this->conn = $cb->get_connection();
}

public function __construct(){
	
	$cb = new conecta_bd(); 
	$this->conn = $cb->get_connection();
}


public function cadastra_usuario($user){

	$sql = 'INSERT INTO usuarios( nome, email, matricula, cpf, data_nascimento, telefone, nome_mae, tipo_user, senha)
	        VALUES (:nome,:email,:matricula,:cpf,:data_nasc,:telefone,:nome_mae,:tipo_user,:senha)';
	$stmt = $this->conn->prepare($sql);
	
	$stmt->bindValue(':nome', this->user->getNome());
	$stmt->bindValue(':email', this->user->getEmail());
	$stmt->bindValue(':matricula', this->user->getMatricula());
	$stmt->bindValue(':cpf', this->user->getCpf()); 
	$stmt->bindValue(':data_nasc', this->user->getData_nascimento());
	$stmt->bindValue(':telefone', this->user->getTelefone());
	$stmt->bindValue(':nome_mae', this->user->getNome_mae());
	$stmt->bindValue(':tipo_user', this->user->getTipo_user());
	$stmt->bindValue(':senha', this->user->getSenha());

	$stmt->execute();

}


public function atualiza_usuario($user){

	$sql = 'UPDATE usuarios
			SET nome = :nome, 
			    email = :email,
			    matricula = :matricula,
			    cpf = :cpf,
			    data_nascimento = :data_nasc,
			    telefone = :telefone,
			    nome_mae = :nome_mae,
			    tipo_user= :tipo_user,
			    senha = :senha
			WHERE id = :id';

	$stmt = $this->conn->prepare($sql);

	$stmt->bindValue(':nome', this->user->getNome());
	$stmt->bindValue(':email', this->user->getEmail());
	$stmt->bindValue(':matricula', this->user->getMatricula());
	$stmt->bindValue(':cpf', this->user->getCpf()); 
	$stmt->bindValue(':data_nasc', this->user->getData_nascimento());
	$stmt->bindValue(':telefone', this->user->getTelefone());
	$stmt->bindValue(':nome_mae', this->user->getNome_mae());
	$stmt->bindValue(':tipo_user', this->user->getTipo_user());
	$stmt->bindValue(':senha', this->user->getSenha());
	$stmt->bindValue(':id', this->user->getId());


	$stmt->execute();
}//Fim atualiza_usuario();

public function remover_usuario($id){
	$sql = 'DELETE FROM usuarios WHERE id=:id';
	$stmt = $this->conn->prepare($sql);
	$stmt->bindValue(':id',$id);
	$stmt->execute();
}//Fim remover_usuario()


public function seleciona_usuario($id){
	$sql = 'SELECT * FROM usuarios WHERE id = :id'; 
	$stmt = $this->conn->prepare($sql);
	$stmt->bindValue(':id',$id);
	$stmt->execute();
}//Fim seleciona_usuario()

public function lista_usuarios(){
	$sql = 'SELECT * FROM usuarios'; 
	
	$stmt = $this->conn->prepare($sql);
	$stmt->execute();

}


}//Fim classe



?>
