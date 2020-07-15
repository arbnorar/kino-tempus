<?php 
$pageName = "manageUsers.php";
include './controllers/UsersController.php';
$usersController = new UsersController();

if(isset($_SESSION["role"]) && $_SESSION['role'] != 1) {
    header("Location: home.php");
}

$users = $usersController->findAll();

if(isset($_POST['makeAdmin'])){
    $usersController->makeAdmin($_POST['userId']);
    header('Refresh:0');
}

if(isset($_POST['removeAdmin'])){
  $usersController->removeAdmin($_POST['userId']);
  header('Refresh:0');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/manageUsers.css" />
    <title>Manage Users</title>
</head>

<body>
    <?php include "includes/navbar.php" ?>
    <?php include "includes/logoutBtn.php";?>
    <div class="container">
        <table id="usersTable">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td>
                        <?php echo $user->id ?>
                    </td>
                    <td>
                        <?php echo $user->username ?>
                    </td>
                    <td>
                        <?php echo $user->email ?>
                    </td>
                    <td>
                        <?php echo $user->role ?>
                    </td>
                    <td>
                        <?php if($user->role == 0){ ?>
                        <form action="" method="POST">
                            <input type="hidden" name="userId" value="<?php echo $user->id ?>">
                            <button type="submit" name="makeAdmin" class="adminBtn">Make Admin</button>
                        </form>
                        <?php }else{ ?>
                        <form action="" method="POST">
                            <input type="hidden" name="userId" value="<?php echo $user->id ?>">
                            <button type="submit" name="removeAdmin" class="adminBtn">Remove Admin</button>
                        </form>
                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>