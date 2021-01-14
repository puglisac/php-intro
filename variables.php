<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <?php
    //declare a variable and echo in browser
    $var1 = 10;
    echo $var1;
    echo "<br />";
    // change value of variable
    $var1 = "changed var";
    echo $var1;
    echo "<br />";
    //declare new variable and echo
    $var2 = "Hello world";
    echo $var2 . "<br/>";

    //using variables within strings (only works with double-quotes)
    echo "$var2 again!";
    ?>
</body>

</html>