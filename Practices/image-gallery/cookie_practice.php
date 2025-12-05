<?php
// Set a cookie called "username" for 1 hour
$cookie_name = "username";
$cookie_value = "Faizan";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

// Delete cookie if ?delete=1 is passed
if(isset($_GET['delete'])){
    setcookie($cookie_name, "", time() - 3600, "/");
    echo "Cookie deleted!<br>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Browser Cookies Practice</title>
</head>

<body>

    <h2>PHP Cookies Practice</h2>

    <?php
if(isset($_COOKIE[$cookie_name])) {
    echo "✔ Cookie '" . $cookie_name . "' is set! Value: " . $_COOKIE[$cookie_name];
} else {
    echo " Cookie '" . $cookie_name . "' is not set yet!";
}
?>

    <br><br>
    <a href="?delete=1">Delete Cookie</a>

</body>

</html>