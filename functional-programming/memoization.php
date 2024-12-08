<?php

function add($a, $b)
{
    return $a + $b;
}

function addMemo() : Closure
{
    $memo = [];
    return function($a, $b) use(&$memo){
      $index = $a."-".$b;

      if (isset($memo[$index])){
          echo "Ya existía operación <br>";
          return $memo[$index];
      }

      echo "No existía operación <br>";
      return $memo[$index] = $a + $b;
    };
}

$mySum = addMemo();
echo $mySum(9, 5)."<br>";
echo $mySum(10, 5)."<br>";
echo $mySum(9, 5)."<br>";
echo $mySum(10, 5)."<br>";