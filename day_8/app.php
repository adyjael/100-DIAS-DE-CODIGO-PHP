<?php

function leterCombinatorOfPhoneNumber(int $num1, $num2)
{
  $letras = [2 => ["a","b","c"], 3 => ["d","e","f"], 4 => ["g","h","i"], 5 => ["j","k","l"], 6 => ["m","n","o"], 7 => ["p","q","r","s"], 8 => ["t","u","v"], 9 => ["w","x","y","s"]];
  $letra1 = $letras[$num1];
  $letra2 = $letras[$num2];
  foreach ($letra1 as $key1 => $value1) {
    foreach($letra2 as $key2 => $value2){
      echo $letra1[$key1]. $letra2[$key2] . "\n";
    }
  }
}
leterCombinatorOfPhoneNumber(2,2);
