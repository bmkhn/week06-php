<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part I - Practice Set 01</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    
    <form action="" method="post">
        <label for="side1">Side 1:</label>
        <input type="number" id="side1" name="side1" step="0.01" required><br><br>
        
        <label for="side2">Side 2:</label>
        <input type="number" id="side2" name="side2" step="0.01" required><br><br>
        
        <label for="side3">Side 3:</label>
        <input type="number" id="side3" name="side3" step="0.01" required><br><br>
        
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $side1 = (float)$_POST['side1'];
        $side2 = (float)$_POST['side2'];
        $side3 = (float)$_POST['side3'];

        // Calculate semi-perimeter (s)
        $s = ($side1 + $side2 + $side3) / 2;

        // Calculate the area using Heron's formula without sqrt function
        $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
        $area = pow($areaSquared, 0.5); // Using pow function to calculate square root

        // Display the result formatted to two decimal places
        echo "<h2>Area of the Triangle: " . number_format($area, 2) . " square units</h2>";
    }
    ?>
</body>
</html>