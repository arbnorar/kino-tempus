<?php

  $pageName = "home.php";
  require "includes/db.php";

  $query = $pdo->query("SELECT * from movies");
  $movies = $query->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Today's Schedule</title>
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
</head>

<body>
  <?php require "includes/navbar.php"; ?>
  <div class="container">
    <div class="movies">

    <?php foreach ($movies as $movie): ?>
      <div class="movie">
        <img src="<?php echo $movie['image']; ?>" class="images" />
        <div class="buttons">
          <a href="viewDetails.php?id=<?php echo $movie['id'] ?>" class="movie-btn btn-left">View Details</a>
          <a href="#" class="movie-btn btn-right">Buy a Ticket</a>
        </div>
      </div>
    <?php endforeach; ?>

    </div>
  </div>
</body>
  
</html>