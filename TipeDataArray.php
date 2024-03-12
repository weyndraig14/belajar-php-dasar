<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Agung", "Timotius", "Sinaga"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Vior";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Okto";
var_dump($names);

var_dump(count($names));

$agung = array(
    "id" => "agung",
    "name" => "Agung Sinaga",
    "age" => 16,
    "address" => array(
        "city" => "Bogor",
        "country" => "Indonesia"
    )
);
var_dump($agung);

var_dump($agung["name"]);
var_dump($agung["address"]["country"]);

$vior = [
    "id" => "vior",
    "name" => "Vior Okto",
    "age" => 14,
    "address" => [
        "city" => "Bandung",
        "country" => "Indonesia"
    ]
];
var_dump($vior);