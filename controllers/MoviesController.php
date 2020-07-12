<?php 
include './config/Database.php';

class MoviesController{
  protected $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function findAll(){
    $query = $this->db->pdo->query('SELECT * from movies');
    return $query->fetchAll();
  }
}

?>