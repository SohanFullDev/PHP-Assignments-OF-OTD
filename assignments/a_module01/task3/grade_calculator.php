<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Grade Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Grade Calculator</h1>
        <?php
            $subject1 = $_POST['subject1'];
            $subject2 = $_POST['subject2'];
            $subject3 = $_POST['subject3'];
            $subject4 = $_POST['subject4'];

            $totalMarks = $subject1 + $subject2 + $subject3 + $subject4;
            $average = $totalMarks / 4;

            // Define your grading criteria here
            if ($average >= 90) {
                $grade = 'A+';
            } elseif ($average >= 80) {
                $grade = 'A';
            } elseif ($average >= 70) {
                $grade = 'B';
            } elseif ($average >= 60) {
                $grade = 'C';
            } else {
                $grade = 'F';
            }

            echo "<p>Average Mark: " . number_format($average, 2) . "</p>";
            echo "<p>Grade: " . $grade . "</p>";
        ?>
    </div>
</body>
</html>
