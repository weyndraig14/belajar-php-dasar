<?php

$first = [
    "first_name" => "Agung"
];

$last = [
    "first_name" => "Agung",
    "last_name" => "Sinaga"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Agung",
    "last_name" => "Sinaga"
];

$b = [
    "last_name" => "Sinaga",
    "first_name" => "Agung"
];

var_dump($a == $b);
var_dump($a === $b);