<?php 
include './config/Database.php'

class UsersController{
  protected $db;

  public function __construct(){
    $this->db = new Database()
  }

  public function findAll(){
    $query = $this->db->pdo->query('SELECT * from users');
    return $query->fetchAll()
  }

  public function create($request){
    // isset($request['isAdmin']) ? 
    $password = password_hash($request['password'], PASSWORD_DEFAULT);

    $query = $this->db->pdo->prepare('INSERT INTO users (name, email, password q) VALUES (:name, :email, :password)');
    $query->bindParam(':name', $request['name']);
    $query->bindParam(':email', $request['email']);
    $query->bindParam(':password',$password);

    return header('Location: ./login.php')
  }
}
?>