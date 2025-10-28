<!DOCTYPE html>
<html>
<head>
    <title>Email Validation Example</title>
</head>
<body>

<?php
// Define variables
$email = "";
$error = "";
$success = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    // Check if empty
    if (empty($email)) {
        $error = "Email is required.";
    }
    // Validate email format
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    }
    // Check if it's a Gmail address
    elseif (!str_ends_with(strtolower($email), "@gmail.com")) {
        $error = "Only Gmail addresses are allowed.";
    } 
    else {
        $success = "✅ Email is valid: " . htmlspecialchars($email);
    }
}
?>

<!-- Form Section -->
<h2>Email Validation Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Enter your Gmail:</label><br>
    <input type="text" name="email" value="<?php echo $email; ?>" placeholder="example@gmail.com">
    <br><br>
    <input type="submit" value="Validate Email">
</form>

<!-- Output Message -->
<?php
if (!empty($error)) {
    echo "<p style='color: red; font-weight: bold;'>$error</p>";
}
if (!empty($success)) {
    echo "<p style='color: green; font-weight: bold;'>$success</p>";
}
?>

</body>
</html>