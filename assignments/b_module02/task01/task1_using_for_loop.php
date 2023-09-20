<?php
 function IncrementEvenForLoop($startNum, $endNum, $stepNum){
    for ($i= $startNum+1; $i<=$endNum; $i += $stepNum){
        echo $i . " ";

    }

 }

   
    IncrementEvenForLoop(1,20,2);

?>