<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <form action="weather_report.php" method="post">
        <label for="temperature">Enter the temperature (&deg;C):</label>
        <input type="number" id="temperature" name="temperature" required>
        <input type="submit" value="Get Weather Report">
    </form>

    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user-entered temperature
            $temperature = $_POST["temperature"];

            // Provide weather information based on temperature
            if ($temperature < 0) {
                $message = "It's freezing!";
            } elseif ($temperature >= 0 && $temperature < 15) {
                $message = "It's cool.";
            } elseif ($temperature >= 15 && $temperature < 25) {
                $message = "It's warm.";
            } else {
                $message = "It's hot!";
            }

            // Display the weather message
            echo "<p>Temperature: $temperature&deg;C</p>";
            echo "<p>$message</p>";
        }
    ?>
</body>
</html>
