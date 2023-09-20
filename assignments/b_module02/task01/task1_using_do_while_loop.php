<?php 
  function IncrementEvenDoWhileLoop($startNum, $endNum, $stepNum){
    $i = $startNum+1;
    do{
        echo $i . " ";
        $i += $stepNum;

    }while($i <= $endNum);

  }

  IncrementEvenDoWhileLoop(1, 20, 2);
?>