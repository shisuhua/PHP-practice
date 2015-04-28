<?php
    interface One{
        const CONSTANT = "CONSTANT value";
        function fun1();
        function fun2();
    }
    interface Two{
        function fun3();
        function fun4();
    }
    abstract class Three implements One{
        function fun2(){
            echo "12345678<br>";
        }
    }
    class Four implements One{
        function fun1(){
            echo "function1<br>";
        }
        function fun2(){
            echo "function2<br>";
        }
    }
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 下午2:00
 */ 