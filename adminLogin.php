<?php  
    $server = "localhost";
    $user = "root";
    $password = "";
    $database  = "library_management";

    $con = mysqli_connect($server, $user, $password, $database);
    if ($con)
    {
        alert "Database connected";
    }
    else{
        alert "Connection failed";
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $type = $_POST['type']
l
    $sql = "INSERT INTO  (name, email, pass, type) VALUES ('$name','$email',' $pass','$type');";

    if(mysqli_query($con, $sql))
    {
        alert "User added!";
    }
    else{
      
        alert "Unsuccessful Transaction";
    }

    mysqli_close($con);
?>