<?php 

  include 'controllers/MoviesController.php';
  $moviesController = new MoviesController();
  if(isset($_FILES['image']) && isset($_POST["submit"])){
    //pre_r($_FILES);

    $phpFileUploadErrors = array(
      0 => 'There is no error, the file uploaded with success',
      1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
      2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
      3 => 'The uploaded file was only partially uploaded',
      4 => 'No file was uploaded',
      6 => 'Missing a temporary file',
      7 => 'Failed to write file to disk.',
      8 => 'A PHP extension stopped the file uploaded.'
    );

    $ext_error = false;
    $extensions = array('jpg', 'jpeg', 'gif', 'png');
    $file_ext_arr = explode('.',$_FILES['image']['name']);
    $base_name = reset($file_ext_arr);
    $file_ext = end($file_ext_arr);

    if(!in_array($file_ext, $extensions)){
      $ext_error = true;
    }

    if($_FILES['image']['error']){
      echo $phpFileUploadErrors[$_FILES['image']['error']];
    }
    elseif ($ext_error){
      echo "Invalid file extension!";
    }
    else{
      $full_name = $base_name . time() . '.' .  $file_ext;
      $_FILES['image']['name'] = $full_name;
      move_uploaded_file($_FILES['image']['tmp_name'], 'images/movies/'. $_FILES['image']['name']);
      $moviesController->addMovie($_POST, $full_name);
    }

  }
  function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/addMovie.css">
  <title>Add Movie</title>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <h1>Add Movie</h1>
    <form id="addMovie" action="" method="POST" enctype="multipart/form-data">
      <div class="input-group">
      <label for="title">Title:</label>
        <input id="title" class='input' type="text" name="title" required>
      </div>

      <div class="input-group">
      <label for="description">Description:</label>
        <textarea id="description" class="input" type="textarea" name="description" required></textarea>
      </div>
      
      <div class="input-group">
        <label for="">Image: </label>
        <input id="image" class="inputFile" type="file" name="image" data-multiple-caption="{count} files selected" required>
        <label id="fileLabel" for="image"><span class="material-icons">insert_photo</span></label>
      </div>
      
      <div class="input-group">
      <label for="status">Status:</label>
        <select id="status" name="status" required>
          <option value="out-now">Out Now</option>
          <option value="coming-soon">Coming Soon</option>
        </select>
      </div>

      <div class="input-group">
        <button type="submit" name="submit">Add Movie</button>
      </div>
    </form>
  </div>
  <script>
    var input = document.getElementById('image')
    var label = document.getElementById('fileLabel'), labelVal = label.innerHTML;
 
    
    input.addEventListener('change', (e) =>{
      var fileName = '';
      if(this.files && this.files.length > 1){
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      }else{
        fileName = e.target.value.split('\\').pop();
      }

      if(fileName){
        label.innerHTML = fileName
      }else{
        label.innerHTML = labelVal
      }

    })
  </script>
</body>
</html>