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
        function __get($propertyName){
            if($propertyName == "sex"){
                return "保密";
            }
            if($propertyName == "age"){
                if($this->age > 30)
                    return $this->age - 10;
                else
                    return $this->$propertyName;
            }else{
                return $this->$propertyName;
            }

        }
    }

    $person1 = new Person("张三","男",20);
    echo "姓名：".$person1->name."<br>";
    echo "性别：".$person1->sex."<br>";
    echo "年龄：".$person1->age."<br>";
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-27
 * Time: 下午5:02
 */ 