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

$greaterThan25 = array_filter($people, fn($person) => $person->age >= 25 );
show($greaterThan25);