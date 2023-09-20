<?php
 function IncrementEvenForLoop($startNum, $endNum, $stepNum){
    for ($i= $startNum; $i<=$endNum; $i += $stepNum){
        echo $i . " ";

    }

 }

 
    IncrementEvenForLoop(2,20,2);

?>