<?php
class user{

	
	private $nome;
	private $email;
	private $matricula; 
	private $cpf; 
	private $data_nascimento; 
	private $telefone; 
	private $nome_mae; 
	private $tipo_user; 
	private $senha;
	private $id;

function __construct($nome, $email, $matricula, $cpf, $data_nascimento, $telefone, $nome_mae, $tipo_user, $senha){
	$this->nome = $nome;
	$this->email = $email;
	$this->matricula = $matricula;
	$this->cpf = $cpf;
	$this->data_nascimento = $data_nascimento;
	$this->telefone = $telefone;
	$this->nome_mae = $nome_mae;
	$this->tipo_user = $tipo_user;
	$this->senha = $senha;
}

public function getId(){
	return $this->id;
}

public function getNome(){
	return $this->nome;
}

public function getEmail(){
	return $this->email;
}

public function getMatricula(){
	return $this->matricula;
}


public function getCpf(){
	return $this->cpf;
}

public function getData_nascimento(){
	return $this->data_nascimento;
}


public function getTelefone(){
	return $this->telefone;
}

public function getNome_mae(){
	return $this->nome_mae;
}

public function getTipo_user(){
	return $this->tipo_user;
}

public function getSenha(){
	return $this->senha;
}


public function setId($id){
	$this->id = $id;
}

public function setNome($nome){
	$this->nome = $nome;
}

public function setEmail($email){
	$this->email = $email;
}

public function setMatricula($matricula){
	$this->matricula = $matricula;
}


public function setCpf($cpf){
	$this->cpf = $cpf;
}

public function setData_nascimento($data_nascimento){
	$this->data_nascimento = $data_nascimento;
}


public function setTelefone($telefone){
	$this->telefone = $data_nascimento;
}

public function setNome_mae($nome_mae){
	$this->nome_mae = $nome_mae;
}

public function setTipo_user($tipo_user){
	$this->tipo_user = $tipo_user;
}

public function setSenha($senha){
	$this->senha = $senha;
}


}//Fim Classe


?>