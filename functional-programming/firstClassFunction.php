<?php
#Una función de primera clase es una función que se puede guardar en variables

$some = function(float $a, float $b): float
{
  return $a + $b;
};

echo $some(2, 3);