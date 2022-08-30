<?php

function printSumOfDigits(int $num)
{
    $digits = str_split((string) $num);

    if (count($digits) == 1) {
        return $num;
    }

    return array_shift($digits) + printSumOfDigits(implode($digits));
}

$test_digit = 1234445;

echo printSumOfDigits($test_digit);
