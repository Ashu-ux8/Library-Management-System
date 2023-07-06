issue here
<?php
    include 'av_books.php';
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $book_id = $_SESSION['book_id'];
    $book_name = $_SESSION['book_name'];
    $email = $_COOKIE["User_email"];
    $date = date("Y/m/d") ;
    // echo $date;

    echo $email;
    echo $book_id, ' ',$book_name;


    
?>