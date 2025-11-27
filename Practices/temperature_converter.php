<?php
$result = "";

if (isset($_POST['convert'])) {
    $value = $_POST['temp_value'];
    $type = $_POST['conversion_type'];

    if (is_numeric($value)) {
        if ($type == "c_to_f") {
            $result = ($value * 9/5) + 32;
            $result = "$value °C = $result °F";
        } else {
            $result = ($value - 32) * 5/9;
            $result = "$value °F = $result °C";
        }
    } else {
        $result = "Please enter a valid number!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
    <style>
    body {
        background: #f2f2f2;
        font-family: Arial, sans-serif;
    }

    .container {
        width: 400px;
        margin: 60px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    input,
    select,
    button {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        font-size: 16px;
    }

    button {
        background: #007BFF;
        border: none;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }

    .result {
        margin-top: 15px;
        padding: 12px;
        background: #e9f7ef;
        border-left: 4px solid #28a745;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Temperature Converter</h2>

        <form method="POST">
            <input type="text" name="temp_value" placeholder="Enter temperature" required>

            <select name="conversion_type">
                <option value="c_to_f">Celsius to Fahrenheit</option>
                <option value="f_to_c">Fahrenheit to Celsius</option>
            </select>

            <button type="submit" name="convert">Convert</button>
        </form>

        <?php if ($result != ""): ?>
        <div class="result">
            <?php echo $result; ?>
        </div>
        <?php endif; ?>
    </div>

</body>

</html>