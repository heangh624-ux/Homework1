<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    <h2 align="center">
    <?php 
    function Slas ($num1, $num2){
        return $num1 / $num2;
    }
    $result = Slas(100, 2);

    echo "Total of Number: " . $result;
    ?>
    </h2>
</body>
</html>