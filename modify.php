
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study</title>
    <style>*{text-align: center;} a{text-decoration: none; font-size: 2rem;}li{display: inline-block;margin: 1rem;text-align: center;}</style>
</head>
<body>
<?php
include ('info-script.php');


?>

    <h1>Modify</h1>
<nav>
<li><a href="./register.php"> Register</a></li>
<li><a href="./signin.php">Signin</a></li>
<li><a href="./profile.php">Profile</a></li>
<li><a href="./modzzify.php">Modify</a></li>
<li><a href="./info-form.php">Info</a></li></nav>

<form action="" method="post">


<label for="name"></label>
<input type="text" name="name" id="name" placeholder="Enter name" value="<?php echo $_SESSION['name']; ?>">

<label for="phone"></label>
<input type="text" name="phone" id="phone" placeholder="Enter phone No" value="<?php echo $_SESSION['phone'] ?>" >

<label for="address"></label>
<input type="text" name="address" id="address" placeholder="Enter address" value="<?php echo $_SESSION['address'] ?>">

<label for="stream"></label>
<input type="text" name="stream" id="stream" placeholder="Enter stream" value="<?php echo $_SESSION['stream'] ?>">

<label for="shift"></label>
<input type="text" name="shift" id="shift" placeholder="Enter shift" value="<?php echo $_SESSION['shift'] ?>">

<label for="year"></label>
<input type="text" name="year" id="year" placeholder="Enter your admission year" value="<?php echo $_SESSION['year'] ?>">

<input type="submit" value="submit" >

</form>



</body>
</html>