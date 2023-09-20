<?php 
function fibonacciSeries($count) {
    $fibonacci = [];

    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    
    for ($i = 0; $i < $count; $i++) {
        echo $fibonacci[$i] . " ";
    }
}

// Calling the function 
fibonacciSeries(15);


?>