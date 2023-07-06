<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>tr:hover {background-color:#b3cee5;}
            h2{background-color:rgb(230,57,70); color:#FFF; border-radius:50px;padding:10px;text-align:center;}
            tr.headT{border-bottom:1px solid dimgrey;background-color:rgb(69,123,157); color:#FFF;}
            tr.bodyT{border-bottom: 1px solid lightgray;}            
    </style>
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
    <a class="nav-link" href="add_book.php">Add Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="books_issued.php">Issued Books</a>
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
     $query = "SELECT * FROM `user_details`";
 
     // FETCHING DATA FROM DATABASE
     $result = $conn->query($query);
     ?>
     <br><h2>User Info</h2><br>
      <center>
        <table border ="1" cellspacing="0" cellpadding="10">
        <tr class="headT">
          <th>ID</th>
          <th>User Name</th>
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
              <tr class="bodyT">
                <!-- <td><?php echo $sn; ?> </td> -->
                <td><?php echo $data['id']; ?> </td>
                <td><?php echo $data['user_name']; ?> </td>
                <td><?php echo $data['email']; ?> </td>
                <td><?php echo $data['user_type']; ?> </td>
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
     
     

