<?php



// Problem 1: Even or Odd Checker

function even_Odd_checker($a){
      if($a % 2 == 0){
            echo("your entered number is even");
      }else{
            echo("your entered number is odd");
      }
}

// even_Odd_checker(6);

// Problem 2: Simple Calculator

function calculator($a, $b, $operation){

      if($operation == '+'){
            echo("your answer is: " . ($a + $b));
      }elseif($operation == '-'){
            echo("your answer is: " . ($a - $b));
      }elseif($operation == '/'){
            echo("your answer is: " . ($a / $b));
      }elseif($operation == '*'){
            echo("your answer is: " . ($a * $b));
      }else{
            echo("wrong operation can't perform");
      }

      // switch($operation){
      //       catch $operation == '+':
      //             echo("")
      // }
}

calculator(10, 20, '+');


?>