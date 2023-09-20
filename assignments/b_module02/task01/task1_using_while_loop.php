<?php 
 function IncrementEvenWhileLoop($startNum, $endNum, $stepNum){
    $i = $startNum;
    while($i <=$endNum){
        echo $i . " ";
        $i += $stepNum;
    }

 }
 IncrementEvenWhileLoop(2,20,2);

?>