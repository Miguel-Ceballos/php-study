<?php

require "modelsArray/functions.php";

$numbers = [1,2,3,4,5];

array_walk($numbers, fn(&$number) => $number *= 2);

show($numbers);