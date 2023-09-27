<?php
$studentGrades = [
    'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student 3' => ['Math' => 75, 'English' => 80, 'Science' => 85],
];


function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        
        echo "$student's Average Grade: $average\n";
    }
}

calculateAverageGrades($studentGrades);
?>
