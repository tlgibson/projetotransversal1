<?php
    try {
         $db = new PDO("mysql:dbname=mydb;host=localhost", "root", "" );
         $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(PDOException $e) {
        echo $e->getMessage();//Remove or change message in production code
    }
?>
