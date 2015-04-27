<?php
    header("content-type:text/html;charset=utf8");
    class Person{
        protected $name;
        protected $sex;
        protected $age;

        function __construct($name="",$sex="男",$age=1){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }
        function say(){
            echo "$this->name $this->sex $this->age <br>";
        }
    }
    class Student extends Person{
        private $school;
        function __construct($name="",$sex="男",$age=20,$school=""){
            parent::__construct($name,$sex,$age);
            $this->school = $school;
        }
        function say(){
            parent::say();
            echo "正在".$this->school."学习<br>";
        }

    }

    $student = new Student("张三","男",20,"edu");
    $student->say();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-27
 * Time: 下午5:33
 */ 