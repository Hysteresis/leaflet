<?php
    $host = 'localhost';
    $dbName = "map.sql";
    $dbUser = "root";
    $dbPassword = "";

    try {
        $pdo = new PDO('mysql:host=localhost; dbname=map.sql', 'root','');
    }
    catch (PDOException $e) {
        print "erreur :" .$e->getMessage();
        die();
    }
    var_dump($pdo)
?>