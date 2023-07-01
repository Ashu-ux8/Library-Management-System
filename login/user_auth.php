<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "library_managment";

$con = mysqli_connect($server, $user, $password, $database);
if ($con) {
    echo '<script>alert("Database Connected")</script>';
} else {
    echo '<script>alert("Connection Error!!")</script>';
}

if (isset($_POST['Uemail']) && isset($_POST['Upass'])) {
    $email = $_POST['Uemail'];
    $pass = $_POST['Upass'];

    $cookie_name = "User_email";
    setcookie($cookie_name, $email, time() + 24 * 3600, "/");

    if (isset($_COOKIE["User_email"])) {
      //  echo $_COOKIE[$cookie_name];
    } else {
        echo '<script>alert("Cookie is not set!")</script>';
    }

    $query = "SELECT email FROM userdata WHERE pass='$pass'";
    $res = mysqli_query($con, $query);
    echo mysqli_num_rows($res);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        $st_em = $row['email'];
    
        if ($st_em == $email) {
            echo '<script>alert("User Authenticated")</script>';
            echo "Test"; //
            header("Location: ../user/user_page.php");
            exit();
        } else {
            echo '<script>alert("Not authenticated")</script>';
            header("Location: ../signin.php");
            exit();
        }
    } else {
        echo '<script>alert("Invalid credentials")</script>';
        header("Location: ../signin.php");
        exit();
    }
}
    
    
    // if (mysqli_num_rows($res) == 1) {
    //     $row = mysqli_fetch_assoc($res);
    //     $st_em = $row['email'];

    //     if ($st_em == $email) {
    //         echo '<script>alert("User Authenticated")</script>';
    //         echo "Test";
    //         header("Location: ../user/user_page.php");
    //         exit();
    //     } else {
    //         echo "Not authenticated";
    //         header("Location: ../signin.php");
    //         exit();
    //     }
    // } else {
    //     echo "Number of rows > 1";
    //     header("Location: ../signin.php");
    //     exit();
    // }
    // } else {
    //     echo "Entered credentials are not set.";
    //     header("Location: ../signin.php");
    //     exit();
    // }
?>
