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
    $query = $this->db->pdo->prepare('SELECT id, username, password, role, email FROM users WHERE email = :email');
    $query->bindParam(':email', $request['email']);
    $query->execute();

    $user = $query->fetch();

    if($user && password_verify($request['password'], $user->password)){
      $_SESSION['userId'] = $user->id;
      $_SESSION['username'] = $user->username;
      $_SESSION['email'] = $user->email;
      $_SESSION['role'] = $user->role;

      header('Location: ./home.php');
    }
  }
}
?>