<?php
session_start();

// Quiz questions
$questions = [
    "What does PHP stand for?" => "PHP: Hypertext Preprocessor",
    "Which symbol is used to start a PHP variable?" => "$",
    "Which of these is a PHP superglobal?" => "_GET"
];

// Initialize score
if (!isset($_SESSION['score'])) $_SESSION['score'] = 0;
if (!isset($_SESSION['q'])) $_SESSION['q'] = 0;

// Handle answer submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer = $_POST['answer'];
    $currentQuestion = array_keys($questions)[$_SESSION['q']];
    if ($answer == $questions[$currentQuestion]) $_SESSION['score'] += 1;
    $_SESSION['q']++;
}

// Check if quiz finished
if ($_SESSION['q'] >= count($questions)) {
    echo "<h2>Quiz Finished!</h2>";
    echo "<p>Your score: {$_SESSION['score']} / " . count($questions) . "</p>";
    session_destroy();
    echo "<a href=''>Retry Quiz</a>";
    exit;
}

// Current question
$currentQuestion = array_keys($questions)[$_SESSION['q']];
$options = [$questions[$currentQuestion], "Option 1", "Option 2", "Option 3"];
shuffle($options); // randomize options
?>

<h2>Simple PHP Quiz</h2>
<p><?php echo $currentQuestion; ?></p>
<form method="post">
    <?php foreach ($options as $opt): ?>
    <label>
        <input type="radio" name="answer" value="<?php echo $opt; ?>" required>
        <?php echo $opt; ?>
    </label><br>
    <?php endforeach; ?>
    <button type="submit">Next</button>
</form>