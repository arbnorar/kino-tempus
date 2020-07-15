<?php 
include './config/Database.php';

class UsersController{
  protected $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function findAll(){
    $query = $this->db->pdo->query('SELECT id, username, email, role from users');
    return $query->fetchAll();
  }

  public function register($request){
    $password = password_hash($request['password'], PASSWORD_DEFAULT);

    $query = $this->db->pdo->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
    
    $query->bindParam(':username', $request['username']);
    $query->bindParam(':email', $request['email']);
    $query->bindParam(':password', $password);

    $query->execute();

    return header('Location: ./login.php');
  }

  public function makeAdmin($userId){
    $query = $this->db->pdo->prepare('UPDATE users SET role = 1 WHERE id = :userId');
    $query->bindParam(':userId', $userId);
    
    $query->execute();

    return;
  }

  public function removeAdmin($userId){
    $query = $this->db->pdo->prepare('UPDATE users SET role = 0 WHERE id = :userId');
    $query->bindParam(':userId', $userId);
    
    $query->execute();

    return;
  }
}
?>