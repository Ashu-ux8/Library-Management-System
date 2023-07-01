<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="add_user.php">Add User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_book.php">Book Record</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a>
  </li>
</ul>



<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $databasename = "library_managment";
 
     // CREATE CONNECTION
     $conn = mysqli_connect($servername,$username, $password, $databasename);
 
     // GET CONNECTION ERRORS
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
 
     // SQL QUERY
     $query = "SELECT * FROM `userdata`";
 
     // FETCHING DATA FROM DATABASE
     $result = $conn->query($query);
 
         if ($result->num_rows > 0)
         {
             // OUTPUT DATA OF EACH ROW
             while($row = $result->fetch_assoc())
             {
                $user_id = $row['id'];
                $user_name = $row['name'];
                $user_email = $row['email'];
                $user_type = $row['type'];
             }
         }
         else {
             echo "0 results";
         }
     
     $conn->close();
     
?>


</body>
</html>