<?php 
  include 'controllers/AuthController.php';
  $authController = new AuthController;

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
    <script src="js/login.js"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
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
        </div>
      </form>
    </div>
  </body>
</html>
