<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add_user</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="signin.css">


</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link"  href="user.php">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="add_user.php">Add User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_book.php">Book Record</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a>
  </li>
</ul>
   <!-- <form action="add_user.php" method="post" class="ad_form">
      <h2>Add User</h2>
      Name<input type="text" name="username" placeholder="User Name"><br>
      E-mail<input type="email" name="user_email" placeholder="E-mail"><br>
      Password<input type="password" name="user_pass" placeholder="Password"><br>
      Type<input type="text" name="type" placeholder="Type of User"><br>
      <input type="submit" value="Log In">
   </form> -->
<center>
   <div class="form login" >
      <div class="form-content">
          <header>Add User</header>
          <form action="add_user.php" method="POST">
              <div class="field input-field">
                  <input type="text" name="username" placeholder="User name" class="input">
              </div>
              <div class="field input-field">
                  <input type="email" name="user-email" placeholder="User e-mail" class="input">
              </div>
              <div class="field input-field">
                  <input type="password" name="user_pass" placeholder="Password" class="password">
                  <i class='bx bx-hide eye-icon'></i>
              </div>
              <div class="field input-field">
                  <input type="text" name="type" placeholder="Type of User" class="input">
              </div>
              <div class="field button-field">
                  <button>Submit</button>
              </div>
          </form>
      </div>
  </div>
</center>
<?php

   $server = "localhost";
   $user = "root";
   $password = "";
   $database = "library_managment";

   $con = mysqli_connect($server,$user,$password,$database);
   if($con)
   {
         Echo "db connected";
    }
    Else
    {
     Echo"not conn";
     }
     if (isset($_POST['username']) && isset($_POST['user_email']) && isset($_POST['user_pass']) && isset($_POST['type'])) 
    {
         $name = $_POST['username'];
         $email = $_POST['user_email'];
         $pass = $_POST['user_pass'];
         $type = $_POST['type'];
      

      $sql = "INSERT INTO userdata( name, email, pass, type) VALUES('$name','$email','$pass','$type')";
      if(mysqli_query($con, $sql))
      {
         Echo "data inserted";
      }
      Else{
      Echo "insertion unsuccessful";
    }
}
?>
</body>
</html>