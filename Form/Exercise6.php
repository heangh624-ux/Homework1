<!DOCTYPE html>
<html>
<head>
    <title>Exercise 6</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">
    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        echo "Login Successful!";
    } else {
        echo "Invalid Username or Password!";
    }
}
?>

</body>
</html>