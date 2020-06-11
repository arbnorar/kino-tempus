<?php
  require "includes/db.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $sql = "SELECT * FROM movies WHERE id = :id";
  $query = $pdo->prepare($sql);
  $query->bindParam("id", $id);

  $query->execute();

  $movie = $query->fetch();
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $movie['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/viewDetails.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <a href="home.php"><span>Go Back</span></a>
    <div class="display">
      <img src="<?php echo $movie['image']; ?>" />
      <p>
       <?php echo $movie['description']; ?>
      </p>
    </div>
  </body>
</html>
