<?php

function printStairCase(int $n): void
{
    if ($n > 0 && $n <= 100) {
        $k = $n;
        for ($i = 0; $i < $n; $i++) {
            echo str_repeat("&nbsp; ", --$k) . str_repeat("#", $i + 1) . "<br>";
        }
    }
}

printStairCase(10);
