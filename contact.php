<?php 

  include 'controllers/usersController.php';
  $usersController = new UsersController();

  $pageName = "contact.php";

  if(!isset($_SESSION["username"])) {
    header("Location: login.php");
  }

  if(isset($_POST['submit'])){
    $usersController->addMessage($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="css/contact.css" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <script src="js/contact.js"></script>
</head>

<body>
  <?php include "includes/navbar.php";?>
  <?php include "includes/logoutBtn.php";?>
  <div class="wrapper">
    <div style="margin-bottom: 70px;">
      <h1 style="color: #ffffff;">Contact Us</h1>
      <h2 style="color: #ffffff;">We would love to hear from you</h2>
    </div>

    <form action="" method="POST" onsubmit="return formValidation()" class="form">
      <div class="grid">
        <div class="inner-form item-1">
          <label for="name" style="color: #ffffff;">Name *</label>
          <input placeholder="Tony" type="text" id="name" name="name" value="<?php echo $_SESSION['username']; ?>" />
          <p id=" name-error" class="error"></p>
        </div>
        <div class="inner-form item-2">
          <label for="phoneNumber" style="color: #ffffff;">Phone Number &nbsp;
            <small style="color:lightgrey;">(optional)</small></label>
          <input placeholder="Your phone number" type="text" id="phoneNumber" name="phoneNumber" />
        </div>
        <div class="inner-form item-3">
          <label for="emailAddress" style="color: #ffffff;">Email Address *</label>
          <input placeholder="tony.stark@industries.com" type="text" id="emailAddress" name="email"
            value="<?php echo $_SESSION['email']; ?>" />
          <p id="email-error" class="error"></p>
        </div>
        <div class="inner-form item-4">
          <label for="message" style="color: #ffffff;">Your Message *</label>
          <textarea placeholder="Your message here.." name="content" id="message"></textarea>
          <p id="message-error" class="error"></p>
        </div>
      </div>

      <input type="submit" value="Submit" />
    </form>
  </div>
</body>

</html>