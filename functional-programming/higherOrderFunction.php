<?php
#Una función de Orden Superior puede recibir funciones como parametros
# O retornar funciones como resultado

$number = 5;

$some = function(float $a, float $b) use($number): float{
    return $a + $b + $number;
};

$sum = fn($a, $b) => $a + $b;

$mul = function(float $a, float $b): float{
    return $a * $b;
};

function show(callable $fn, float $a, float $b) : void
{
    echo $fn($a, $b);
}

show($some, 3, 5);
show($mul, 3, 5);