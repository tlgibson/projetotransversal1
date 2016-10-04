/*--------------------- Criando Banco de Dados ------------------------------*/


/* CREATE DATABASE <nome_banco_de_dados>*/
CREATE DATABASE uiba_db;




/*--------------------- Criando tabela usuário ---------------------*/

CREATE TABLE usuario
(
`id` INT NOT NULL auto_increment,
`nome` VARCHAR(150) NOT NULL,
`email` VARCHAR(150) NOT NULL,
`matricula` VARCHAR(150) NOT NULL,
`cpf` VARCHAR(14) NOT NULL,
`data_nascimento` DATE  NOT NULL,
`telefone` VARCHAR(14) NOT NULL,
`nome_mãe` VARCHAR(150) NOT NULL,
`tipo_user` INT NOT NULL,
`senha` VARCHAR(50) NOT NULL,
 PRIMARY KEY (`id`),
); 
