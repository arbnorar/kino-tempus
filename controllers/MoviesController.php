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

  public function getMovieDetails($id){
    $query = $this->db->pdo->prepare('SELECT * FROM movies WHERE id = :id');
    $query->bindParam(':id', $id);
    $query->execute();

    $movie = $query->fetch();
    return $movie;
  }

  public function getMovieSchedules($movieId){
    $query = $this->db->pdo->prepare('SELECT * FROM schedules WHERE movieId = :movieId ORDER BY date ASC');
    $query->bindParam(':movieId', $movieId);
    $query->execute();

    $schedules = $query->fetchAll();
    return $schedules;
  }
}

?>