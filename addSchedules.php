<?php 
  include './controllers/MoviesController.php';
  $moviesController = new MoviesController();

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  
  if(isset($_POST["submit"])) {
    $moviesController->addSchedule($id, $_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/addSchedules.css" />
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <title>Add Schedule</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST">
      <input type="date" id="date" name="date">
      <input type="time" id="time" name="time">
      <button type="submit" id="submitButton" name="submit">Add Schedule</button>
    </form>
  </div>
</body>

</html>