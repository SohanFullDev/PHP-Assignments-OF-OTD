<?php 
 function IncrementEvenWhileLoop($startNum, $endNum, $stepNum){
    $i = $startNum+1;
    while($i <=$endNum){
        echo $i . " ";
        $i += $stepNum;
    }

 }
 IncrementEvenWhileLoop(1,20,2);

?>