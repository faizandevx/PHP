<?php
// countdown.php

// Set the target date and time
$target_date = "2025-12-31 23:59:59";

// Convert target date to timestamp
$target_timestamp = strtotime($target_date);

// Get current timestamp
$current_timestamp = time();

// Calculate remaining seconds
$diff = $target_timestamp - $current_timestamp;

// Prevent negative countdown
if ($diff < 0) {
    $diff = 0;
}

// Break difference into days, hours, minutes, seconds
$days = floor($diff / (60 * 60 * 24));
$hours = floor(($diff % (60 * 60 * 24)) / (60 * 60));
$minutes = floor(($diff % (60 * 60)) / 60);
$seconds = $diff % 60;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Countdown Timer</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 50px;
    }

    .timer {
        font-size: 2rem;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <h1>Countdown Timer</h1>
    <div class="timer" id="countdown">
        <?php echo "$days days, $hours hours, $minutes minutes, $seconds seconds"; ?>
    </div>

    <script>
    // Get initial values from PHP
    let days = <?php echo $days; ?>;
    let hours = <?php echo $hours; ?>;
    let minutes = <?php echo $minutes; ?>;
    let seconds = <?php echo $seconds; ?>;

    // Update countdown every second
    let countdown = setInterval(() => {
        if (seconds > 0) {
            seconds--;
        } else {
            if (minutes > 0) {
                minutes--;
                seconds = 59;
            } else {
                if (hours > 0) {
                    hours--;
                    minutes = 59;
                    seconds = 59;
                } else {
                    if (days > 0) {
                        days--;
                        hours = 23;
                        minutes = 59;
                        seconds = 59;
                    } else {
                        clearInterval(countdown);
                        document.getElementById("countdown").innerHTML = "Countdown Finished!";
                        return;
                    }
                }
            }
        }

        document.getElementById("countdown").innerHTML =
            days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds";
    }, 1000);
    </script>

</body>

</html>