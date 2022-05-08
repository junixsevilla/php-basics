<?php
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Submit button was clicked. <br>";
    echo "Your username is ". $username . "<br>";
    echo "Your password is ". $password . "<br>";
}

$connection= mysqli_connect('localhost', 'root', '', 'test');

if ($connection) {
    echo "You are connected to the database.";
} else {
    die ("Not connected");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to Database</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" value="Submit" name="submit">
</form>

    
</body>
</html>