<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  
    <main>
        <form action="formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname">

            <label for="lastname">Lastname?</label>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname">

            <label for="favouritegame">Favourite Game</label>
            <select id="favouritegame" name="favouritegame">
                <option selected>Selected</option>
                <option value="cricket">Cricket</option>
                <option value="hokey">Hokey</option>
                <option value="football">Football</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>

    <?php if (isset($_SESSION['formdata'])): ?>
        <div class="response-box">
            <h3>Data from Backend:</h3>
            <p><strong>Firstname:</strong> <?= $_SESSION['formdata']['firstname'] ?></p>
            <p><strong>Lastname:</strong> <?= $_SESSION['formdata']['lastname'] ?></p>
            <p><strong>Favourite Game:</strong> <?= $_SESSION['formdata']['favouritegame'] ?></p>
        </div>
        <?php unset($_SESSION['formdata']); // clear after showing ?>
    <?php endif; ?>

</body>
</html>
