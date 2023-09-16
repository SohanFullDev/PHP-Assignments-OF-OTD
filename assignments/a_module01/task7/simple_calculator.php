<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="simple_calculator.php" method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" id="num1" name="num1" required><br>
        
        <label for="operator">Select an operation:</label>
        <select id="operator" name="operator">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br>
        
        <label for="num2">Enter the second number:</label>
        <input type="number" id="num2" name="num2" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user-entered numbers and operator
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];

            // Perform the selected arithmetic operation
            switch ($operator) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    // Check for division by zero
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operator";
            }

            // Display the result
            echo "<p>Result: $result</p>";
        }
    ?>
</body>
</html>
