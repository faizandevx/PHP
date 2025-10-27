<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing PHP</title>
</head>
<body>
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


?>

</body>
</html>