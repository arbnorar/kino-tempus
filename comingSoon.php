<?php 
  $pageName = "comingSoon.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Today's Schedule</title>
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
  <script src="js/index.js"></script>
</head>

<body>
  <?php include "includes/navbar.php"; ?>

  <div class="container">
    <div class="movies">
      <div class="movie">
        <img src="images/movies/her.jpg" class="images" />
        <div class="buttons">
          <a href="#" class="movie-btn btn-left">View Details</a>
          <a href="#" class="movie-btn btn-right">Buy a Ticket</a>
        </div>
      </div>

      <div class="movie">
        <img src="images/movies/about-time.jpg" class="images" />
        <div class="buttons">
          <a href="#" class="movie-btn btn-left">View Details</a>
          <a href="#" class="movie-btn btn-right">Buy a Ticket</a>
        </div>
      </div>

      <div class="movie">
        <img src="images/movies/the-theory-of-everything.jpg" class="images" />
        <div class="buttons">
          <a href="#" class="movie-btn btn-left">View Details</a>
          <a href="#" class="movie-btn btn-right">Buy a Ticket</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>