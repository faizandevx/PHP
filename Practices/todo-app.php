<?php
// File to store tasks
$file = "tasks.txt";

// Add Task
if (isset($_POST['add'])) {
    $task = trim($_POST['task']);
    if (!empty($task)) {
        file_put_contents($file, $task . PHP_EOL, FILE_APPEND);
    }
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Delete Task
if (isset($_GET['delete'])) {
    $tasks = file($file, FILE_IGNORE_NEW_LINES);
    unset($tasks[$_GET['delete']]);
    file_put_contents($file, implode(PHP_EOL, $tasks) . PHP_EOL);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Load tasks
$tasks = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP To-Do List</title>
    <style>
    body {
        font-family: Arial;
        margin: 40px;
    }

    .container {
        width: 300px;
        margin: auto;
    }

    input {
        padding: 5px;
        width: 80%;
    }

    button {
        padding: 6px 10px;
        cursor: pointer;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        background: #f3f3f3;
        padding: 8px;
        margin-bottom: 5px;
        display: flex;
        justify-content: space-between;
        border-radius: 4px;
    }

    a {
        text-decoration: none;
        color: red;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>PHP To-Do List</h2>

        <!-- Add Task -->
        <form method="POST">
            <input type="text" name="task" placeholder="Enter a task...">
            <button name="add">Add</button>
        </form>

        <h3>Your Tasks:</h3>
        <ul>
            <?php foreach ($tasks as $index => $task): ?>
            <li>
                <?= htmlspecialchars($task); ?>
                <a href="?delete=<?= $index; ?>">Delete</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>