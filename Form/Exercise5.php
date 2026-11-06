<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Exercise 5</h2>

<form method="POST">
    Name:
    <input type="text" name="name" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    Gender:
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br><br>

    Address:
    <input type="text" name="address" required>
    <br><br>

    <button type="submit" name="submit">Register</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = (int) $_POST['age'];
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);

    echo "<h3>Student Information</h3>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Address: $address <br>";
}
?>

</body>
</html>