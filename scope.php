<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global and Local Scope</title>
</head>
<body>

<?php
// global  - variable declared outside the function

$x = "Outside";

function callingX() {
    global $x;
    $x = "Inside";


echo $x;
}

echo $x . " - x from global";

// local - variable declared inside the function
echo "<br>";
callingX(); 
echo " - x from local";

// making local variable into global by adding the "global" keword
echo "<br>";
echo $x;
echo " - x from local, globalized";



?>
    
</body>
</html>