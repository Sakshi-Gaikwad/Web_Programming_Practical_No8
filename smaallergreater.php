<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison in PHP</title>
</head>
<body>

    <?php
        // Define two numbers
        $num1 = 10;
        $num2 = 5;

        // Compare numbers
        if ($num1 > $num2) {
            echo "<p class='greater'>$num1 is greater than $num2</p>";
        } elseif ($num1 < $num2) {
            echo "<p class='smaller'>$num1 is smaller than $num2</p>";
        } else {
            echo "<p class='equal'>$num1 is equal to $num2</p>";
        }
    ?>
</body>
</html>
