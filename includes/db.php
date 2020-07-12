<?php 
  try{
    $pdo = new PDO("mysql:host=localhost;dbname=kino-tempus", "root", "root");
  }catch(PDOException $pdo){
    die("Connection to database failed");
  }
?>