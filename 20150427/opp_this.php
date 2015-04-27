<?php
    header("content-type:text/html;charset=utf8");
    class person{
        var $name;
        var $age;
        var $sex;

        function say(){
            echo "我的名字：$this->name,性别：$this->age,年龄： $this->sex";
        }
    }

    $person1 = new person();
    $person1->name = "张三";
    $person1->sex = "男";
    $person1->age = 20;

    $person1->say();


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-26
 * Time: 下午5:30
 */ 