<?php
    /*
     * 自定义一个函数名称为person,用于打印一个人的属性
     * @param string $name 人的名字，默认值为小明
     * @param int $age 人的年龄，默认值为20
     * @param string $sex 人的性别属性，默认值为男
     */
    header("content-type:text/html;charset=utf8");
    function person($name="小明",$age=20,$sex="男"){
        echo "我的名字：$name ,我的年龄：$age,我的性别：$sex <br>";
    }
    person();
    person("小红");
    person("小东",15);
    person(null,18,"女");


    /*
     * 声明一个函数more_args(),用于打印参数列表的值
     * 虽然没有声明参数列表，但可以传入任意个数，任意类型的参数值
     */
    function more_args(){
        $args = func_get_args();
        for($i=0;$i<count($args);$i++){
            echo "第 $i 个参数是".$args[$i]."<br>";
        }
    }
    more_args("one","two","three",1,2,3,4);