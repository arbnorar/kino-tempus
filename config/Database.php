<?php 
class Database{
  public $pdo;

  public function __construct(){
    try{
      session_start();
      $link = new PDO("mysql:host=localhost;dbname=kino-tempus", "root", "");
      $this->pdo = $link;
      $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }catch(PDOException $err){
      die('DIE'.$err->getMessage());
    }
  }
}
?>