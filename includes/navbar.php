<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <title>Document</title>
</head>
<body>
  <div class="navbar">
    <ul>
      <li class="<?= $pageName == "comingSoon.php"? 'active': '' ?>">
        <a href="comingSoon.php">Coming Soon</a>
      </li>
      <li class="<?= $pageName == "home.php"? 'active': '' ?>"><a href="home.php">Home</a></li>
      <li class="<?= $pageName == "contact.php"? 'active': '' ?>"><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
</body>
</html>
