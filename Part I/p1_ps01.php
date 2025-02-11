<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part I - Practice Set 01</title>
</head>
<body>
    <!-- Question 1 -->
    <h2>Question 1: What is the output of print_r($person);?</h2>
    <?php
        class Person {
            public $name;
            public $age;
        }

        $person = new Person(); 
        $person->name = "Alice"; 
        $person->age = 25;

        // Answer: Person Object ( [name] => Alice [age] => 25 )
        print_r($person);
    ?>
    
    <!-- Question 2 -->
    <h2>Question 2: What is the output of var_dump($person);?</h2>
    <?php
        // Answer: object(Person)#1 (2) { ["name"]=> string(5) "Alice" ["age"]=> int(25) }
        var_dump($person);
    ?>
    
    <!-- Question 3 -->
    <h2>Question 3: What is the output of var_dump($cashOnHand);?</h2>
    <?php
        $name = "Brad";
        $age = 40;
        $hasKids = true;
        $cashOnHand = 10.5;

        // Answer: float(10.5)
        var_dump($cashOnHand);
    ?>

    <!-- Question 4 -->
    <h2>Question 4: What character is used to concatenate strings?</h2>
    <?php
        echo "$name is $age years old<br>";
        echo "${name} is ${age} years old<br>";
        echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

        // Answer: Dot(.)
        echo "The character used to concatenate strings in PHP is the dot (.)";
    ?>

    <!-- Question 5 -->
    <h2>Question 5: What is the output of echo HOST;?</h2>
    <?php
        define('HOST', 'localhost');
        define('USER', 'root');

        // Answer: localhost
        echo HOST;
    ?>

    <!-- Question 6 -->
    <h2>Question 6:</h2>
    <?php
    ?>

    <!-- Question 7 -->
    <h2>Question 7:</h2>
    <?php
    ?>

    <!-- Question 8 -->
    <h2>Question 8:</h2>
    <?php
    ?>

    <!-- Question 9 -->
    <h2>Question 9:</h2>
    <?php
    ?>

    <!-- Question 10 -->
    <h2>Question 10:</h2>
    <?php
    ?>

    <!-- Question 11 -->
    <h2>Question 11:</h2>
    <?php
    ?>

    <!-- Question 12 -->
    <h2>Question 12:</h2>
    <?php
    ?>

    <!-- Question 13 -->
    <h2>Question 13:</h2>
    <?php
    ?>

    <!-- Question 14 -->
    <h2>Question 14:</h2>
    <?php
    ?>

    <!-- Question 15 -->
    <h2>Question 15:</h2>
    <?php
    ?>
</body>
</html>