
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to Database</title>
</head>
<body>

<form action="form_process.php" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit" value="Submit" name="submit"> <br><br>
</form>

<form action="reading_db.php" method="post">
    <input type="submit" value="View Record" name="view_record">
</form>
    
</body>
</html>