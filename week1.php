<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- > greter than, < less than -->

    <h1>Hellow</h1>

    <!-- Variables in PHP -->
    <?php
        $name = "Juan";
        $age  = 20;
        $enrolled = true
    ?>

    <ul>
        <li><?php echo $name ?></li>
        <li><?php echo $age ?></li>
        <li><?php echo $enrolled ?></li>
    </ul>

    <!-- if else statement in PHP -->
     <?php if($enrolled == true) : ?>
        <p style="color: green;">Proceed</p>
    <?php elseif($enrolled == false): ?>
        <p style="color: red;">Go back</p>
    <?php endif?>

    <?php if($age > 12):?>
        <p style="color: green;">Go</p>
    <?php else: ?>
        <p style="color: red;">Go back</p>
    <?php endif ?>

    <!-- array in php -->

    <!-- for each loop in php -->

    <!-- function in php -->


    
    
</body>
</html>