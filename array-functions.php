<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>

<body>
    <?php $numbers = array(8, 23, 15, 42, 16, 4); ?>

    Count: <?php echo count($numbers); ?><br />
    Max value: <?php echo max($numbers);   ?><br />
    Min value: <?php echo min($numbers);   ?><br />
    <br />
    <hr>
    <pre>
    Sort:          <?php sort($numbers);
                    print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers);
                    print_r($numbers); ?><br />
    </pre>
    <br />
    <hr>
    <!-- converts array to string inserting first argument between each element -->
    Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
    <!-- convert string to array splitting by first argument -->
    Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />

    <!-- is first argument in array? -->
    15 in array?: <?php echo in_array(15, $numbers); // returns T/F 
                    ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F 
                    ?><br />
</body>

</html>