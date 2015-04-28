<?php
    require "person.class.php";
    $person = new Person("zs","boy",20);
    $person_string = serialize($person);
    file_put_contents("file.txt",$person_string);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-28
 * Time: 下午12:03
 */ 