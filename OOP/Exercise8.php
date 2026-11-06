<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 8</title>
</head>
<body>
    <?php

class Student {

    public $name;
    public $age;
    public $gender;

    function setInformation($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    function showInformation() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender: " . $this->gender . "<br>";
    }
}

// Create Object
$student1 = new Student();

$student1->setInformation("Heang", 22, "Male");

$student1->showInformation();

?>
</body>
</html>