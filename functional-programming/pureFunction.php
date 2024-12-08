<?php

class Counter
{
    public int $count = 0;
}

$counter = new Counter();

#Esta función sí nodifica los valores que se le pasan
function show(Counter $counter): string
{
    $counter->count++;
    return $counter->count."<br>";
}

echo show($counter);
echo show($counter);
echo show($counter);
echo show($counter);

#Esta función no modifica los valores que se le pasan
function add(float $a, float $b): float
{
    return $a + $b;
}

echo add(1, 3);