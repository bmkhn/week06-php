<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part I - Practice Set 03</title>
</head>
<body>
    <h2>Array of Even Numbers</h2>
    <?php
        $matrix = [
            [12, 23, 34],
            [45, 55, 62],
            [71, 84, 90]
        ];

        $i = 0;
        $j = 0;
        $rows = count($matrix);
        $cols = count($matrix[0]);

        echo "<ul>";
        while ($i < $rows) {
            while ($j < $cols) {
                if ($matrix[$i][$j] % 2 == 0) {
                    echo "<li>" . $matrix[$i][$j] . "</li>";
                }
                $j++;
            }
            $j = 0; // Reset Column
            $i++;
        }
        echo "</ul>";
    ?>
</body>
</html>