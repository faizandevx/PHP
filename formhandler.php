<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['formdata'] = [
        'firstname'     => htmlspecialchars($_POST["firstname"]),
        'lastname'      => htmlspecialchars($_POST["lastname"]),
        'favouritegame' => htmlspecialchars($_POST["favouritegame"])
    ];

    header("Location: ./index.php");
    exit;
} else {
    header("Location: ./index.php");
    exit;
}
