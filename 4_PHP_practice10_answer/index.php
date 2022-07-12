<?php
    // Q1
    $school1 = 'SeedTech';
    echo mb_substr($school1, 4, 8);

    // Q2
    $school2 = 'SoodTech';
    echo str_replace('Sood', 'Seed', $school2);

    // Q3
    date_default_timezone_set('Asia/Tokyo');
    sleep(2);
    echo date("Y-m-d H:i:s");

    // Q4
    $list4 = [10, -500, 30, "1000", "1B", 0.8, [9], "5,000", 2021];
    foreach ($list4 as $item) {
        if (is_numeric($item)) {
            echo $item."<br>\n";
        }
    }

    // Q5
    $list5 = [100, 1000, 550];
    echo max($list6);

    // Q6
    $list6 = ['a', 'b', 'c', 'd'];
    $list6 = array_reverse($list6);
    foreach ($list6 as $item) {
        echo "$item<br>";
    }

    // Q7
    $word = "ABCDEFGHIJKLMNOPQRST";
    $words = str_split($word, 5);
    foreach ($words as $word) {
        echo $word."<br>\n";
    }

    // Q8
    $years = [1900, 2000, 2020, 2022];

    foreach ($years as $year) {
        if (year($year)) {
            echo $year."<br>";
        }
    }

    function year($year) {
      return checkdate(2, 29, $year);
    }

    // Q9
    class PHP {
        public $name;
        public $sentence;
        public function __construct($name, $sentence){
            $this->name = $name;
            $this->sentence = $sentence;
        }
        public function call(){
            echo $this->name . $this->sentence;
        }
    }

    $php = new PHP('PHP', 'をマスターしよう');
    $php->call();

    // Q10
    $url = "https://seedtech.co.jp/";
    header("Location: $url");
    exit;

    // Q11
    $a = 5;
    $b = $a;
    $a = 10;
    echo $b;

    echo '<br>';

    $a = 5;
    $b =& $a;
    $a = 10;
    echo $b;
