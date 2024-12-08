<?php

require "modelsArray/People.php";
require "modelsArray/functions.php";

use modelsArray\People;

$people1 = [
    new People("Miguel", 26),
    new People("Angel", 30),
    new People("Sofia", 20),
    new People("Huitzili", 40),
];

$people2 = [
    new People("Miguel", 26),
    new People("Victor", 30),
    new People("Sofia", 20),
    new People("Edgar", 40),
];

# Recupera las diferencias del primer arreglo con el segundo

$differences = array_udiff($people1, $people2, fn($person1, $person2) => $person1->name <=> $person2->name);
show($differences);