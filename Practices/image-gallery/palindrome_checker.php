<!DOCTYPE html>
<html>

<head>
    <title>Palindrome Checker</title>
</head>

<body>

    <h2>Palindrome Checker</h2>

    <form method="POST">
        <input type="text" name="word" placeholder="Enter a word" required>
        <button type="submit">Check</button>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = strtolower($_POST["word"]);   // convert to lowercase
    $reverse = strrev($word);             // reverse the string

    if ($word == $reverse) {
        echo "<h3>✔ '$word' is a Palindrome.</h3>";
    } else {
        echo "<h3> '$word' is NOT a Palindrome.</h3>";
    }
}
?>

</body>

</html>