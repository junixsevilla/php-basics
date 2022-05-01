<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>

<?php

$list = [23, 56,78, 87,122, 789, 9];

echo "Max: ";
echo max($list);
echo "<br>";

echo "Min: ";
echo min($list);
echo "<br>";

sort($list);
print_r($list);
echo "<br>";

$found = in_array(123, $list);

	if ($found) {
		echo "You found it!";
	} else {
		echo "Sorry not found!";
	}
?>
    
</body>
</html>