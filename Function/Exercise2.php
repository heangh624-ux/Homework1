<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <h2 align="center">
    <?php 
    function Minus ($num1, $num2){
        return $num1 - $num2;
    }
    
    $result = Minus(20,10);

    echo "Result of Number: " . $result;
    ?>
    </h2>
</body>
</html>