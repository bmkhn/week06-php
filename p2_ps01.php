<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part II - Practice Set 01</title>
</head>
<body>
<?php
    /**
     * Calculate the total price of items in a shopping cart.
     *
     * @param array $items Array of items with 'price' key.
     * @return float Total price of items.
     */
    function calculateTotalPrice(array $items): float {
        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    /**
     * Perform a series of string manipulations.
     *
     * @param string $string The input string.
     * @return string The modified string.
     */
    function modifyString(string $string): string {
        // Remove spaces and convert to lowercase
        $string = str_replace(' ', '', $string);
        $string = strtolower($string);
        return $string;
    }

    /**
     * Check if a number is even or odd.
     *
     * @param int $number The input number.
     * @return string The result string indicating if the number is even or odd.
     */
    function checkEvenOrOdd(int $number): string {
        if ($number % 2 == 0) {
            return "The number " . $number . " is even.";
        } else {
            return "The number " . $number . " is odd.";
        }
    }


    
    // Items in the shopping cart
    $items = [
        ['name' => 'Widget A', 'price' => 10],
        ['name' => 'Widget B', 'price' => 15],
        ['name' => 'Widget C', 'price' => 20],
    ];

    // Calculate and display the total price
    $total = calculateTotalPrice($items);
    echo "Total price: $" . $total;

    // String to be modified
    $string = "This is a poorly written program with little structure and readability.";

    // Modify and display the string
    $modifiedString = modifyString($string);
    echo "\nModified string: " . $modifiedString;

    // Number to check if even or odd
    $number = 42;

    // Check and display if the number is even or odd
    $result = checkEvenOrOdd($number);
    echo "\n" . $result;
    ?>
</body>
</html>