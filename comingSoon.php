<?php
  include 'controllers/MoviesController.php';
  $moviesController = new MoviesController();

  $pageName = "comingSoon.php";

  $movies = $moviesController->findComingSoon();
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
      <?php foreach ($movies as $movie): ?>
      <div class="movie">
        <img src="images/movies/<?php echo $movie->image; ?>" class="images" />
        <div class="buttons">
          <a href="viewDetails.php?id=<?php echo $movie->id ?>" class="movie-btn btn-left">View Details</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>


  </div>
  </div>
</body>

</html>