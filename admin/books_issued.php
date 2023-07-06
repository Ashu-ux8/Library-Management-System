<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>tr:hover {background-color:#b3cee5;}
            h2{background-color:rgb(230,57,70); color:#FFF; border-radius:50px;padding:10px;text-align:center;}
            tr.headT{border-bottom:1px solid dimgrey;background-color:rgb(69,123,157); color:#FFF;}
            tr.bodyT{border-bottom: 1px solid lightgray;}
            
    </style>
</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="#" href="users.php">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="add_user.php">Add User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add_book.php">Add Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="books_issued.php" href="books_issued.php">Issued Books</a>
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
         $query = "SELECT * FROM `issue_book`";
     
         // FETCHING DATA FROM DATABASE
         $result = $conn->query($query);
         ?>
         <br>
         <h2>Issued Books</h2><br>
         <?php
?>
     <center>
       <table border ="1" cellspacing="" cellpadding="15" style="text-align:center;">
       <tr class="headT" style="">
         <th>ID</th>
         <th>Book ID</th>
         <th>Book Name</th>
         <th>User ID</th>
         <th>User Name</th>
         <th>Issue Date</th>
         <th>Issue Days</th>
       </tr>
      </center>
    <?php
    function test()
    {
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      //get userid, username and usertype by cookie or manually
    }
    
        if(mysqli_num_rows($result) > 0) 
        {
          $sn=1;
          while($data = mysqli_fetch_assoc($result)) 
          {
            
    ?>
  
    <script>
    function clickMe(var a){
      alert("calling test");
      test();
    }

</script>

            <center>
              <tr class="bodyT">
                <!-- <td><?php echo $sn; ?> </td> -->
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['book_id'];?> </td>
                <td><?php echo $data['book_name']; ?> </td>
                <td><?php echo $data['user_id']; ?> </td>
                <td><?php echo $data['user_name']; ?> </td>
                <td><?php echo $data['issue_date']; ?> </td>
                <td><?php echo $data['issue_days']; ?> </td>
                <!-- <script> var id = '{{$data['id']}}'; </script> -->
                <!-- <td><a href="issue_book.php"><button class="btn btn-primary" name='request' id ='btn'>Request</button></a> -->
               
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
      // echo $_SESSION['user_name'] ?>
    <?php
        $conn->close();
    ?>

</body>
</html>