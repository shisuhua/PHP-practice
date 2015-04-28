<?php
    class Myclass{
        static $count;
        function __construct(){
            Myclass::$count++;
        }
        static function getCount(){
            return self::$count;
        }

    }
    Myclass::$count=0;
    $my1 = new Myclass();
    $my2 = new Myclass();
    $my3 = new Myclass();

    echo Myclass::getCount();
    echo $my3->getCount();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 上午10:38
 */ 