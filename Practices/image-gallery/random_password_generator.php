<?php
// Function to generate random password
function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    $max_index = strlen($chars) - 1;

    for($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, $max_index)];
    }

    return $password;
}

// Generate password if form submitted
$password = '';
if(isset($_POST['generate'])) {
    $length = intval($_POST['length']); // get length from user
    if($length < 4) $length = 4; // minimum length
    $password = generatePassword($length);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Random Password Generator</title>
</head>

<body>

    <h2>Random Password Generator</h2>

    <form method="POST">
        <label>Password Length:</label>
        <input type="number" name="length" value="8" min="4" max="32" required>
        <button type="submit" name="generate">Generate Password</button>
    </form>

    <?php
if($password != '') {
    echo "<h3>Your Random Password: <strong>$password</strong></h3>";
}
?>

</body>

</html>