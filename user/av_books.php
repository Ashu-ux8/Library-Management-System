<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    <a class="nav-link" href="#">Book Record</a>
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
         $query = "SELECT * FROM `book`";
     
         // FETCHING DATA FROM DATABASE
         $result = $conn->query($query);
         ?>
         <br>
         <center><h2 style="background-color:rgb(230,57,70); color:#FFF; border-radius:15%;">Books Details</h2><br>
         <?php
?>
     <center>
       <table border ="1" cellspacing="0" cellpadding="10">
       <tr>
         <th>ID</th>
         <th>Book Name</th>
         <th>Book Details</th>
         <th>Book Author</th>
         <th>Book Publications</th>
         <th>Branch</th>
         <th>Book Price</th>
         <th>Book Quantity</th>
         <th>Book Rent</th>
       </tr>
      </center>
    <?php
    function test()
    {
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $q = "INSERT INTO requestbook(userid,bookid, username, usertype, bookname, issuedays) VALUES ()";
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
              <tr>
                <!-- <td><?php echo $sn; ?> </td> -->
                <td><?php echo $data['id']; 
                    $ID = $data['id'];?> </td>
                <td><?php echo $data['bookname']; ?> </td>
                <td><?php echo $data['bookdetail']; ?> </td>
                <td><?php echo $data['bookaudor']; ?> </td>
                <td><?php echo $data['bookpub']; ?> </td>
                <td><?php echo $data['branch']; ?> </td>
                <td><?php echo $data['bookprice']; ?> </td>
                <td><?php echo $data['bookquantity']; ?> </td>
                <td><?php echo $data['bookrent']; ?> </td>
                <script> var id = '{{$data['id']}}'; </script>
                <td><button class="btn" onclick="clickMe(id)">Request</button></td>
              <tr>
            </center>

            <script>
    
</script>
            
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