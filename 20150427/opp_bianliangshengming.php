<?php
    header("content-type:text/html;charset=utf8");
    class person{
        var $name;
        var $age;
        var $sex;
        public $name1;
        private $age1;
        static $sex1;

        function say(){
            echo "人在说话";
        }
    }

    class Phone {
        var $Manufacture;
        var $color;
        var $battery_capacity;
        var $screen_size;

        function call(){
            echo "正在打电话";
        }

        function message(){
            echo "正在发短信";
        }
    }

    $person1 = new person();
    $person2 = new person();
    $person3 = new person();

    $phone1 = new Phone();
    $phone2 = new Phone();
    $phone3 = new Phone();

    $person1->name = "张三";
    $person1->age = 30;
    $person1->sex = "男";

    echo "person1对象的名字是： $person1->name <br>";
    echo "person1对象的性别是：".$person1->sex."<br>";

    $person1->say();