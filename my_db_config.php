<?php
    require_once('config.php');
    try {
         $sql = "CREATE TABLE cadastro (
             id int(100) NOT NULL auto_increment,
             nome varchar(100) NOT NULL,
             email varchar(100) NOT NULL,
             usuario varchar(100) NOT NULL,
             PRIMARY KEY (id));
             INSERT INTO cadastro (nome, email, usuario) VALUES  ('Thais', 'tha@gmail.com', 'thatha');
             ";

         $db->exec($sql);
         print("Created initial 'cadastro' and populated it!\n");

    } catch(PDOException $e) {
        echo $e->getMessage();//Remove or change message in production code
    }
?>
