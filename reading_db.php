<?php

include "connecting_db.php";

if (isset($_POST["view_record"])) {
    echo "VIEW RECORD <br>";
}


$query = "SELECT * FROM user";

$result = mysqli_query($connection, $query);

if (!$result) {
die ('Query failed!'.mysqli_error());
}


while ($row = mysqli_fetch_assoc($result)) {
    echo "<br> <pre>";       
    print_r($row);
    echo "</pre>";

}

?>