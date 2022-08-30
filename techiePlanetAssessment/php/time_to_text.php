<?php

$input = file(__DIR__ . '/input/time_to_text.txt');

$clean_input_array = array_map(function ($item) {
    return (int) $item;
}, array_values(array_filter($input, function ($item) {
    return (is_numeric(rtrim($item)));
})));

$hr = $clean_input_array[0];
$min = $clean_input_array[1];

function convertTimeToWordFormat(int $hr, int $min): void
{
    $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);

    $past_or_before_string = $min > 30 ? "to" : "past";

    if ($min > 30) {
        $hr++;
    }

    if ($hr > 12) {
        $hr %= 12;
    }

    if ($min == 0) {
        echo $formatter->format($hr) . " o'clock";
        return;
    }

    echo formatMinutesString($min) . " " . $past_or_before_string . " " . $formatter->format($hr);
}

function formatMinutesString(int $min): string
{
    if ($min > 30) {
        $min = 60 - $min;
    }
    $min_string = getFractionEquiv($min);

    return (!in_array($min_string, ['quarter', 'half'])

        ? ($min_string . ($min > 1 ? " minutes " : " minute "))

        : $min_string);
}

function getFractionEquiv(int $min): string
{
    switch ($min) {
        case 30:
            return "half";
        case 45:
        case 15:
            return "quarter";
        default:
            $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
            return $formatter->format($min);
    }
}

convertTimeToWordFormat($hr, $min);