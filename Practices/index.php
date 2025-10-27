<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing PHP</title>
</head>
<body>

<!-- PHP Form Handling -->
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

    <?php

    // PHP Regular Expressions
    //Using preg_match()
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);

//Using preg_match_all()
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

//Using preg_replace()
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);

//Grouping
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);


?>

</body>
</html>