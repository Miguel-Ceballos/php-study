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

usort($people,
    fn($person1, $person2) => $person1->age <=> $person2->age
);

show($people);