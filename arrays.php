<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $numbers = array(4, 8, 15, 16, 23, 42);
    echo $numbers[0];
    ?>
    <br>
    <!-- arrays can have mixed data types  -->
    <?php
    $mixed = array(6, "fox", 2.4, "d", array(1, 2, 3));

    //get value from nested array
    echo $mixed[4][1]; ?>
    <br>
    <!-- echo array in a readable format -->
    <pre>
        <?php echo print_r($mixed); ?>
    </pre>

    <!-- reassign value at index -->
    <?php $mixed[2] = 4; ?>
    <!-- push to end of array -->
    <?php $mixed[] = "horse"; ?>
    <pre>
        <?php echo print_r($mixed); ?>
    </pre>
</body>

</html>