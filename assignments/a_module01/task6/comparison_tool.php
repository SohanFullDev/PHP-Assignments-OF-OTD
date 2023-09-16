<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    <form action="comparison_tool.php" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" id="num1" name="num1" required><br>
        
        <label for="num2">Enter the second number:</label>
        <input type="number" id="num2" name="num2" required><br>

        <input type="submit" value="Compare">
    </form>

    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user-entered numbers
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            // Use the ternary operator to determine the larger number
            $largerNumber = ($num1 > $num2) ? $num1 : $num2;

            // Display the result
            echo "<p>The larger number is: $largerNumber</p>";
        }
    ?>
</body>
</html>
