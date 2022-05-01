<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>

<?php

// first value is the base, and the second is the exponent
echo "Power: ";
echo pow(2, 4);
echo "<br>";

// first value is the start, the second is the max
echo "Random: ";
echo rand(1, 20);
echo "<br>";

// Square root
echo "Square root: ";
echo sqrt(100);
echo "<br>";
echo "<br>";

// Round up
echo "<b>The values is 5.6 <br></b>";
echo "Round Up: ";
echo ceil(5.6);
echo "<br>";

// Round down 
echo "Round Down: ";
echo floor(5.6);
echo "<br>";

// Round to the nearest number
echo "Round to the nearest: ";
echo round(5.6);
echo "<br>";

?>
    
</body>
</html>