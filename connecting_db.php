<?php

$connection= mysqli_connect('localhost', 'root', '', 'test');

if ($connection) {
    echo "You are connected to the database. <br>";
} else {
    die ("Not connected");
}

?>