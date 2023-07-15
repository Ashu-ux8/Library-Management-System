<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      th{background-color: #b3cee5;}
      tr:nth-child(even) {background-color: #f2f2f2;}
      table{width:30%}
    </style>
</head>
<body>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="user_page.php" href="#">User Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="av_books.php">Avaliable Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="request_book.php">Request Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="return.php">Return Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a> 
  </li>
</ul>



<?php
  include '../login/user_auth.php';
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $databasename = "library_managment";

    // CREATE CONNECTION
    $conn = mysqli_connect($servername,$username, $password, $databasename);

    // GET CONNECTION ERRORS
    if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }

    $email = $_COOKIE["User_email"];
    // SQL QUERY
    $query = "SELECT * FROM user_details WHERE email = '$email'";

    ?>
    <br>
    <center><h2 style="background-color:rgb(230,57,70); color:#FFF; border-radius:15%;">User Info</h2><br>
    <?php

    // FETCHING DATA FROM DATABASE
    $result = $conn->query($query);

    	if ($result->num_rows > 0)
    	{
    		// OUTPUT DATA OF EACH ROW
    		while($row = $result->fetch_assoc())
    		{
      ?>
    			  <!-- echo "<br> User ID: " .$row['id']."<br>".
            "User Name: " .$row['name']."<br>".
            "User Email: ". $row['email']."<br>".
            "User Type".$row['type']. "<br>"; -->
          
          <table border ="1" cellspacing="5" cellpadding="10" >
          <tr><?php session_start(); ?>
          <th>ID</th>
          <td><?php echo $row['id'];
                    $_SESSION['user_id'] = $row['id'];
                    ?></td>
          </tr>
          <tr>
          <th>Name</th>
          <td><?php echo $row['user_name'];
                     $_SESSION['user_name'] = $row['user_name']; ?></td>
          </tr>
          <tr>
          <th>Email</th>
          <td><?php echo $row['email'];
                     $_SESSION['user_email'] = $row['email']; ?></td>
          </tr>
          <tr>
          <th>Type</th>
          <td><?php echo $row['user_type'];
                     $_SESSION['user_type'] = $row['user_type'];?></td>
          </tr>

      <?php
    		}
    	}
    	else {
    		echo "0 results";
    	}
    
    $conn->close();
    

?>
</body>
</html>