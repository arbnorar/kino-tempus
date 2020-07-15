<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="navbar">
    <ul>
      <li class="<?= $pageName == "comingSoon.php"? 'active': '' ?>">
        <a href="comingSoon.php">Coming Soon</a>
      </li>
      <li class="<?= $pageName == "home.php"? 'active': '' ?>"><a href="home.php">Home</a></li>
      <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
      <li class="<?= $pageName == "addMovie.php"? 'active': '' ?>"><a href="addMovie.php">Add Movie</a></li>
      <li class="<?= $pageName == "manageUsers.php"? 'active': '' ?>"><a href="manageUsers.php">Manage Users</a></li>
      <?php } ?>
      <li class="<?= $pageName == "contact.php"? 'active': '' ?>"><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
</body>

</html>