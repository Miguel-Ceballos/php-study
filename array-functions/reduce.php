<?php

require "modelsArray/People.php";
require "modelsArray/functions.php";

use modelsArray\People;

$people = [
    new People("Miguel", 26),
    new People("Angel", 30),
    new People("Sofia", 20),
    new People("Huitzili", 40),
];

$sum = array_reduce($people, fn($value, $person) => $value + $person->age, 0);
show($sum);