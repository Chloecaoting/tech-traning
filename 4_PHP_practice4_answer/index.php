<?php
    // Q1
    $array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    // Q2
    $array2 = ["A", "B", "C", "D", "E"];

    // Q3
    $animals3 = ["dog", "fox", "monkey"];

    // Q4
    $animals3[] = "elephant";

    // Q5
    $animals3[0] = "cat";

    // Q6
    unset($animals3['1']);
    var_dump($animals3);

    // Q7
    foreach($animals3 as $animal) {
        echo $animal;
        echo '<br>';
    }

    // Q8
    foreach($animals3 as $animal) {
        if ($animal !== 'fox') {
            echo $animal;
            echo '<br>';
        }
    }
