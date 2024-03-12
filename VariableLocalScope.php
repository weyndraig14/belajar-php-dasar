<?php

function createName()
{
    $name = "Agung"; // local scope
}

createName();
echo $name . PHP_EOL;
