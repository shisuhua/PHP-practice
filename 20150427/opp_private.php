<?php
    header("content-type:text/html;charset=utf8");
    class Person{
        private $name;
        private $sex;
        private $age;

        function __construct($name="默认人名",$sex="男",$age=1){
            $this->name = $name;
            $this->sex=$sex;
            $this->age=$age;
        }
        function run(){
            echo $this->name."在走路时".$this->leftLeg()."再".$this->rightLeg()."<br>";
        }
        private function leftLeg(){
            return "迈左脚";
        }
        private  function rightLeg(){
            return "迈右脚";
        }
    }
    $person1 = new Person();
    $person1->run();
    $person1->name = "李四";
    echo $person1->age;
    $person1->leftLeg();

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-26
 * Time: 下午10:38
 */ 