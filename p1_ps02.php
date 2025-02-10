<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part I - Practice Set 02</title>
</head>
<body>
    <h2>Array of Fruits</h2>
    <?php
        $fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
    ?>
    <ol>
    <?php
        for ($x = 0; $x < count($fruits); $x++) {
            echo "<li>" . htmlspecialchars($fruits[$x]) . "</li>";
        }
    ?>
    </ol>
</body>
</html>