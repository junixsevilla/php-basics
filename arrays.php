<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering Arrays</title>
</head>
<body>
    <?php

    // NORMAL ARRAYS
    // $arrayList = array(123, 45, 67, "Test");
    
    // this is a newer array format. it works the same as above
    $arrayList = [123, 45, 67, "Test"];

    // ASSOCAIATIVE ARRAY (KEY=> VALUE)
    $names = array("first_name"=> "Junix", "last_name"=>"Aranco");

    // print_r($names);

    // echoing the normal array 
    echo "Normal Array <br> The value in the list is " . "<b>". $arrayList[3] . "</b>";

    echo "<br/><br/>"; 

    // echoing the associative array
     echo "Associative Array <br> The value in the list is " . "<b>". $names["first_name"] . " " . $names["last_name"] . "</b>";

    ?>
    
</body>
</html>