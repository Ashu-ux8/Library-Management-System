<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add_user</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="../styles.css">
   <style>
    header{color:#FFF;}
      .form{margin-top:20px;position: relative;max-width: 430px; width: 100%;padding: 30px;border-radius: 6px;background: rgb(69,123,157);}
      label.branch{border:1px; border-color:lightgray ; color:dimgrey; border-style:solid; width: 100%; padding:10px; border-radius:5px; background-color:#FFF }
      .field button{background-color:#b3cee5;color:black}
      .field button:hover{color: #FFF;background-color: rgb(230,57,70);}
   </style>

</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link"  href="users.php">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="add_user.php">Add User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_book.php">Add Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="books_issued.php">Issued Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a>
  </li>
</ul>
 
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
        //  Echo "db connected";
    }
    Else
    {
     Echo"Database not connected";
     }
     if (isset($_POST['username']) && isset($_POST['user-email']) && isset($_POST['user_pass']) && isset($_POST['type'])) 
    {
         $name = $_POST['username'];
         $email = $_POST['user-email'];
         $pass = $_POST['user_pass'];
         $type = $_POST['type'];      

      $sql = "INSERT INTO user_details(user_name, email, pass, user_type) VALUES('$name','$email','$pass','$type')";
      if(mysqli_query($con, $sql))
      {
        echo '<script>alert("User Added!!")</script>';   
      }
      Else{
        echo 'Insertion uncessfull';    
      }
  }
  else{
    // echo 'Not Set';    
  }
?>
</body>
</html>