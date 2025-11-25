<?php
$result = "";

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero error!";
                }
                break;
            default:
                $result = "Invalid operator";
        }
    } else {
        $result = "Please enter valid numbers";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Calculator</title>
    <style>
    body {
        font-family: Arial;
        margin: 50px;
    }

    input,
    select,
    button {
        padding: 5px;
        margin: 5px;
    }

    .result {
        margin-top: 20px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h2>Simple PHP Calculator</h2>
    <form method="POST">
        <input type="text" name="num1" placeholder="First number" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Second number" required>
        <button name="calculate">Calculate</button>
    </form>

    <?php if ($result !== ""): ?>
    <div class="result">Result: <?= htmlspecialchars($result); ?></div>
    <?php endif; ?>
</body>

</html>