<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string-functions</title>
</head>

<body>
    <?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";

    $third = $first;
    $third .= $second;
    echo $third;
    ?>

    <br>
    <!-- makes all chars lowercase -->
    Lowercase: <?php echo strtolower($third); ?>
    <br>
    <!-- makes all chars uppercase -->
    Uppercase: <?php echo strtoupper($third); ?>
    <br>
    <!-- makes the first word uppercase -->
    Uppercase first: <?php echo ucfirst($third); ?>
    <br>
    <!-- makes all the words uppercase -->
    Uppercase words: <?php echo ucwords($third); ?>
    <br>
    <hr>

    <!-- returns length of string -->
    Length: <?php echo strlen($third); ?>
    <br>
    <!-- removes white space at beginning and end -->
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?>
    <br>
    <!-- returns rest of string starting at second argument -->
    Find: <?php echo strstr($third, "brown"); ?>
    <br>
    <!-- replaces first with second in third argument -->
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?>
    <br>
    <hr>
    <!-- repeats string given number of times -->
    Repeat: <?php echo str_repeat($third, 2); ?>
    <br>
    <!-- returns substring between indeces -->
    Make substring: <?php echo substr($third, 5, 10); ?>
    <br>
    <!-- finds index of second argument -->
    Find position: <?php echo strpos($third, "brown"); ?>
    <br>
    <!-- returns rest of string starting at given character -->
    Find Character: <?php echo strchr($third, "z"); ?>
</body>

</html>