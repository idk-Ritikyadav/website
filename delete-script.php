<?php
// deleteing the row of database


 include 'connection.php';
    include ('info-script.php');
    include('register-script.php');
    session_start();
    $username = $_SESSION['username'];
    $sql = "DELETE FROM `userdetails` WHERE `username` = '$username'";
    if(!$sql){
        echo "The record was not deleted successfully because of this error ---> ". mysqli_error($conn);
    }
    else{
header("Location: admin.php");

    }

?>