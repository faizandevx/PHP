cat << 'EOF' > submit.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Form Submitted Successfully ✔</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . nl2br($message) . "<br>";

} else {
    echo "Invalid form submission!";
}
?>
EOF
