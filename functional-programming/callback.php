<?php

$numbers = [1,2,3,4,5,6];

function process(array $arr, callable $fun): array
{
    $newArr = [];

    foreach ($arr as $item){
        $newItem = $fun($item);
        $newArr[] = $newItem;
    }

    return $newArr;
}

$result1 = process($numbers, fn($e) => $e * 2);
print_r($result1);