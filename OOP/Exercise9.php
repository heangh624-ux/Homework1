<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 9</title>
</head>
<body>
    <?php

class Employee {

    public $name;
    public $position;
    public $salary;

    function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    function showEmployee() {
        echo "Employee Name: " . $this->name . "<br>";
        echo "Position: " . $this->position . "<br>";
        echo "Salary: $" . $this->salary . "<br>";
    }
}

// Create Object
$employee1 = new Employee("Dara", "Manager", 500);

$employee1->showEmployee();

?>
</body>
</html>