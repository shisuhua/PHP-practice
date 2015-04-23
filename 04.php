<?php
    define("con_int",100);
    echo con_int;

    define("flo",99.99);
    echo flo;

    define("boo",true);
    echo boo;   //输出1

    define ("abd",100,true);
    echo abd;
    echo Abd;

    echo "当前系统操作系统是：".PHP_OS."<br>";
    echo "当前使用的PHP版本是：".PHP_VERSION."<br>";
    echo "当前的文件是：".__FILE__."<br>";
    echo "当前行数是：".__LINE__."<br>";