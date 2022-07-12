<?php
    // Q1
    $x1 = 10;
    $y1 = 2;

    if ($x1 > $y1) {
        echo $x1 . 'は' . $y1 . 'より大きい';
    }

    // Q2
    $x2 = 10;
    $y2 = 20;

    if ($x2 >= $y2) {
        echo $x2 . 'は' . $y2 . '以上';
    } else {
        echo $x2 . 'は' . $y2 . 'より小さい';
    }

    // Q3
    $x3 = 10;
    $y3 = 10;
    if ($x3 > $y3) {
        echo $x3 . 'は' . $y3 . 'より大きい';
    } elseif ($x3 === $y3) {
        echo $x3 . 'と' . $y3 . 'は等しい';
    } else {
        echo $x3 . 'は' . $y3 . 'より小さい';
    }

    // Q4
    $x4 = 10;

    if ($x4 % 2 === 0) {
        echo '偶数です';
    } else {
        echo '奇数です';
    }

    // Q5
    $x5 = 4;

    if ($x5 % 3 == 0) {
        echo '3の倍数です';
    } else if ($x5 % 5 == 0) {
        echo '5の倍数です';
    } else {
        echo '3と5の倍数以外です';
    }

    // Q6
    $x6 = 14;

    if (10 <= $x6 && $x6 <= 20) {
        echo '10以上かつ20以下です';
    }

    // Q7
    $x7 = 111;

    if (100 <= $x7 || $x7 <= 10) {
        echo '100以上または10以下です';
    }

    // Q8
    $x8 = "dog";

    switch ($x8) {
        case "dog":
            echo '犬';
            break;
        case "cat":
            echo '猫';
            break;
        default:
            echo '犬と猫以外';
            break;
    }

    // Q9
    $x9 = 4;

    switch ($x9) {
        case 1:
            echo 'January';
        break;
        case 2:
            echo 'February';
            break;
        case 3:
            echo 'March';
            break;
        case 4:
            echo 'April';
            break;
        case 5:
            echo 'May';
            break;
        case 6:
            echo 'June';
            break;
        case 7:
            echo 'July';
            break;
        case 8:
            echo 'August';
            break;
        case 9:
            echo 'September';
            break;
        case 10:
            echo 'October';
            break;
        case 11:
            echo 'November';
            break;
        case 12:
            echo 'December';
            break;
        default:
            echo '月が存在しません';
            break;
    }
