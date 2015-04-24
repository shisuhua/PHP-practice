<?php
    $a = 10%3;
    var_dump($a);
    $b = 10.9%3.3;
    var_dump($b);
    $c = "100ren"%"3rem";
    var_dump($c);

    $year = 2008;
    if(($year%4 == 0 && $year%100 !=0) || ($year%400 == 0)){
        echo "$year 年为闰年 <br>";
    }else {
        echo "$year 年为平年 <br>";
    }

    $num = rand()%10;
    echo $num;

    $a = 10;
    $b = $a--;
    echo $a;
    echo $b;
    $b = $a-- - --$a;
    echo $a;
    echo $b;     //2

    echo "<br>";

    $i = "a";
    for($n = 0; $n < 52; $n++){
        echo ++$i."\n";
    }

    $name = "tom";
    $age = 27;
    $height = 1.71;
    echo "my name is:".$name.",my age is:".$age.",my height is".$height."."."<br>";

    $a = 20;
    $b = 30;
    $c = $a & $b;
    echo $c;

