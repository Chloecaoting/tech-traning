<?php
    // Q1
    function printHoge()
    {
        echo "Hoge";
    }

    printHoge();

    // Q2
    function printNum($num)
    {
        echo $num;
    }

    printNum(4);

    // Q3
    function printKuku($num) {
        for ($i = 1; $i <= 9; $i++) {
            echo $num * $i;
            echo '<br>';
        }
    }

    printKuku(4);

    // Q4
    function printIsEven($num) {
        if ($num % 2 === 0) {
            echo "偶数です";
        } else {
            echo "奇数です";
        }
    }

    printIsEven(3);

    // Q5
    function printMessage($str, $count) {
        for ($i = 0; $i < $count; $i++) {
            echo $str;
            echo '<br>';
         }
    }

    printMessage("ABC", 3);

    // Q6
    function printMaxNum($num1, $num2) {
        if ($num1 > $num2) {
            echo $num1;
        } elseif ($num1 < $num2) {
            echo $num2;
        } else {
            echo '同じ';
        }
    }

    printMaxNum(4, 5);

    // Q7
    function getSquared($num) {
        return $num * $num;
    }

    $result = getSquared(4);
    echo $result;

    // Q8
    function profile($name) {
        $msg = '私の名前は' . $name . 'です';
        return $msg;


    $message = profile("Taro");
    echo $message;

    // Q9
    function isEvenNumber($num) {
        if ($num % 2 == 0) {
            return true;
        } else {
        return false;
        }
    }

    $result = isEvenNumber(3);
    var_dump($result);

    // Q10
    function isTaro($str) {
        if ($str == "Taro") {
            return true;
        } else {
        return false;
        }
     }

    $result = isTaro("Taro");
    var_dump($result);
