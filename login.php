<?php 
  include 'controllers/AuthController.php';
  $authController = new AuthController;

  if(isset($_SESSION['username'])){
    header("Location: home.php");
  }

  if(isset($_POST['submit'])){
    $authController->login($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/carousel.css" type="text/css" />
  <script src="js/login.js"></script>
  <title>Login</title>
</head>

<body>
  <div class="container">
    <?php include 'includes/carousel.php'; ?>
    <form action="" method="POST" class='form' onsubmit="return validateLogin()">
      <h1 style="text-align:center">Login</h1>
      <div class="input-group">
        <label for="email">Email:</label>
        <input id="email" type="text" class="input" placeholder="Email" name='email'>
        <p id="email-error" class="error"></p>
      </div>
      <div class="input-group">
        <label for="email">Password:</label>
        <input id="password" type="password" class="input" placeholder="Password" name='password'>
        <p id="password-error" class="error"></p>
      </div>
      <div class="input-group">
        <button type="submit" class="button" name="submit">Login</button>
        <a href="register.php">Don't have an account? Register!</a>
      </div>
    </form>
  </div>
</body>

</html>