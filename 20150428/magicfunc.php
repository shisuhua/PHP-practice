<?php
    class TestClass{
        var $foo;
        function __construct($foo){
            $this->foo = $foo;
        }
        public function __toString(){
            return  $this->foo;
        }

        function printHello(){
            echo "Hello<br>";
        }
        function  __call($functionName,$arg){
            echo "you function: $functionName (param:";
            print_r($arg);
            echo ")is null<br>";
        }
    }
    $obj = new TestClass("hello");
    //echo $obj->foo;
    echo $obj;
    $obj -> myfun("one",3,"three");
    $obj -> otherfun(4,56);
    $obj->printHello();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 上午11:29
 */ 