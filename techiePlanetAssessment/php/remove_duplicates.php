<?php

function removeDuplicates(array $input_array): array
{
    $output_array = [];

    foreach ($input_array as $sub_array) {
        $temp_unique = [];
        for ($i = 0; $i < count($sub_array); $i++) {
            if (in_array($sub_array[$i], $temp_unique)) {
                $temp_unique[] = 0;
            } else {
                $temp_unique[] = $sub_array[$i];
            }
        }
        $output_array[] = $temp_unique;
    }
    return $output_array;
}

$test_array_one = [1, 3, 1, 2, 3, 4, 4, 3, 5];
$test_array_two = [1, 1, 1, 1, 1, 1, 1];


echo "<pre>";
echo json_encode(
    removeDuplicates([
        $test_array_one,
        $test_array_two
    ])
);
echo "</pre>";
