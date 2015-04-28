<?php
    class Person{
        private $name;
        private $sex;
        private $age;
        function __construct($name="",$sex="",$age=""){
            $this->name = $name;
            $this->sex = $sex;
            $this->age = $age;
        }
        function say(){
            echo "我的名字：".$this->name."性别：".$this->sex."年龄：".$this->age."<br>";
        }
    }
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 上午11:59
 */ 