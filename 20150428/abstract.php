<?php
    header("content-type:text/html;charset=utf8");
    abstract class Person{
        protected $name;
        protected $country;

        function __construct($name="",$country="china"){
            $this->name=$name;
            $this->country=$country;
        }
        abstract function say();
        abstract function eat();
        function run(){
            echo "使用两条腿走路<br>";
        }
    }

    class ChineseMan extends Person{
        function say(){
            echo "$this->name 是$this->country 人，讲汉语<br>";
        }
        function eat(){
            echo $this->name."使用筷子吃饭<br>";
        }
    }

    class Americans extends Person{

        function say(){
            echo "$this->name 是$this->country 人，讲英语<br>";
        }
        function eat(){
            echo $this->name."使用刀叉吃饭<br>";
        }
    }

    $chineseman = new ChineseMan("高晓峰","中国");
    $americans = new Americans("alex","美国");

    $chineseman->say();
    $chineseman->eat();
    $americans->say();
    $americans->eat();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 下午1:47
 */ 