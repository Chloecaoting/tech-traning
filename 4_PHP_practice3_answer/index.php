<?php
    // Q1
    for ($i = 1; $i <= 10; $i++) {
        echo 'hoge';
        echo '<br>';
    }

    // Q2
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo '<br>';
    }

    // Q3
    for ($i = 1; $i < 10; $i++) {
        echo $i * 2;
        echo '<br>';
    }

    // Q4
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 === 0) {
            echo $i;
            echo '<br>';
        }
    }

    // Q5
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 !== 0) {
            echo '奇数です';
        } else {
            echo $i;
        }
        echo '<br>';
    }

    // Q6
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0) {
            echo $i;
            echo '<br>';
        }
    }

    // Q7
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 5 === 0) {
            echo $i;
            echo '<br>';
        }
    }

    // Q8
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo $i;
            echo '<br>';
        }
    }

    // Q9
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0) {
            echo 'Fizz';
        } else {
            echo $i;
        }
        echo '<br>';
    }

    // Q10
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo 'FizzBuzz';
        } elseif ($i % 5 === 0) {
            echo 'Buzz';
        } elseif ($i % 3 === 0) {
            echo 'Fizz';
        } else {
            echo $i;
        }
        echo '<br>';
    }
