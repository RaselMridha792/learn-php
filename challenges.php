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
// calculator(10, 20, '+');

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
// calculator_SC(10, 20, '+');


// Problem 3: Find Maximum Between Three Numbers

function maxNum($a, $b, $c){
            if(($a > $b) && ($a > $c)){
                  echo("the big max number is: " . $a);
            }elseif(($b > $c) && ($b > $a)){
                  echo("the big max number is: " . $b);
            }elseif( ($c > $a) && ($c > $b)){
                  echo("the big max number is: " . $c);
            }else{
                  echo("invalid input");     
            }
                  
}
maxNum(2, 3, 51);


?>