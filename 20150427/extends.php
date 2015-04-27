<?php
    header("content-type:text/html;charset=utf8");
    class Person{
        var $name;
        var $age;
        var $sex;
        function __construct($name="",$sex="男",$age=1){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }
        function say(){
            echo "我的名字：$this->name ,性别：$this->sex,年龄：$this->age<br>";
        }
        function run(){
            echo "$this->name 正在走路<br>";
        }
    }

    class Student extends Person{
        var $school;
        function study(){
            echo $this->name."正在".$this->school."学习<br>";
        }
    }

    class Teacher extends Student{
        var $wage;
        function teaching(){
            echo $this->name."正在".$this->school."教学，每月工资为$this->wage<br>";
        }
    }
    $teacher1=new Teacher("张老师","男",40);

    $teacher1->school = "edu";
    $teacher1->wage = 3000;
    $teacher1->say();
    $teacher1->study();
    $teacher1->teaching();

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-27
 * Time: 下午5:16
 */ 