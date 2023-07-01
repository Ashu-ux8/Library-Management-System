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
     ?>
      <center>
        <table border ="1" cellspacing="0" cellpadding="10">
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Email</th>
          <th>Type</th>
        </tr>
    </center>
      <?php 
            
          if (mysqli_num_rows($result) > 0) 
          {
              $sn=1;
              while($data = mysqli_fetch_assoc($result)) 
            {
      ?>
            <center>
              <tr>
                <td><?php echo $sn; ?> </td>
                <td><?php echo $data['id']; ?> </td>
                <td><?php echo $data['name']; ?> </td>
                <td><?php echo $data['email']; ?> </td>
                <td><?php echo $data['type']; ?> </td>
              <tr>
            </center>
      <?php
              $sn++;
            }
          }
          else 
          { 
      ?>
         <tr>
          <td colspan="8">No data found</td>
         </tr>
      <?php
          }
      ?>
       </table>
      <?php
        $conn->close();
      ?>
  </body>
</html>
     
     

