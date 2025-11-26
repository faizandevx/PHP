<?php
$file = fopen("demo.txt", "w");

if ($file) {
    fwrite($file, "Hello Faizan! This is written using PHP.\n");
    fclose($file);
    echo "File created and written successfully!";
} else {
    echo "Error creating file!";
}
?>