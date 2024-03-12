<?php

echo 'Name : ';
echo 'Agung Timotius Sinaga';
echo "\n";

echo "Name : ";
echo "Agung\t Timotius\t Sinaga\n";

echo <<<AGUNG
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

AGUNG;

echo <<<'AGUNG'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
AGUNG;
