<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
</head>
<body>

    <div class="calculator">
        <?php
            // Define two numbers
            $num1 = 10;
            $num2 = 5;

            // Addition
            $sum = $num1 + $num2;
            echo "<p>Sum: $num1 + $num2 = $sum</p>";

            // Subtraction
            $difference = $num1 - $num2;
            echo "<p>Difference: $num1 - $num2 = $difference</p>";

            // Multiplication
            $product = $num1 * $num2;
            echo "<p>Product: $num1 * $num2 = $product</p>";

            // Division
            // Check for division by zero
            if ($num2 != 0) {
                $quotient = $num1 / $num2;
                echo "<p>Quotient: $num1 / $num2 = $quotient</p>";
            } else {
                echo "<p>Cannot divide by zero!</p>";
            }
        ?>
    </div>
</body>
</html>
