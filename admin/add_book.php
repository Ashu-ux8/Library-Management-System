<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Book</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="../styles.css">
   <style>
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
    <a class="nav-link" href="add_user.php">Add User</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="add_book.php">Add Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="books_issued.php">Issued Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a>
  </li>
</ul>
   
   <center>
   <div class="form login">
      <div class="form-content">
          <header style="color:#FFF">Add Book</header>
          <form action="add_book.php" method="POST">
              <div class="field input-field">
                  <input type="text" name="book_name" placeholder="Book Name" class="input">
              </div>
              <div class="field input-field">
                  <input type="text" name="book_details" placeholder="Book Details" class="input">
              </div>
              <div class="field input-field">
                  <input type="text" name="book_author" placeholder="Book Author" class="input">
              </div>
              <div class="field input-field">
                  <input type="text" name="book_pub" placeholder="Book Publication" class="input">
              </div>
            
              <div class="field input-field">
                  <input type="text" name="book_price" placeholder="Book Price" class="input">
              </div>
              <div class="field input-field">
                  <input type="text" name="book_quantity" placeholder="Book Quantity" class="input">            
              </div>
              <div class="field input-field" >
              <label name="branch" class="branch" style="">Branch</label><br>
                <select id="text" name="branch" style="color:dimgrey ;">
                    <option value="CO">Computer Engineering</option>
                    <option value="EE">Electronic Engineering</option>
                    <option value="EL">Electrical Engineering</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="ME">Mechanical Engineering</option>
                </select>
              </div><br>
              <div class="field button-field">
                  <button>Submit</button>
              </div>
          </form>
      </div>
  </div>
</center>
<?php

  $server = "localhost:3308";
   $user = "root";
   $password = "";
   $database = "library_managment";

   $con = mysqli_connect($server,$user,$password,$database);
   if($con)
   {
        //  Echo "db connected";
    }
    else
    {
      Echo"Database not connected";
    }
    if (isset($_POST['book_name']) && isset($_POST['book_details']) && isset($_POST['book_author']) && isset($_POST['book_pub']) && isset($_POST['branch']) && isset($_POST['book_price']) && isset($_POST['book_quantity'])) 
    {
      $name = $_POST['book_name'];
      $det = $_POST['book_details'];
      $auth = $_POST['book_author'];
      $pub = $_POST['book_pub'];
      $branch = $_POST['branch'];
      $price = $_POST['book_price'];
      $qunt = $_POST['book_quantity'];
      $sql = "INSERT INTO book (bookname, bookdetail, bookaudor, bookpub, branch, bookprice, bookquantity) VALUES('$name','$det','$auth','$pub','$branch','$price','$qunt')";
      if(mysqli_query($con, $sql))
      {
        echo "Book added!!";    
      }
      else{
      Echo "insertion unsuccessful";
      }
    }
    else{
      echo 'Not set';  
      echo $branch;
    }
?>
</body>
</html>