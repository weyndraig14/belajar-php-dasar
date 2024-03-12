<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Agung", "strtoupper");
sayHello("Agung", "strtolower");
sayHello("Agung", function (string $name): string {
    return strtoupper($name);
});
sayHello("Agung", fn($name) => strtoupper($name));