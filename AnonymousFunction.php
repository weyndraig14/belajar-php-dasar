<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Agung");
$sayHello("Sinaga");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Agung", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Agung", $filterFunction);

$firstName = "Agung";
$lastName = "Sinaga";

$sayHelloAgung = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloAgung();

$firstName = "Agung";
$lastName = "Sinaga";
$sayHelloAgung();
