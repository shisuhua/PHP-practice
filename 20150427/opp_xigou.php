<?php
    header("content-type:text/html;charset=utf8");
    class person{
        var $name;
        var $age;
        var $sex;

        function __construct($name="",$sex="男",$age=1){
            $this->name = $name;
            $this->sex = $sex;
            $this->age = $age;
        }

        function say(){
            echo "我的名字：$this->name,性别：$this->sex,年龄： $this->age <br>";
        }

        function  __destruct(){
            echo "再见".$this->name."<br>";
        }
    }

    $person1 = new person("张三","女",24);
    $person1 = null;
    $person2 = new person("李四","男");
    $person3 = new person("王五");
    //$person1->say();
    $person2->say();
    $person3->say();

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-26
 * Time: 下午9:53
 */ 