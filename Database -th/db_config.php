<?php
    require_once('database_connection.php');
    try {
         $sql = "CREATE TABLE aluno (
             id int(100) NOT NULL auto_increment,
             nome varchar(100) NOT NULL,
             matricula varchar(100) NOT NULL,
             email varchar(100) NOT NULL,
             PRIMARY KEY (id));
             INSERT INTO aluno (nome, matricula, email) VALUES  ('Thais',  'x/xxxxxx', 'tha@gmail.com');
             INSERT INTO aluno (nome, matricula, email) VALUES  ('Matheus',  'x/xxxxxx', 'ma@gmail.com');
             INSERT INTO aluno (nome, matricula, email) VALUES  ('Gabriel',  'x/xxxxxx', 'ga@gmail.com');
             ";
        $sql2 =  "DELETE FROM aluno WHERE id = 1";

         $db->exec($sql);
         print("Created initial 'aluno' and populated it\n");

    } catch(PDOException $e) {
        echo $e->getMessage();//Remove or change message in production code
    }
?>
