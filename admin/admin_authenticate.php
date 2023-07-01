<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Authentictaion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="user.php" href="#">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_user.php">Add User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Book Record</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a>
  </li>
</ul>


<?php
    //  $server = "localhost";
    //  $user = "root";
    //  $password = "";
    //  $database  = "library_management";
 
    //  $con = mysqli_connect($server, $user, $password, $database);
    //  if ($con)
    //  {
    //      alert "Database connected";
    //  }
    //  else{
    //      alert "Connection failed";
    //  }


    const email = 'admin@admin.com';
    const pass = '1234';

    $email = $_POST['ad_email'];
    $pass = $_POST['ad_pass'];
    if($email == email && $pass == pass)
    {
        //redirect to admin page
        echo "Authenticated";
        header('Location: users.php');
        //header("Location: admin.php");
    }
    else{
        //redirect to login form
        header("Location: signin.php");
    }

?>
</body>
</html>
