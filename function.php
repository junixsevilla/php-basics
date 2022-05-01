<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php

// display greetings on screen
function greetings($message)  {
    echo "GREETINGS! <br>";
    echo $message;
}
// call the function
greetings("Today is the best day to start!");
echo "<br>";
echo "<br>";

// function using parameters
function addNumber($number1, $number2) {
    $sum = $number1 + $number2;
    echo "THE SUM OF TWO NUMBERS <br>";
    echo $sum;
    echo "<br>";
    echo "<br>";
}

// call the function
addNumber(5, 6);



// function returning values
function calculate($num1, $num2) {

    $sum = $num1 + $num2;
    return $sum;
}

// Saving the result of the calculation into a variable 
$result= calculate(5, 8);
echo "RETURNING VALUES, REUSE VARIABLE";
echo "<br>";
echo "First result: " . $result;
echo "<br>";
echo "<br>";

// Using the same variable and use it one of the parameter to calculate new result
$result = calculate(10, $result);
echo "Second result: " . $result;
echo "<br>";

?>
    
</body>
</html>