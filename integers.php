<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers</title>
</head>

<body>
    <?php
    $var1 = 2;
    $var2 = 3;
    ?>

    Basic math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br>
    <!-- absolute value of int -->
    Absolute value: <?php echo abs(-300); ?><br>
    <!-- raise first argument to power of second argument -->
    Exponential: <?php echo pow(2, 8); ?><br>
    <!-- Square root of argument -->
    Square root: <?php echo sqrt(100); ?><br>
    <!-- returns remainder from first/second -->
    Modulo: <?php echo fmod(10, 2); ?><br>
    <!-- returns random int -->
    Random: <?php echo rand(); ?><br>
    <!-- returns random int within range (inclusive) -->
    Random (min, max): <?php echo rand(1, 10); ?><br>
    <hr>

</body>

</html>