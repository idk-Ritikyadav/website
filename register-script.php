<?php 
if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        session_unset();
        session_destroy();

        session_start();


        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header("Location: info-form.php");
                }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
}
?>