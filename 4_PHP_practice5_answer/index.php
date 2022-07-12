<?php
    // Q1
    $alphabet = [
        'a' => 'A',
        'b' => 'B',
        'c' => 'C',
        'd' => 'D',
    ];

    // Q2
    $alphabet['e'] = 'E';

    // Q3
    $alphabet['a'] = 'AAA';

    // Q4
    unset($alphabet['b']);
    var_dump($alphabet);

    // Q5
    foreach ($alphabet as $key => $value) {
        echo $key;
        echo '<br>';
    }

    // Q6
    foreach ($alphabet as $value) {
        echo $value;
        echo '<br>';
    }

    // Q7
    foreach ($alphabet as $key => $value) {
        echo $key . ': ' . $value;
        echo '<br>';
    }

    // Q8
    foreach ($alphabet as $key => $value) {
        if ($key !== 'c') {
            echo $key . ': ' . $value;
            echo '<br>';
        }
    }

    // Q9
    foreach ($alphabet as $key => $value) {
        if ($value !== 'B') {
            echo $key . ': ' . $value;
            echo '<br>';
        }
    }

    // Q10
    foreach ($alphabet as $key => $value) {
        if ($key !== 'b' || $value !== 'C') {
            echo $key . ': ' . $value;
            echo '<br>';
        }
    }
