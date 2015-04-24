<?php
    /*
     * 定义一个计算两个整数平方和的函数
     * @param int $i  第一个整数参数，作为一个运算数
     * @param int $j  第二个整数参数，作为一个运算数
     * @return int    返回一个整数，是计算后平方和的值
     */
    function test($i,$j){
        $sum = 0;
        $sum = $i*$i + $j*$j;
        return $sum;
    }
    echo test(4,2);

    /*声明一个函数demo
     * @param int $arg  需要一个整型值参数，使用&按引用凡是传递参数
     */
    function demo(&$arg){
        $arg += 100;
    }
    $var = 100;
    demo($var);
    echo $var;

    /*sort()函数使用说明
     * @param array $arr  需要输入一个数组
     */
    $arr = array(1,2,3,4,6,76,78,5);
    print_r($arr);
    echo "<hr>";
    sort($arr);
    print_r($arr);