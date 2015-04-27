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
        function __set($propertyName,$propertyValue){
            if($propertyName == "sex"){
                if($propertyValue == "男" || $propertyValue == "女"){
                    return $this->sex = $propertyValue;
                }else
                    return;
            }
            if($propertyName == "age"){
                if($propertyValue > 150 || $propertyValue < 0)
                    return;
            }
            $this->$propertyName = $propertyValue;
        }
        public function say(){
            echo "我的名字：$this->name ,性别：$this->sex ,年龄：$this->age";
        }
    }

    $person1 = new Person("张三","男",20);
    $person1->name = "李四";
    $person1->sex = "女";
    $person1->age = 30;

    $person1->sex = "保密";
    $person1->age = 300;

    $person1->say();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-27
 * Time: 下午4:44
 */ 