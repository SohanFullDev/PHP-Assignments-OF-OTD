<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even-Odd Checker</title>
</head>
<body>
    <h1>Even-Odd Checker</h1>
    <form action="even_odd_checker.php" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user-entered number
            $number = $_POST["number"];

            // Check if the number is even or odd
            if ($number % 2 == 0) {
                $result = "Even";
            } else {
                $result = "Odd";
            }

            // Display the result
            echo "<p>The number $number is $result.</p>";
        }
    ?>
</body>
</html>
