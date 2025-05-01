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
}

calculator(10, 20, '+');

function calculator_SC($a, $b, $operator){
      switch($operator){
            case '+':
                  echo("your answer is: " . ($a + $b));
                  break;
            case '-':
                  echo("your answer is: " . ($a - $b));
                  break;
            case '/':
                  echo("your answer is: " . ($a / $b));
                  break;
            case '*':
                  echo("your answer is: " . ($a * $b));
                  break;
            default:
            echo("wrong operation can't perform");
      }
}

calculator_SC(10, 20, '+');


?>