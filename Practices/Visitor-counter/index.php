<?php
// File location
$file = "counter.txt";

// If file doesn't exist, create it
if(!file_exists($file)){
    file_put_contents($file, "0");
}

// Read current count
$count = file_get_contents($file);

// Increase count
$count++;

// Save updated count
file_put_contents($file, $count);

// Display on page
?>

<!DOCTYPE html>
<html>

<head>
    <title>Visitor Counter</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        text-align: center;
        padding-top: 80px;
    }

    .box {
        background: white;
        width: 300px;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px #aaa;
    }

    h1 {
        color: #333;
    }

    p {
        font-size: 22px;
        font-weight: bold;
        color: #007bff;
    }
    </style>
</head>

<body>

    <div class="box">
        <h1>Visitor Counter</h1>
        <p>Total Visitors: <?php echo $count; ?></p>
    </div>

</body>

</html>