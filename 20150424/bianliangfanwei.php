<?php
    header("content-type:text/html;charset=utf8");
    $one = 100;
    $two = 200;

    function demo1(){
        echo "1.运算结果：".($one + $two)."<br> ";
    }

    demo1();   //无法使用全局变量

    function demo2(){
        global $one,$two;
        echo "2.运算结果：".($one + $two)."<br> ";
    }

    demo2();

    function demo3(){
        $GLOBALS['two'] = $GLOBALS['two'] + $GLOBALS['one'];
    }

    echo "调用前：$two";
    demo3();
    echo "调用后：$two";
