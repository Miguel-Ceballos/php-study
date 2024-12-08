<?php
# La recursividad es una función que se llama a sí misma
function show($n)
{
    if ($n < 1){
        return;
    }
    echo "Hola mundo ". $n . "<br>";
    show($n - 1);
}

show(10);
