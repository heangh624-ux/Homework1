<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <h2 align="center">
    <?php 
    function Multi ($num1, $num2){
        return $num1 * $num2;
    }
    
    $result = Multi(5,5);

    echo "Total of Number: " . $result;
    ?>
    </h2>
</body>
</html>