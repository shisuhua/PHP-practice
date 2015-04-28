<?php
    class Myclass{
        const CONSTANT = 'CONSTANT value';
        function showConstant(){
            echo self::CONSTANT."<br>";
        }
    }
    echo MyClass::CONSTANT."<br>";
    $class = new MyClass();
    $class->showConstant();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 上午11:01
 */ 