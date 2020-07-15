<?php
  include './controllers/MoviesController.php';
  $moviesController = new MoviesController();

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $movie = $moviesController->getMovieDetails($id);
  $schedules = $moviesController->getMovieSchedules($id);

  $currentDate = null;

  if(isset($_POST["submit"])) {
    $moviesController->addSchedule($id, $_POST);
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $movie->title; ?></title>
  <link rel="stylesheet" type="text/css" href="css/viewDetails.css" />

  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <a id="back" href="home.php"><span>Go Back</span></a>
  <div class="container">
    <div>
      <img src="images/movies/<?php echo $movie->image; ?>" />
    </div>
    <div class="details">


      <h1><?php echo $movie->title ; ?></h1>
      <p>
        <?php echo $movie->description; ?>
      </p>
      <table id="schedules">
        <thead>
          <tr style="background-color:#0c2434">
            <th>Schedule</th>
          </tr>
        </thead>
        <tbody>
          <!-- Loop through movie schedules -->
          <?php foreach($schedules as $schedule): ?>

          <?php if( $currentDate != $schedule->date){ ?>
          <tr style="background-color: #4d696b">
            <td><?php echo date_create($schedule->date)->format('D d/m/Y'); ?></td>
          </tr>
          <?php $currentDate = $schedule->date; ?>
          <?php } ?>

          <tr>
            <td><?php echo date('H:i',strtotime($schedule->time)); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if($_SESSION['role'] == 1){ ?>
      <div id="addSchedule">
        <form action="" method="POST">
          <div>
            <input type="date" id="date" name="date">
            <input type="time" id="time" name="time">
          </div>
          <button type="submit" id="addScheduleButton" name="submit">Add Schedule</button>
        </form>
      </div>
      <?php } ?>

    </div>
  </div>
</body>

</html>