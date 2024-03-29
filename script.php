<?php

require_once __DIR__ . '/vendor/autoload.php';

use EugeneGpil\BracketsCounter;

echo "Введите путь к файлу: ";
$file = fgets(STDIN);
$file = substr($file, 0, strlen($file) - 1);

if (!file_exists($file)) {
    echo "Файл не найден\n";
    return false;
}

$str = file_get_contents($file);

try {
    $res = BracketsCounter::bracketsCounter($str);
} catch (InvalidArgumentException $exception) {
    echo $exception . "\n";
    return false;
}

if ($res === true) {
    echo "Строка верна\n";
} else {
    echo "Строка неверна\n";
}
return true;