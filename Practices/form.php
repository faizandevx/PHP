<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <!-- PHP - $_REQUEST -->
     <!-- Using $_REQUEST on $_POST Requests -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<!-- Using $_REQUEST on $_GET Requests -->

<form method="post" action="">
  <input type="text" name="subject" placeholder="Enter subject">
  <input type="text" name="testing" placeholder="Enter testing">
  <input type="submit" value="Submit">
</form>

<?php
if (isset($_REQUEST['subject']) && isset($_REQUEST['testing'])) {
    echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['testing'];
}
?>

<!-- PHP - $_POST -->
 <!-- $_POST in HTML Forms -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<!-- PHP Superglobal - $_GET -->
 

</body>
</html>