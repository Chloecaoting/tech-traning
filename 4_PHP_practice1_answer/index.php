<?php
    // Q1
    echo "Hello World";

    // Q2
    $name = "Taro";
    // 以下2通りの方法で表示可
    echo "変数nameの中身：${name}";
    echo '変数nameの中身：' . $name;

    // Q3
    $lastName = "山田";
    $firstName = "太郎";
    echo $lastName . $firstName;

    // Q4
    $x4 = 10;
    $y4 = 2;
    echo $x4 + $y4;

    // Q5
    $x5 = 10;
    $y5 = 2;
    echo $x5 - $y5;

    // Q6
    $x6 = 10;
    $y6 = 2;
    echo $x6 * $y6;

    // Q7
    $x7 = 10;
    $y7 = 2;
    echo $x7 / $y7;

    // Q8
    $x8 = 10;
    $y8 = 3;
    echo $x8 % $y8;

    // Q9
    $x9 = 11;
    $y9 = 13;
    $z9 = $x9 * $y9;
    echo $z9;

    // Q10
    $x10 = 2;
    echo $x10;
    echo $x10 * $x10;
    echo $x10 * $x10 * $x10;

    // pow関数（PHPでべき乗を計算する関数）を使用した場合
    echo pow($x10, 2);
