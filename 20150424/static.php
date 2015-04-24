<?php
    header("content-type:text/html;charset=utf8");
    //声明一个静态变量使用的测试函数
    function demo(){
        static $a = 0;
        $b = 0;
        echo "\$a = $a ,  \$b = $b ";
        $a++;
        $b++;
    }
    echo "第1次调用：";
    demo();
    echo "<br>第2次调用：";
    demo();
    echo "<br>第3次调用：";
    demo();