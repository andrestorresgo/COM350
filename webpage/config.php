<?php

try{
    $pdo = new PDO("pgsql:host=localhost;dbname=COM350", "postgres", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected to the database successfully.";
}catch (PDOException $e){
    die($e->getMessage());
}

?>