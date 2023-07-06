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
    <a class="nav-link" href="user_page.php">User Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="av_books.php">Avaliable Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="request_book.php" href="request_book.php">Request Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="return.php">Return Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../login/signin.php">Logout</a>
  </li>
</ul>

    <center>
    <div class="form login" >
       <div class="form-content">
           <header>Request Book</header>
           <form action="" method="POST">
               <div class="field input-field">
                   <input type="text" name="book_name" placeholder="Book name" class="input">
               </div>
               <div class="field input-field">
                   <input type="number" name="book_id" placeholder="Book ID" class="input">
               </div>
               <div class="field input-field">
                   <input type="text" name="user_name" placeholder="User Name" class="password">
                   <i class='bx bx-hide eye-icon'></i>
               </div>
               <div class="field input-field">
                   <input type="text" name="user_id" placeholder="User ID" class="input">
               </div>
               <div class="field input-field">
                   <input type="number" name="days" placeholder="Isssue days" class="input">
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
      if(isset($_POST['book_name']) && isset($_POST['book_id']) && isset($_POST['user_name']) && isset($_POST['user_id']) && isset($_POST['days']))
     {
          $b_name = $_POST['book_name'];
          $b_id = $_POST['book_id'];
          $u_name = $_POST['user_name'];
          $u_id = $_POST['user_id']; 
          $days = $_POST['days'];     
 
        $date = date("Y/m/d");
        if(mysqli_query($con,$sq = "UPDATE book SET bookava = (bookava - 1) WHERE id = $b_id AND bookava > 0")){
          $sql = "INSERT INTO issue_book(book_id, book_name, user_id, user_name, issue_date, issue_days) VALUES('$b_id','$b_name','$u_id','$u_name', '$date', '$days')";

          if(mysqli_query($con,$sql1 = "UPDATE book         
                  SET bookrent = bookrent+1
                  WHERE id = $b_id;"))
                  {
                    echo "Book rented";
                  }

          if(mysqli_query($con, $sql))
          {
            echo '<script>alert("Book successfully issued!! ")</script>';          }
          else{
          Echo "insertion unsuccessful";
          }
        }
        else{
          echo '<script>alert("Book is currently unavaliable!")</script>';        }
       
    }
    else{
       echo '<script>alert("Please fill the below form!")</script>';    
    }

 ?>
 </body>
 </html>
