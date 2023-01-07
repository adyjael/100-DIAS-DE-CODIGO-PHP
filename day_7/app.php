<?php

function mergeSortedArray(array $num1, array $num2)
{
  $arrayJuntos = array_merge($num1, $num2);
  sort($arrayJuntos);
  $string = implode("", $arrayJuntos);
  $string = str_replace("0", "", $string);
  $arraySemZero = str_split($string);
  return $arraySemZero;
}
mergeSortedArray([1, 2, 3, 0, 0, 0], [2, 5, 0, 6]);
// OutPut: 122356
