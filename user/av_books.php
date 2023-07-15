<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <style>tr:hover {background-color:#b3cee5;}
            h2{background-color:rgb(230,57,70); color:#FFF; border-radius:50px;padding:10px;text-align:center;}
            tr.headT{border-bottom:1px solid dimgrey;background-color:rgb(69,123,157); color:#FFF;}
            tr.bodyT{border-bottom: 1px solid lightgray; padding:10px;}    
            table{text-align:center;}        
    </style>
</head>
<body>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="user_page.php">User Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="av_books.php" href="av_books.php">Avaliable Books</a>
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
     
         // SQL QUERY
         $query = "SELECT * FROM `book`";
     
         // FETCHING DATA FROM DATABASE
         $result = $conn->query($query);
         ?>
         <br>
         <center><h2>Books Details</h2><br>
         <?php
?>
     <center>
       <table border ="1" cellspacing="0" cellpadding="15">
       <tr class="headT">
         <th>ID</th>
         <th>Book Name</th>
         <th>Book Details</th>
         <th>Book Author</th>
         <th>Book Publications</th>
         <th>Branch</th>
         <th>Book Price</th>
         <th>Book Quantity</th>
         <th>Book Avaliable</th>
         <th>Book Rent</th>
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

      <center>
        <tr style="border-bottom: 1px solid lightgray; padding:10px;">
          <!-- <td><?php echo $sn; ?> </td> -->
          <td><?php echo $data['id'];?> </td>
          <td><?php echo $data['bookname']; ?> </td>
          <td><?php echo $data['bookdetail']; ?> </td>
          <td><?php echo $data['bookaudor']; ?> </td>
          <td><?php echo $data['bookpub']; ?> </td>
          <td><?php echo $data['branch']; ?> </td>
          <td><?php echo $data['bookprice']; ?> </td>
          <td><?php echo $data['bookquantity']; ?> </td>
          <td><?php echo $data['bookava'];?></td>
          <td><?php echo $data['bookrent']; ?> </td>
         
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

  <?php
  
  function request_book()
  {    
    // include('user_page.php');
    // echo $_SESSION['user_name'];
    echo $_SESSION['book_name'];

    // $email = $_COOKIE["User_email"];
    // $username = "SELECT id,user_name,user_type FROM user_details WHERE email='$email';"

    // $sql = "INSERT INTO requestbook(userid, bookid, username, usertype, bookname, issuedays) VALUES($id, $bid, $name, $type, $bname, )"
  }
 
    
?>
     
</body>
</html>