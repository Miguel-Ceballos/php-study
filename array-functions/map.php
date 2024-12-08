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

$names = array_map(fn($person) => $person->name, $people);
$namesWithFormat = array_map(fn($person) => "<b style='color: red'>" . $person->name . "</b>", $people);

show($names);
show($namesWithFormat);
