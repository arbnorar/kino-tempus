<?php
  include './controllers/MoviesController.php';
  $moviesController = new MoviesController();

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $movie = $moviesController->getMovieDetails($id);
  $schedules = $moviesController->getMovieSchedules($id);

  $currentDate = null;
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $movie->title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/viewDetails.css" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <a href="home.php"><span>Go Back</span></a>
    <div class="display">
    <div>
      <img src="images/movies/<?php echo $movie->image; ?>" />
    </div>
    <div>
      <h1><?php echo $movie->title ; ?></h1>
      <p>
       <?php echo $movie->description; ?>
      </p>
      <table id="schedules">
        <tr style="background-color:#0c2434">
          <th>Schedule</th>
        </tr>
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
      </table>
    </div>
    </div>
  </body>
</html>

