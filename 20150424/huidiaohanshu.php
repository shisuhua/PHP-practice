<?php
    header("content-type:text/html;charset=utf8");
    function aone($a,$b){
        return $a+$b;
    }
    $result = "aone";
    echo $result;
    echo "运算结果是：".$result(2,3)."<br>";




    function filter($fun){
        for($i=0;$i <= 100;$i++ ){
            if(!$fun($i))
                continue;
            echo $i.'&nbsp';
        }
    }
    function one($num){
        return $num%3 == 0;
    }
    function two($num){
        return $num == strrev($num);
    }
    filter("one");
    echo "<hr>";
    filter('two');

    echo '<hr>';
    function fun($msg1,$msg2){
        echo '$msg1='.$msg1;
        echo "<br>";
        echo "\$msg2=".$msg2;
     }
    call_user_func_array('fun',array('LAMP','大笨蛋'));