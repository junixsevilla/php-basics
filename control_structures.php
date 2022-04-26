<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php  

// if statement.
$php = 8;
if ($php <= 5) {
echo "I am a beginner. <br/>";
} elseif ($php > 5 && $php < 8 ) {
	echo "Still learning PHP. <br/>";
}  else {
	echo "I love PHP. <br/>";
}

// for loop
for ($i=1; $i <=10; $i++) {
echo $i . "<br/>";
}

//switch

$rating = 100;

switch($rating) {
	case 100:
	echo "You're a genius!";
	break;

	case 90:
	echo "Almost there! 90";
	break;

	case 80:
	echo "Almost there! 80";
	break;

	case 70:
	echo "Almost there! 70";
	break;
	
	case 60:
	echo "Almost there! 60";
	break;

	default: 
	echo "Just testing!";
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>

</body>
</html>