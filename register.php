<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <script src="js/register.js"></script>
  <title>Register</title>
</head>
<body>
  <div class="container">
    <form action="" class="form" method="POST" onsubmit='return validateRegister()'>
      <h1 style="text-align: center">Register</h1>
      <div class="input-group">
        <label for="email">Email:</label>
        <input id="email" type="text" class="input" placeholder="Email" name='email' >
        <p class="error" id="email-error"></p>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input id="password" type="password" class="input" placeholder="Password" name="password" >
        <p class="error" id='password-error'></p>
      </div>
      <div class="input-group">
        <label for="passwordConfirm">Confirm Password:</label>
        <input id="password-confirm" type="password" class="input" placeholder="Confirm Password" name="password-confirm" >        
      </div>
      <div class="input-group">
        <button type='submit' class="button">Register</button>
      </div>
    </form>
  </div>
</body>
</html>
