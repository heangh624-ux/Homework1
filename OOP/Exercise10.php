<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 10</title>
</head>
<body>
    <?php

class Calculator {

    function add($a, $b) {
        return $a + $b;
    }

    function subtract($a, $b) {
        return $a - $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function divide($a, $b) {
        if ($b == 0) {
            return "Cannot divide by zero!";
        }

        return $a / $b;
    }
}

// Create Object
$calc = new Calculator();

$num1 = 20;
$num2 = 10;

echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br><br>";

echo "Addition: " . $calc->add($num1, $num2) . "<br>";

echo "Subtraction: " . $calc->subtract($num1, $num2) . "<br>";

echo "Multiplication: " . $calc->multiply($num1, $num2) . "<br>";

echo "Division: " . $calc->divide($num1, $num2) . "<br>";

?>
</body>
</html>