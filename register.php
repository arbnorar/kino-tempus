<?php 
  include 'controllers/UsersController.php';
  $usersController = new UsersController();

  if(isset($_SESSION['username'])){
    header("Location: home.php");
  }

  if(isset($_POST['submit'])){
    $usersController->register($_POST);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/carousel.css" type="text/css" />
  <script src="js/register.js"></script>
  <title>Register</title>
</head>

<body>
  <div class="container">

    <form action="register.php" class="form" method="POST" onsubmit='return validateRegister()'>
      <h1 style="text-align: center">Register</h1>
      <div class="input-group">
        <label for="username">Username:</label>
        <input id="username" type="text" class="input" placeholder="Username" name='username'>
        <p class="error" id="username-error"></p>
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input id="email" type="text" class="input" placeholder="Email" name='email'>
        <p class="error" id="email-error"></p>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input id="password" type="password" class="input" placeholder="Password" name="password">
        <p class="error" id='password-error'></p>
      </div>
      <div class="input-group">
        <label for="passwordConfirm">Confirm Password:</label>
        <input id="password-confirm" type="password" class="input" placeholder="Confirm Password"
          name="password-confirm">
      </div>
      <div class="input-group">
        <button type='submit' class="button" name="submit">Register</button>
        <a href="login.php">Already have an account? Login!</a>
      </div>
    </form>
    <?php include 'includes/carousel.php'; ?>
  </div>
</body>

</html>