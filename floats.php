<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floats</title>
</head>

<body>
    <?php $float = 3.14; ?>
    <?php echo $float; ?><br>
    <?php echo $float + 7; ?><br>
    <hr>
    <!-- rounds to given decimal place -->
    Round: <?php echo round($float, 1); ?><br>
    <!-- always rounds up -->
    Ceiling: <?php echo ceil($float); ?><br>
    <!-- always rounds down -->
    Floor: <?php echo floor($float); ?><br>

    <?php $integer = 3; ?>
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br>
    <?php echo "Is {$float} integer? " . is_int($float); ?><br>
</body>

</html>