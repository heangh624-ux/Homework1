<!DOCTYPE html>
<html>
<head>
    <title>Exercise 7</title>
</head>
<body>

<h2>Student Score Calculator</h2>

<form method="POST">

    Student Name:
    <input type="text" name="name" required>
    <br><br>

    Score 1:
    <input type="number" name="score1"
           min="0" max="100" required>
    <br><br>

    Score 2:
    <input type="number" name="score2"
           min="0" max="100" required>
    <br><br>

    Score 3:
    <input type="number" name="score3"
           min="0" max="100" required>
    <br><br>

    <button type="submit" name="calculate">
        Calculate
    </button>

</form>

<?php
if (isset($_POST['calculate'])) {

    $name = htmlspecialchars($_POST['name']);

    $score1 = (float) $_POST['score1'];
    $score2 = (float) $_POST['score2'];
    $score3 = (float) $_POST['score3'];

    if (
        $score1 < 0 || $score1 > 100 ||
        $score2 < 0 || $score2 > 100 ||
        $score3 < 0 || $score3 > 100
    ) {
        echo "Scores must be between 0 and 100!";
    } else {
        $total = $score1 + $score2 + $score3;
        $average = $total / 3;

        echo "<h3>Result</h3>";
        echo "Name: $name <br>";
        echo "Total Score: $total <br>";
        echo "Average: " . number_format($average, 2);
    }
}
?>

</body>
</html>