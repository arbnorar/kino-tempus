<?php 

include './config/Database.php';

class AuthController
{
  protected $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function login($request){
    $query = $this->db->pdo->prepare('SELECT id, name, password, isAdmin FROM users WHERE email = :email');
    $query->bindParam(':email', $request['email']);
    $query->execute();

    $user = $query->fetch();

    if($count($user) > 0 && password_verify($request['password'], $user['password'])){
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['name'] = $user['name'];
      $_SESSION['isAdmin'] = $user['isAdmin'];

      $header('Location: ./home.php');
    }
  }
}
?>