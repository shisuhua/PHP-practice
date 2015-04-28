<?php
    class Person{
        private $name;
        private $sex;
        private $age;
        function __construct($name="",$sex="",$age=1){
            $this->name=$name;
            $this->age=$age;
            $this->sex=$sex;
        }
        /*
        public function setage($age){
            return $this->age = $age;
        }
            */
        function __clone(){
            $this->name = "mynameis".$this->name."clone";
            $this->age = 10;
        }
        function say(){
            echo "my name is:$this->name,my sex is:$this->sex,and i am $this->age years old<br>";
        }
    }
    $p1 = new Person("xg","boy",23);
    $p2 = clone $p1;
    $p1->say();
    //$p2->setage(12);
    $p2->say();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 上午11:10
 */ 