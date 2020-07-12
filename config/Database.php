<?php 
class Database{
  public $pdo;

  public function __construct(){
    try{
      session_start();
      $link = new PDO('mysql:host=localhost;dbname=kino-tempus', 'root', 'root');
      $this->pdo = $link;
    }catch(PDOException $err){
      die('DIE'.$e->getMessage());
    }
  }
}
?>