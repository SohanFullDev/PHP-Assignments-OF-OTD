<?php 
$Num1 = 0;
$Num2 = 1;
$Step = 0;

while ($Step < 10) {
    // Calculation of Fibonacci number
    $next = $Num1 + $Num2;

    if ($next > 100) {
        break; // Break out of the loop
    }

    
    echo $next . " ";


    $Num1 = $Num2;
    $Num2 = $next;

    $Step++;
}


?>