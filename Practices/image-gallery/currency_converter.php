<?php
// Define fixed conversion rates (for simplicity)
$rates = [
    "PKR" => ["USD" => 0.0036, "EUR" => 0.0033],
    "USD" => ["PKR" => 280, "EUR" => 0.91],
    "EUR" => ["PKR" => 310, "USD" => 1.1]
];

$converted_amount = '';
if(isset($_POST['convert'])) {
    $amount = floatval($_POST['amount']);
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];

    if($from_currency == $to_currency) {
        $converted_amount = $amount;
    } else {
        $converted_amount = $amount * $rates[$from_currency][$to_currency];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Currency Converter</title>
</head>

<body>

    <h2>Simple Currency Converter</h2>

    <form method="POST">
        <input type="number" name="amount" placeholder="Amount" step="0.01" required>

        <select name="from_currency" required>
            <option value="PKR">PKR</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
        </select>

        <select name="to_currency" required>
            <option value="PKR">PKR</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
        </select>

        <button type="submit" name="convert">Convert</button>
    </form>

    <?php
if($converted_amount !== '') {
    echo "<h3>Converted Amount: $converted_amount $to_currency</h3>";
}
?>

</body>

</html>