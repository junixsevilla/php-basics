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

$query = "INSERT INTO user(username,password) VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if (!$result) {
die ('Query failed!'.mysqli_error());
} else {
    echo "<br> New data added to db.";
}


?>