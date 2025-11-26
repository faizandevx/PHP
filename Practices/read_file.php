<?php
$file = fopen("demo.txt", "r");

if ($file) {
    $content = fread($file, filesize("demo.txt"));
    fclose($file);

    echo "<h3>File Content:</h3>";
    echo nl2br($content); // converts \n to new line in HTML
} else {
    echo "Unable to open the file!";
}
?>