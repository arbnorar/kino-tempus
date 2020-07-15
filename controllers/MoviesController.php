<?php 
include './config/Database.php';

class MoviesController{
  protected $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function findAll(){
    $query = $this->db->pdo->query('SELECT * FROM movies');
    return $query->fetchAll();
  }

  public function findOutNow(){
    $query = $this->db->pdo->query("SELECT * FROM movies WHERE status = 'out-now '");
    return $query->fetchAll();
  }




  public function findComingSoon() {
    $query = $this->db->pdo->query("SELECT * FROM movies WHERE status = 'coming-soon'");
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
 
  public function addSchedule($movieId, $request) {
    $query = $this->db->pdo->prepare('INSERT INTO schedules (movieId, date, time) VALUES (:movieId, :date, :time)');
    $query->bindParam(':movieId', $movieId);
    $query->bindParam(':date', $request['date']);
    $query->bindParam(':time', $request['time']);
    $query->execute();
    
    return header("Location: ./viewDetails.php?id=$movieId");
  }
}
?>