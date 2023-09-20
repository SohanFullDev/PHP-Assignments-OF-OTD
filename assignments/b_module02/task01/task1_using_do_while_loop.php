<?php 
  function IncrementEvenDoWhileLoop($startNum, $endNum, $stepNum){
    $i = $startNum;
    do{
        echo $i . " ";
        $i += $stepNum;

    }while($i <= $endNum);

  }

  IncrementEvenDoWhileLoop(2, 20, 2);
?>