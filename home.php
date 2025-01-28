<?php

//http://localhost/week1/
//bootstrap datatable

//Variables
$name = "ROlan JAy"; 
$age = 23;
$Check = true;
$students = ["juan", "Pedro", "Cruz"]; //array
$names = [ "firstName" => "John", "lastName" => "Pedro", "check" => true]; // Associative  array

$newStudent = [
    ["firstName" => "John", "lastName" => "Doe", "pass" => false],
    ["firstName" => "Jane", "lastName" => "Smith", "pass" => True],
    ["firstName" => "Alice", "lastName" => "Johnson", "pass" => false],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hellow</title>
</head>
<body>
    
    <h1><?php echo $name ?></h1>
    <h2><?php echo $age ?></h2>
    <h3><?php echo $students[1] ?></h3>

    <ul>
        <?php foreach($students as $key => $student): ?>
            <li><?php echo $student ?></li>
        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach($names as $key => $name): ?>
            <li><?php echo $name . ": " .$key ?></li>
        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach($newStudent as $value): ?>
            <?php if($value['pass'] === false): ?>
                <li style="color: red" ><?php echo $value['firstName'] ?></li>
            <?php else: ?>
                <li><?php echo $value['firstName'] ?></li>
            <?php endif ?>
        <?php endforeach?>
    </ul>


</body>
</html>