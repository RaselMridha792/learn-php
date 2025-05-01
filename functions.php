<?php


// create a function for add two number
function add($a, $b){
      $sum = $a + $b;
      echo("the sum of your provide number is: " . $sum);
}

// add(4, 100);

function compare($a, $b, $c){
      if($a > $b && $a > $c){
            echo("the big number is: " . $a);
      }elseif($b > $c && $b > $a){
            echo("the big number is: " . $b);
      }else{
            echo("the big number is: " . $c);
      }
}

// compare(23434, 2342341, 543342);


?>